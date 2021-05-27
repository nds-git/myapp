<?php

class QueryBuilder { 
  
  protected $pdo; // здесь можно использовтаь private а тогда что лучше??

/*
 *  чтобы не передавать постоянно $pdo в функциях при извлечении
 *  используем конструктор, j-ый автоматич. будет вызываться 
*/
  public function __construct($pdo) {

    $this -> pdo = $pdo;
  }

/*
 *	Извлечение конкретной ОДНОЙ записи со всеми полями из Таблицы
*/
  public function getOne($table,$id) {

	$sql = "SELECT * FROM {$table} WHERE `id`={$id}";
	$statement = $this -> pdo -> prepare($sql);
	$statement -> execute();
	$result = $statement  -> fetch(PDO::FETCH_ASSOC);

	return $result;
  }

/*
 *	Извлечение всех записей со всеми полями из Таблицы
*/
  public function getAll($table) {

	$sql = "SELECT * FROM {$table}";
	$statement = $this -> pdo -> prepare($sql);
	$statement -> execute();
	
	return $statement  -> fetchAll(PDO::FETCH_ASSOC);
  }

/*
 *	Добавление записи в таблицу
*/
  public function create($table, $data) {

  	$keys = implode('`,`', array_keys($data));
  	$tags = ":".implode(', :', array_keys($data));


	$sql = "INSERT INTO `{$table}` (`$keys`) VALUES ({$tags})";
	$statement = $this -> pdo -> prepare($sql);
	$statement -> execute($data);
  } 

/*
 *	Изменение записи в таблицу
*/
  public function update($table, $data, $id) {

  	$keys = array_keys($data);
  	
  	$string = '';

  	foreach ($keys as $key) {
  		$string .= $key . '=:' . $key . ',';
  	}
    $keys = rtrim($string, ',');
    
    $data['id'] = $id;
    
	$sql = "UPDATE `{$table}` SET $keys WHERE `id` = :id";
	$statement = $this -> pdo -> prepare($sql);
	$statement -> execute($data);
  } 

/*
 *	Удалить запись в таблицу
*/
  public function delete($table, $id) {
    
	$sql = "DELETE FROM `{$table}` WHERE `id` = :id";
	$statement = $this -> pdo -> prepare($sql);
	$statement -> execute([
     'id' => $id
	]);
  } 


/*
 *  поиск конкретной записи в таблице 
*/
 public function get($table,$where = []) {
  return $this->action('SELECT *', $table, $where);
 }
 
/*
 *  поиск конкретной записи в таблице 
*/
 public function action($action,$table,$where = []) {
  if(count($where === 3) ) {
   
   $operators = ['=','>','<','>=','<=','!='];

   $field    = $where[0];
   $operator = $where[1]; 
   $value    = $where[2]; 
  
   if(in_array($operator,$operators)) {

    $sql = "{$action} FROM `{$table}` WHERE `{$field}` {$operator} ?";
    if(!$this -> query($sql,[$value]) -> error()) {
     return $this;
    }
   
   }

  }
  return false;
 }



} // fin class QueryBuilder

 