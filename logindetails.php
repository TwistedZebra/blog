<?php 
	
	if (isset($_POST['submit'])) {
		

		$username = $_POST['email'];
		$password = $_POST['password'];

		$useremail = 'admin@bloggerworld.com';
		$passwordEmail = 'admin';

		

		if ($useremail === $username && $passwordEmail === $password) {
			header('Location: ../adminpanel.php');
		}else{
			header('Location: loginpanel.php?=WrongDetails');
		}
	}
 ?>