<?php 

$db = require __DIR__ .'/../db/Start.php';

$posts = $db -> getAll('posts');

require __DIR__ .'/../index.view.php';