<?php


Class News
{
	/**
	*returns single news item with specified id
	*@param integer $id
	*/

	public static function getNewsItemById($id)
	{
		$id = intval($id);
		if($id){

		$conn = Db::getConnection();
		
		$result = $conn->query('SELECT * FROM `news` WHERE id='.$id );
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$newsItem = $result->fetch();
		return $newsItem;
	}
		
	}

	/**
	*returns all news by limit (10)
	*@param integer $id
	*/

	public static function getNewsList()
	{
		$conn = Db::getConnection();

		$newsList = array();
		$result = $conn->query('SELECT id, title, authorname, data, short_content, category '
			.'FROM `news` '
			.'ORDER BY data DESC '
			.'LIMIT 10 ');
		$i = 0;
		while ($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['authorname'] = $row['authorname'];
			$newsList[$i]['data'] = $row['data'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$newsList[$i]['category'] = $row['category'];
			$i++;
		}

		return $newsList;
	}
 }