<?php
/**
 * тоже самое что и $pdo = new PDO("mysql:host=localhost;dbname=app;charset=utf8","root","root");
**/
class Connection {

  static function make($paramsToConnect) { 
    return new PDO(
		"{$paramsToConnect['host']};dbname={$paramsToConnect['db']};{$paramsToConnect['charset']}",
		"{$paramsToConnect['user']}",
		"{$paramsToConnect['pass']}");
 }// fin public static function make
 
} // fin Connection