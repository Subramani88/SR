<?php
define('APP_PATH', '/');
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// Initiate
$request = \Klein\Request::createFromGlobals();
$request->server()->set('REQUEST_URI', substr($_SERVER['REQUEST_URI'],  strlen(APP_PATH)));
$route = new \Klein\Klein();

//Home
$route->respond('/', function ($request, $response, $service) {
	$service->pageName = 'home';
	$service->pageClass = 'home';
  	$service->render('views/home.php');
});

$route->respond('/action/sendmail', function ($request, $response, $service) {
	return 'success';
});

$route->dispatch();