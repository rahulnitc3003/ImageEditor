<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Application</title>
    <link rel="shortcut icon" href="../images/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <form class="form-horizontal" method="POST" action="index.php">
        <div class="row">
        	<center><h1>Login Form</h1></center><br>
          	<h4>User Email</h4>
          	<input type="email" class="form-control" name="email" required></br>
          	<h4>Password</h4>
          	<input type="password" class="form-control" name="pass" required></br>
          	<div class="text-center">
            	<button class="btn btn-danger" name="submit" value="submit" type="submit" >Login</button>
            	<a href="signup.php" class="btn btn-danger">New User</a>
          	</div>
        </div>
      </form>
  	</div>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
</html>

<?php
	$user = 'id6497841_imageeditor01';
	$pass = "imageeditor01";
	$db = 'id6497841_imageeditor01';
	$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
	//echo"connection sucess";
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$query = "select * from login where email = '$email' AND password = '$pass'";
		$run = mysqli_query($db,$query);
		if( mysqli_num_rows($run) > 0 )
		{
			echo "<script>alert('login sucess')</script>";
			echo "<script>window.open('main.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('User Email Or Password is incorrect')</script>";
		}
	}
?>