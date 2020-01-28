<?php

//FRONT CONTROLLER

//For debuging
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

$a = new Router();
$a->run();
$conn = null;
?>