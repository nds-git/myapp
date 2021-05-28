<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>	
 <meta charset="UTF-8" / >
 <title>Редактировать статью</title>	
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container ">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item">
          <a class="nav-link" href="/">MainPage</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
 <div class="row">
  <div class="col-md-8 offset-md-2">
     <?php

  if($_SESSION) {
     echo "<div class=\"alert alert-".$_SESSION['sms']." text-dark\" role=\"alert\">".$_SESSION['error']."</div>";
     session_unset();
  } 
?>
   <form action="./update" method="POST">
    <div class="form-group">
      <label for="" class="">Редактировать</label>
        <input type="text" name="title" class="form-control" value="<?=$post['title']?>" /> <br/>
        <input type="hidden" name="id" class="form-control" value="<?=$post['id']?>" /> <br/>
    </div>
    <br/>
    <div class="form-group">
      <button class="btn btn-success">Edit Post</button> 
    </div>
    <p><a href="/">Вернуться</a></p>

   </form>

  </div>
 </div>
</div>

</body>
</html>