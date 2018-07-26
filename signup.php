<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Application</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="w3-light-grey">
  <div class="container">
    <form class="form-horizontal" method="POST" action="signup.php">
      <div class="row">
        <center><h1>Sign Up Form</h1></center><br>
        <h4>Email*</h4>
        <input type="email" class="form-control" name="email" required /></br>
        <h4>Password*</h4>
        <input type="password" class="form-control" name="pass" required /></br>
        <div class="form-group"> 
          <div class="text-center"><button class="btn btn-danger " name="submit" value="submit" type="submit" >Sign Up</button></div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>

<?php
  $user = 'id6497841_imageeditor01';
  $pass = "imageeditor01";
  $db = 'id6497841_imageeditor01';
  $conn = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

  if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
    $passw=$_POST['pass'];
    $sql="insert into login values ('$email','$passw')";
    if(mysqli_query($conn,$sql))
    {
      echo "<script>alert('Your Email is registered')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
  }
?>