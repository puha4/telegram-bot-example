<?php

/**
 * Created by Vitalii Puhach.
 * Класс для отправки сообщений в чат телеграма
 */
class Telegram_Bot
{
    private $_chat_id;
    private $_bot_token;
    private $_url = "https://api.telegram.org/bot";

    /**
     * Конструктор
     * @param int $chat_id
     * @param string $bot_token
     */
    public function __construct($bot_token, $chat_id) {
        if(!$chat_id OR !$bot_token) die('Telegram_Bot __construct error');

        $this->_chat_id = $chat_id;
        $this->_bot_token = $chat_id;
        $this->_url .= $bot_token;
    }

    /**
     * Конструктор
     * @param string $message
     */
    public function send($message) {
        if(strlen($message) > 500) {
            $message = substr($message, 0, 500) . "...";
        }

        file_get_contents($this->_url . "/sendmessage?chat_id=" . $this->_chat_id . "&text=" . $message);
    }

    /**
     * Получаем последние доступные боту сообщения
     * для определения идентификатора чата
     */
    public function get_updates() {
        $update = file_get_contents($this->_url  . "/getupdates");

        return json_decode($update, true);
    }
}