<?php 
$db = require __DIR__ .'/../db/Start.php';
 
$db -> update('posts', [
   'title' =>  $_POST['title'],
  ], $_POST['id']);

header('Location: /');