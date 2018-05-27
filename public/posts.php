<?php
	require '../config.php';


	$posts = $connection->prepare('SELECT * FROM posts ORDER BY created_at DESC');
	$posts->execute([]);
	$posts = $posts->fetchAll(PDO::FETCH_ASSOC);

	$stmt = $connection->prepare('SELECT * FROM posts');
	$stmt->execute([]);
  	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  	$num_rows = count($rows);



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
			<h1>All posts, total posts on page: <?php echo $num_rows; ?></h1>
			<hr>
			<?php foreach ($posts as $post) { ?>
			<div class="posts " >
				<a style="color: black; text-decoration-line: none" href="blogpage/<?php echo $post['slug']; ?>"><h1><?php echo $post['title']?></h1></a>
				<p><i><?php echo $post['shortdescription'] ?></i></p>
				<p> <b><i><?php echo $post['author'] ?></i></b></p>
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