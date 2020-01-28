<?php

//Controllers includes 'view' files and throws models' data to them

include_once ROOT.'/models/Category.php';

class CategoryController
{

	public function actionView($id)
	{
		
	if($id) {

		$categoryItem = array();
		$categoryItem = Category::getCategoryItemById($id);

		require_once(ROOT . '/views/category/view.php');

		return true;
	}
}
}