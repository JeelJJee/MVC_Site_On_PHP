<?php

//Controllers includes 'view' files and throws models' data to them

include_once ROOT.'/models/News.php';

class AllController
{
	public function actionIndex()
	{
		
		$newsList = array();
		
		require_once(ROOT.'/views/All/index.php');

		return true;

	}

	public function actionView($id)
	{
		
		if($id) {
		
		require_once(ROOT . '/views/news/view.php');

		return true;
	}
}
}