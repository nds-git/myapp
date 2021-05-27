<!DOCTYPE HTML>
<html lang="en">
<head>	
 <meta charset="UTF-8" / >
 <title>Мой App</title>	
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
          <a class="nav-link" href="#">MainPage</a>
        </li>
      </ul>
 
    </div>
  </div>
</nav>
<div class="container">
 <div class="row">
  <div class="col-md-8">
   <a href="./add-post" class="btn btn-success">Add Post</a>
   <a href="./new-person" class="btn btn-warning">New person</a>
   <table class="table">
	 <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Title</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>

	  <?php foreach($posts as $post): ?>
	    <tr>
	      <th scope="row"><?=$post['id']?></th>
	      <td><a href = "./show.php?id=<?=$post['id']?>"><?=$post['title']?></a></td>
	      <td>
	      	  <a href="./edit.php?id=<?=$post['id']?>" class="btn btn-warning"> Edit </a>
	          <a href="./delete.php?id=<?=$post['id']?>" class="btn btn-danger" onclick="return confirm('А вы уверены?')"> Delete </a> 
	     </td>
	    </tr>
	  <?php endforeach?>
	  </tbody>
	</table>
  </div>
 </div>
</div>

</body>
</html>