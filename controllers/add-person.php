<?php 
session_start();

$db = require __DIR__ .'/../db/Start.php';
require __DIR__ .'/../classes/Validate.php';
require __DIR__ .'/../classes/Flash.php';

if($_POST['name']) {

  $validate = new Validate();
  
  $validate -> check($_POST, [
   'email' => [
    'min' 		=> 5,
    'max'		=> 25,
    // 'unique'	=> 'posts', // не получилось  Call to a member function get()
    'require' 	=> true
   ],
   'title' => [
    'min' 		=> 15,
    'max'		=> 255,
    'require' 	=> true
   ],
   'name' => [
    'min' 		=> 3,
    'max'		=> 25,
    'require' 	=> true
   ],   
  'password' => [
    'required' => true,
    'min'      => 3
  ],
  'confirmPassword' => [
    'required' => true,
    'min'      => 3,
    'matches'  => 'password'
  ]
]);

 
 if($validate -> passed()) {
  $posts = $db -> create('posts',[
    'title'    => $_POST['title'],
    'name'     => $_POST['name'],
    'email'    => $_POST['email'],
    'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
  ]);
  Flash::redirect_to("");
  exit;
 } else {
    foreach ($validate -> errors() as $error) {
     $_SESSION = Flash::message('danger', $error);     
     Flash::redirect_to("new-person");
    }
    
  }
 
//  unset($_SESSION); $_SESSION['sms'],$_SESSION['error'].'

} 
