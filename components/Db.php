<?php

/**
 * Сlass Db
 * method getConnection give you open stream of database connection
 * method setLocale sets regional setings for get local time
 */

class Db
{
	
	public static function getConnection()
	{
		$paramsPath = ROOT.'/config.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";

		$db = new PDO($dsn, $params['user'], $params['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
		return $db;
	}
	public static function setLocale()
	{
		setlocale(LC_TIME,"ru_RUS.utf8");

		$day = strftime('%d');
		$mon = strftime('%B');
		$year = strftime('%Y');

		$date = $day.'-'.$mon.'-'.$year;

		return $date;
	}
	public static function getRootPath()
	{
		$rootPath = dirname(__FILE__);
		
		return $rootPath;
	}
}