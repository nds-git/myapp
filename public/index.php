<?php


require __DIR__ .'/../functions.php';
require __DIR__ .'/../classes/GetFileName.php';

if(!empty($_GET)) {
 $getFile = new GetFileName;
 $getFileName = $getFile-> f_getFileName($_GET);
}

$id = $_GET['id']*1;

$routes = [
	"/"          	 => '/controllers/homepage.php',
    "/about"    	 => '/controllers/about.php',
    "/add-post"    	 => '/controllers/add-post.php',
    "/store"    	 => '/controllers/store.php',
    f_show($id,$getFileName) => "/controllers/".$getFileName.".php",
    "/update"    	 => '/controllers/update.php',
    "/delete"    	 => '/controllers/delete.php',
    "/new-person"    => '/controllers/new-person.php',
    "/add-person"    => '/controllers/add-person.php'
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
 include __DIR__ .'/../' . $routes[$route];exit;
} else {
 vd(404);
}


?>

