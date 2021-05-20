<?php
require __DIR__ .'/../functions.php';

// 1. настроить сервер.чтобы все шло чз index.php
// 2. вардампить сервер

$routes = [
	"/"          => 'functions/homepage.php',
    "/about"     => 'functions/about.php'
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
 include __DIR__ .'/../' . $routes[$route];exit;
} else {
	vd(404);
}


?>

