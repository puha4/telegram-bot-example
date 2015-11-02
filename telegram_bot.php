<?php
define('DOCROOT', '..//');

require(DOCROOT.'classes/Telegram_Bot.php');
require(DOCROOT.'classes/Config.php');

$config = require(DOCROOT.'config.php');
Config::set($config);

$bot_token = Config::get("bot_token");
$chat_id = Config::get("chat_id");

$telegram_bot = new Telegram_Bot($bot_token, $chat_id);

$telegram_bot->send("Hi, this test message from Ebay bot robot in 108 server! second test");


