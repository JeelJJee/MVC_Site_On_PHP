<?php

//Controllers includes 'view' files and throws models' data to them

include_once ROOT.'/models/Photos.php';

class PhotosController
{
	
	public function actionIndex()
	{
		$countOfPhotos = Photos::getPhotosLenFromDb();
		
		require_once(ROOT.'/views/Photos/index.php');

		return true;

	}

	public function actionView($id)
	{
		
	if($id) {
		
		require_once(ROOT . '/views/Photos/view.php');

		return true;
	}
}
}