<?php 
	require 'config.php';

	if (isset($_POST['submit'])) {
		
		$title = $_POST['title'];
		$author = $_POST['author'];
		$content = $_POST['content'];

		if (empty($author) || empty($title) || empty($content) || !is_string($author)) {
			header('Location: add.php?=error');
			exit();
		} else {
			$addcontent = $connection->prepare('INSERT INTO posts(author, title, content) VALUES(:author, :title, :content)');
			$addcontent->execute(['author' => $author, 'title' => $title, 'content' => $content]);
			header('Location: add.php?=success');
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
			<h1>Add post</h1>
			<form method="post" action="add.php">
    			<input type="text" name="title" class="form-control" placeholder="Title">
    			<br>
    			<input type="text" name="author" class="form-control" placeholder="Author">
    			<br>
    			<textarea name="content" rows="5" cols="60" placeholder="Enter post">Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.</textarea>
    			<br>
    			<br>
  				<button type="submit" name="submit" class="btn btn-success">Add post</button>
			</form>
		</div>
	</div>


 <script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
 </body>
 </html>