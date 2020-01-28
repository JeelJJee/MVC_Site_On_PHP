<?php

//Catch soome warnings or errors and throws exception instead of them
//If you want to sees errors - comments this block

set_error_handler(function($errno, $errstr, $errfile, $errline, $errcontext) {

    if (0 === error_reporting()) {
        return false;
    }

    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

//var $routes stores routes like assoc massive

class Router
{
	private $routes;
	
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	//htacces already hidden URL (somesite.com/) 
	private function getUri()
	{
		if(!empty($_SERVER['REQUEST_URI']))
		{
			return trim($_SERVER['REQUEST_URI'] , '/'); //Give us only something like news/1
		}
	}

	//run() is general activating function. he will be called in index.php
	
	public function run()
	{
		
		$uri  = $this->getUri(); 
		
		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) //if current uri being in routes
			{									//Order of numeration = prioryty

			//Replace  uriPattern -> path in $uri 
			//Here we have news/view/$1/$2 instead news/([a-z]+)/([0-9]+)
			//([a-z]+)/([0-9]+) droped to $1/$2
			$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
			
			//Divide by segments
			//1 segment will go like name of controllre (News/Arhives/Photos)
			//2 segment will go like action-function name into that controller(actionIndex/actionView)

			$segments = explode('/', $internalRoute);
			$controllerName = ucfirst(array_shift($segments).'Controller');
			$actionName = 'action'.ucfirst(array_shift($segments));
			//array_shift give first item from massive and delete him

			$parameters  = $segments;
			
			//Get the controller file
			$controllerFile = ROOT.'/controllers/'.
			$controllerName.'.php';

			if (file_exists($controllerFile)){
				include_once ($controllerFile);
			}

			//Create object of controller
			$controllerObject = new $controllerName;

			//1. Calls callable func
			//2. Give him massive of object + functions in this object , params
			//3. In controller will be passed like variables and we can give them there like ordered params.Infinity pieces. Just need pick them up later there.
			
			try {
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if($result != null){
				break;
			}
			} catch (ErrorException $e) { //Here we catch that exception what we declarated in line 1!
				echo('Данные разделы еще не доработаны..');
				echo "<br><a href='/'>назад</a>";
    			//echo $e->getMessage();
			}
		}
	}
}
}