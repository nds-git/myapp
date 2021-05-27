<?php

class Validate
{ 
 
 private $passed = false, $errors = [], $db= null;
  
 public function __construct() {
  $this -> db = $db;
 }

/**
 * Валидация check
 * Метод для проверки данных из форм
 * $source - это наш глобальный массив $_POST
 * $items  - правила для каждого из значений в массиве $_POST
 * Метод берет имя правила и сопостовляет его с переданным значением $_POST
**/
 public function check($source,$items = []) {
   
  /**
   проверяем правила для каждого из значенй POST
  **/
  foreach ($items as $item => $rules) {
     foreach ($rules as $rule => $rule_value) {
     //rule - берем какой-то 1 ключ - правило  
     //source[$item] - берем одно значение из правила
       $value = $source[$item];
       //необходимо убедиться, что значение не путое и обязательное
 
      switch ($rule) {
       
        case 'min':
          if(strlen($value) < $rule_value) {
            $this -> addError(" Слишком маленькое {$item} ");
          }
        break;
        
        case 'max':
          if(strlen($value) > $rule_value) {
            $this -> addError(" Слишком большое {$item} ");
          }
        break;

        case 'matches':
          if($value != $source[$rule_value]) {
            $this -> addError(" {$rule_value} должен совпадать с {$item} ");
          }
        break;

        case 'unique':
          $check = $this -> db -> get($rule_value, [$item, '=', $value]);
          if($check -> count()) {
           $this -> addError( " Уже такое есть {$item} ");
          }
        break;

        // case 'email':
        //   if(!filter_var($value,FILTER_VALIDATE_EMAIL)) {
        //    $this -> addError( " Не корректный ввод  {$item} ");
        //   }
        // break;
     }//fin switch

    }//fin foreach  $rules
   } //fin all foreach
   
  if( empty($this->errors) ) {
    $this -> passed = true;
  }
return $this;
} // fin check

 public function addError($error) {
  $this -> errors[] = $error;
 }

 public function errors() {
  return $this -> errors;
 }

 public function passed() {
  return $this -> passed;
 }

} //end class Validate