<?php 

	require '../config.php';
	$array =$_GET;
	$imploded = implode('', $array);
	$blog = $connection->prepare('SELECT *FROM posts WHERE slug = :slug');


	$blog->execute(['slug' => $imploded]);
	$blog = $blog->fetch(PDO::FETCH_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

	<div class="navbar navbar-expand-lg navbar-dark  bg-dark">
		<div class="navbar-brand ">
			<h2>BloggerWorld</h2>
		</div>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="../index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../posts.php">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../loginpanel.php">Login Panel</a>
			</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="container">
			<br>
			
			<div class="posts">
				<h1><?php echo $blog['title']?></h1>
				<hr>
				<p><b><i><?php  echo $blog['shortdescription'];?></i></b></p>
				<p><?php echo $blog['content'] ?></p>
				<p><b><i><?php echo $blog['author'] ?></i></b></p>
				<p>Posted at: <?php echo $blog['created_at']; ?></p>
				<br>
				<hr>
			</div>
		</div>
	</div>



<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
</body>
</html>