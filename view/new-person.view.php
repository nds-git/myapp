<?php
session_start();
// vd($_SESSION);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>	
 <meta charset="UTF-8" / >
 <title>Новый персонаж нашей басни</title>	
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>





<br/><br/>
<div class="container">
 <div class="row">
  <div class="col-md-8 offset-md-2">
    <?php
  if($_SESSION) {
     echo "<div class=\"alert alert-".$_SESSION['sms']." text-dark\" role=\"alert\">".$_SESSION['error']."</div>";
     session_unset();
  }
 
?>
   <form action="./add-person" method="POST">
   	<div class="form-group">
   		<label for="" class="">Имя - name</label>
      	<input type="text" name="name" class="form-control" value="Введите имя" /> <br/>
   	</div>
    <div class="form-group">
      <label for="" class="">Название статьи - title</label>
        <input type="text" name="title" class="form-control" value="Новое значение" /> <br/>
    </div>    
    <div class="form-group">
      <label for="" class="">Почта</label>
        <input type="text" name="email" class="form-control" value="11111@ya.ru" /> <br/>
    </div>
    <div class="form-group">
      <label for="" class="">Пароль</label>
        <input type="text" name="password" class="form-control" value="Введите пароль" /> <br/>
    </div> 
    <div class="form-group">
      <label for="" class="">Подтвердите Пароль</label>
        <input type="text" name="confirmPassword" class="form-control" value="Введите пароль" /> <br/>
    </div>     
    <br/>
   	<div class="form-group">
   		<button class="btn btn-success">Add Post</button> 
   	</div>
   </form>	 
  </div>
 </div>
</div>

</body>
</html>	