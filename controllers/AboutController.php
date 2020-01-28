<?php

//Controllers includes 'view' files and throws models' data to them

include_once ROOT.'/models/About.php';

class AboutController
{
	public function actionIndex()
	{
		
		require_once(ROOT.'/views/About/index.php');

		return true;
	}
}