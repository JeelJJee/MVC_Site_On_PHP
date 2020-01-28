<?php

	/**
	*returns count of photos
	*@return integer
	*/

class Photos{


	public static function getPhotosLenFromDb(){

		$conn = Db::getConnection();
		$result = $conn->query('SELECT * FROM `news` ORDER BY id DESC LIMIT 1');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$Item = $result->fetch();

		return $Item['id'];
	}
}