<?php

return  array(
										//Order of numeration = prioryty
	'news/([0-9]+)' => 'news/view/$1', 	//actrionWiew in NewsController
	'news' => 'news/index', 		 	//actionIndex
	'category/([0-9]+)' => 'category/view/$1', 
	'photos' => 'photos/index',
	'about' => 'about/index',
	'archives/([0-9]{4})' => 'archives/view/$1' ,
	'archives' => 'archives/index',
	'' => 'all/index',
);