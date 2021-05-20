<?php 

$config = require  __DIR__ .'/../config.php';
require __DIR__ .'/./QueryBuilder.php';
require __DIR__ .'/./Connection.php';

return new QueryBuilder(
	Connection::make($config['database'])
);