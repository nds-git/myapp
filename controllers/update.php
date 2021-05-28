<?php 
session_start();

$db = require __DIR__ .'/../db/Start.php';
 require __DIR__ .'/../classes/Validate.php';
require __DIR__ .'/../classes/Flash.php';

if($_POST['title']) {



  $validate = new Validate();
  
  $validate -> check($_POST, [
   'title' => [
    'min' 		=> 15,
    'max'		=> 255,
    'require' 	=> true
   ]
]);



 if($validate -> passed()) {
  $db -> update('posts', [
   'title' =>  $_POST['title'],
  ], $_POST['id']);
  Flash::redirect_to("");
  exit;
 } else {
    foreach ($validate -> errors() as $error) {
     $_SESSION = Flash::message('danger', $error);     
     Flash::redirect_to("edit.php?id=".$_POST['id']);
    }
    
  }
}