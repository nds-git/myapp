<?php
$db = require __DIR__ .'/../db/Start.php';
 
$db -> delete('posts', $_GET['id']);

header('Location: /');