<?php

class Connection {

 public static function make($config) {
 
	return new PDO(
		"{$config['host']};dbname={$config['db']}",
		"{$config['user']}",
		"{$config['pass']}",
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "{$config['charset']}")
	);
 }// fin public static function make
 
} // fin Connection