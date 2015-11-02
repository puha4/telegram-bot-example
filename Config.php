<?php

/**
 * Класс для удобной работы с конфиг-файлом.
 */
class Config {

	/**
	 * Массив настроек
	 * @var array
	 */
	public static $config = array();

	/**
	 * Загрузка конфига
	 * @param array $config
	 */
	public static function set($config) {
		if(empty($config)) throw new Exception('Class Config: empty array $config');
		self::$config = $config;
	}

	/**
	 * Получение значения по ключу
	 * @param  string $field
	 * @return mixed
	 */
	public static function get($field = null) {
		return isset(self::$config[$field])? self::$config[$field]: self::$config;
	}

}

?>