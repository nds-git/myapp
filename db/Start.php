<?php 

$paramsToConnect = require __DIR__ .'/../config.php';

require __DIR__ .'/./Connection.php';
require __DIR__ .'/./QueryBuilder.php';

/**
*  $paramsToConnect - массив с параметрами для подключения к базе
*  Connection::make - статичный метод класса Connection - тупо new PDO(подключение к БД);
*  return new QueryBuilder - возвращает любые методы из класса QueryBuilder, 
*  - дальше используем как $db = require __DIR__ .'/./db/Start.php';
*  $posts = $db -> МЕТОД, класса QueryBuilder;
**/
return new QueryBuilder(
	Connection::make($paramsToConnect['database'])
);