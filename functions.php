<?php 

/*
 *	Удобный var_dump
*/
function vd($data) {

	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die;
}


function connectToDb() {

  $pdo = new PDO("mysql:host=localhost;dbname=app;charset=utf8","root","root");
  
  return $pdo;
}


