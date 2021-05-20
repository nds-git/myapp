<?php

class Connection {

  static function make($paramToConnect) { 
    return new PDO(
		"{$paramToConnect['host']};dbname={$paramToConnect['db']};{$paramToConnect['charset']}",
		"{$paramToConnect['user']}",
		"{$paramToConnect['pass']}");
 }// fin public static function make
 
} // fin Connection