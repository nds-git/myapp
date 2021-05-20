<?php 

$paramToConnect = require __DIR__ .'/../config.php';

require __DIR__ .'/./Connection.php';
require __DIR__ .'/./QueryBuilder.php';

return new QueryBuilder(
	Connection::make($paramToConnect['database'])
);