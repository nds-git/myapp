<?php

require __DIR__ .'/./functions.php';
 
$db    = require __DIR__ .'/./db/Start.php';

$posts = $db -> getAll('posts');

require __DIR__ .'/./view/index.view.php';