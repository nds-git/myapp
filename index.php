<?php

require __DIR__ .'/./functions.php';

$route = $_SERVER['REQUEST_URI'];

$routes = [
 "/" 		=> 'controllers/homepage.php',
 "about" 	=> 'controllers/about.php'      
];

if(array_key_exists($route, $routes)) {
 include $routes[$route];exit;
} else {
 vd (404);
}
 
