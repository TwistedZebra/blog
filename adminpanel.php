<?php 
	require 'config.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
 	<title>Control panel</title>
 </head>
 <body>
 	
	<div class="navbar navbar-expand-lg navbar-dark  bg-dark">
		<div class="navbar-brand ">
			<h2>BloggerWorld</h2>
		</div>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="public/index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="public/posts.php">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Admin Panel</a>
			</li>
		</ul>
	</div>
	<br><br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="container">
			<div class="card" style="width: 18rem;">
  				<img class="card-img-top" src="image/delete.jpg" alt="Card image cap">
  				<div class="card-body">
    				<h5 class="card-title">Delete post</h5>
    				<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    				<a href="delete.php" class="btn btn-primary">Delete Post</a>
  				</div>
			</div>
			<div class="card" style="width: 18rem;">
  				<img class="card-img-top" src="image/add.png" alt="Card image cap">
  				<div class="card-body">
    				<h5 class="card-title">Add post</h5>
    				<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    				<a href="add.php" class="btn btn-primary">Add Post</a>
  				</div>
			</div>
			<div class="card" style="width: 18rem;">
  				<img class="card-img-top" src="image/update.png" alt="Card image cap">
  				<div class="card-body">
    				<h5 class="card-title">Update post</h5>
    				<p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamdolor sitdolor sitdolor sitdolor sitdolor sit.</p>
    				<a href="update.php" class="btn btn-primary">Update post</a>
  				</div>
			</div>
		</div>
	</div>


 <script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
 </body>
 </html>