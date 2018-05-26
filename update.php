<?php 
	require 'config.php';

	if (isset($_POST['submit'])) {
		$updatetitle = $_POST['updatetitle'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		if (empty($title) || empty($content)) {
			header('Location: update.php?=error');
			exit();
		} else {
			$updatedcontent = $connection->prepare('UPDATE posts SET title = :title , content = :content WHERE title = :updatetitle');
			$updatedcontent->execute(['title' => $title, 'content'=> $content, 'updatetitle' => $updatetitle]);
			header('Location: update.php?=success');
		}
		
	}
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
				<a class="nav-link" href="adminpanel.php">Admin Panel</a>
			</li>
		</ul>
	</div>
	<br><br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="container">
			<h1>Update post</h1>
			<form method="post" action="update.php" >
				<input type="text" name="updatetitle" class="form-control" placeholder="Wich post do you wish to update">
				<br>
    			<input type="text" name="title" class="form-control" placeholder="New title" >
    			<br>
    			<textarea name="content" rows="5" cols="60" placeholder="Enter post"></textarea>
    			<br>
    			<br>
  				<button type="submit" name="submit" class="btn btn-success">Update post</button>
			</form>
		</div>
	</div>


 <script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
 </body>
 </html>