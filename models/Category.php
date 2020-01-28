<?php


Class Category
{
	/**
	*returns all news item with specified category
	*@param integer $id
	*@return list
	*/

	public static function getCategoryItemById($id){
	$conn = Db::getConnection();

		$categoryItem = array();

		$result = $conn->query('SELECT id, title, authorname, data, short_content, category '
			.'FROM `news` '
			."WHERE category=$id "
			.'ORDER BY data DESC '
			.'LIMIT 10 ');

		$i = 0;
		while ($row = $result->fetch()) {
			$categoryItem[$i]['id'] = $row['id'];
			$categoryItem[$i]['title'] = $row['title'];
			$categoryItem[$i]['authorname'] = $row['authorname'];
			$categoryItem[$i]['data'] = $row['data'];
			$categoryItem[$i]['short_content'] = $row['short_content'];
			$categoryItem[$i]['category'] = $row['category'];
			$i++;
		}

		return $categoryItem;
	}
}