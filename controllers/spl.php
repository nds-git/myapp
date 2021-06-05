<?php 
session_start();
// vd($_SESSION);

$db = require __DIR__ .'/../db/Start.php';

spl_autoload_register(function ($class) {
	require __DIR__ .'/../classes/'.$class.'.php';
});
 

$myClass1 = new Class1();
$myClass2 = new Class2();

die;

$posts = $db -> getAll('posts');

require __DIR__ .'/../view/index.view.php';