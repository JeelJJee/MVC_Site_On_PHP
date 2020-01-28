<?php

//Controllers includes 'view' files and throws models' data to them

include_once ROOT.'/models/Archives.php';

class ArchivesController
{
	public function actionView($id)
	{
		
	if($id) {
		$archivesItem = array();
		$archivesItem = Archives::getArchivesItemById($id);
		
		require_once(ROOT . '/views/archives/view.php');

		return true;
	}
}

	public function actionIndex()
	{
		
		require_once(ROOT.'/views/archives/index.php');

		return true;
	}
}

