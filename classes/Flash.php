<?php

class Flash
{ 

 protected $sms = null, $error = null;

 public function __construct() {
  $this -> sms     = $sms;
  $this -> error   = $error;
 }


 public static function message($sms, $error) { 
  	$result = [
     'sms'   =>  $sms,
     'error' =>  $error
  	];
  	return $result ;
  }	
 


/*
  *      Функция для получения стиля в $_SESSION
  *      danger   - красный
  *      success  - зелененький  
*/

  public static function redirect_to($path) {
   header("Location: /$path");
   exit();
  }

} //end status Flash