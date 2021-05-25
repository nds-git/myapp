<?php 
 $db = require __DIR__ .'/../db/Start.php';

 if($_POST['title']) {
  
  $posts = $db -> create('posts',[
    'title'     => $_POST['title']
  ]);
  header('Location:/');
  exit;  	
 }
 