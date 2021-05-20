<!DOCTYPE HTML>
<html lang="en">
<head>	
 <meta charset="UTF-8" / >
 <title>Наш App3</title>	
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<br/><br/>
<div class="container">
 <div class="row">
  <div class="col-md-8 offset-md-2">
   <form action="./store.php" method="POST">
   	<div class="form-group">
   		<label for="" class="">Title</label>
      	<input type="text" name="title" class="form-control" value="Сюда новое значение" /> <br/>
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