<?php

	/**
	*returns all news item with specified data (YEAR)
	*@param integer $id
	*@return list
	*/
class Archives
{

public static function getArchivesItemById($id){
		$conn = Db::getConnection();
		$archivesItem = array();

		$result = $conn->query('SELECT id, title, authorname, data, short_content, category '
			.'FROM `news` '
			.'WHERE YEAR(data) ='. "$id "
			.'ORDER BY data DESC '
			.'LIMIT 10 ');

		$i = 0;
		while ($row = $result->fetch()) {
			$archivesItem[$i]['id'] = $row['id'];
			$archivesItem[$i]['title'] = $row['title'];
			$archivesItem[$i]['authorname'] = $row['authorname'];
			$archivesItem[$i]['data'] = $row['data'];
			$archivesItem[$i]['short_content'] = $row['short_content'];
			$archivesItem[$i]['category'] = $row['category'];
			$i++;
		}

		return $archivesItem;
		}
	}