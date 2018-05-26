<?php 
	require '../config.php';

	try{
		$posts = $connection->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT 5');
		$posts->execute([]);
		$posts = $posts->fetchAll(PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		dd($e->getMessage());
	}
	
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
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="posts.php">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="loginpanel.php">Login Panel</a>
			</li>
		</ul>
	</div>
	<div class="container-fluid">
		<div class="container">
			<br>
			<h1>5 Newest posts</h1>
			<hr>
			<?php foreach ($posts as $post) { ?>
			<div class="posts">
				<h1><?php echo $post['title']?></h1>
				<p><?php echo $post['content'] ?></p>
				<p><?php echo $post['author'] ?></p>
				<br>
				<hr>
			</div>
			<?php } ?>
		</div>
	</div>



<script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
</body>
</html>