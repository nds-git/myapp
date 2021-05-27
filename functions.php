<?php 
  // $pdo = new PDO("mysql:host=localhost;dbname=app;charset=utf8","root","root");

/*
 *	Удобный var_dump
*/
function vd($data) {

	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die;
}

 /*
 *  f_show
 *  возвращает нам имя файла и его id
 *  для того, чтобы автоматически генерировать страницы 
*/
 function f_show($id,$getFileName) {
 	
   return "/".$getFileName.".php?id=".$id."" ;
 }
 
