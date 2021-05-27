<?php

/*
 *  класс Input
 *  буквально проверяет пустой ли массив GET или POST
*/
class Input {
 
 /*
 * буквально проверяет пустой ли массив GET или POST
 */
 public static function exists($type = 'post') {
     switch ($type) {
     	case 'post':
     		return (!empty($_POST)) ? true : false;
     	case 'get':
     		return (!empty($_GET))  ? true : false;
     	default:
     		return false;
 		break;
     }
    }
 
 /*
 * если уже ввели значение, чтобы его не перебивать заново
 */ 
 public static function get($item) {
 	if(isset($_POST[$item]))
 	 return $_POST[$item];
 	else if(isset($_GET[$item]))
 	 return $_GET[$item];
    
    return '';
 }
   


}  //fin сlass