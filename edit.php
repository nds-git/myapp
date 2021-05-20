
<?php
require __DIR__ .'/./functions.php';
$db = require __DIR__ .'/./db/Start.php';

$id = $_GET['id']*1;

$post = $db -> getOne('posts',$id);

require __DIR__ .'/./edit.view.php';