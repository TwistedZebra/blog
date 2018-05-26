<?php 
	require '../config.php';
	require '../logindetails.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="navbar navbar-expand-lg navbar-dark  bg-dark">
		<div class="navbar-brand ">
			<h2>BloggerWorld</h2>
		</div>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Posts</a>
			</li>
		</ul>
	</div>
	<br><br><br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="container">
			<form method="post" action="loginpanel.php">
  				<div class="form-group">
    				<label for="exampleInputEmail1">Email</label>
    				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  				</div>
  				<div class="form-group">
    				<label for="exampleInputPassword1">Password</label>
    				<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  				</div>
  				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>



<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
</body>
</html>