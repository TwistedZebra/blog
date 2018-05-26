<?php 
	require 'config.php';

		$posts = $connection->prepare('SELECT * FROM posts');
		$posts->execute([]);
		$posts = $posts->fetchAll(PDO::FETCH_ASSOC);

	if (isset($_POST['submit'])) {
		
		$id = $_POST['deltitle'];
		

	
		$deleterecord = $connection->prepare('DELETE FROM posts WHERE id = :id');
		$deleterecord->execute(['id' => $id]);
		header('Location: delete.php?=success');
		
		
		
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
			<h1>Delete</h1>
			<form method="post" action="delete.php">
				<select name="deltitle" class="form-control">
					<?php foreach ($posts as $post) { ?>
					<option value="<?php echo $post['id']?>"><?php echo $post['id'].' - '.$post['title']; ?></option>
					<?php } ?>
				</select>
    			<br>
  				<button type="submit" name="submit" class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>


 <script>
  document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
  ':35729/livereload.js?snipver=1"></' + 'script>')
</script> 
 </body>
 </html>