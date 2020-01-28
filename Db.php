<?php

// $conn = Db::getConnection(); Give you db stream

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
}

?>