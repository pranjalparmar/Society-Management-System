<?php	//login coding
session_start();
if(isset($_SESSION['username']))
{
	header('location:homepage.php');
}
include "connection.php";
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$pas=$_POST['pwd'];
	$cmd="select * from admin where username='$uname' and password='$pas'";
	$result=mysqli_query($con,$cmd)or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	if($count>=1)
	{
		$_SESSION['username']=$uname;
		echo"<script>alert('Login sucessfully');</script>";
		echo"<script>location.herf='homepag.php';</script>";
	}else
	{
		echo"<script>alert('wrong username & password');</script>";
	}
}
?>



<html>
<head>
<title> Admin Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h1>Admin Login</h1>
<div class="container">
<form method="POST" action="">
	
	
	
	<div class="form-group">
		<label>username</label>
		<input type="text" name="username" placeholder="enter your email">
	 </div>
	<div class="form-group">
		<label>password</label>
		<input type="password" name="pwd" placeholder="enter your password">
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Login">
		<input type="reset" name="cancel" value="Cancel">
	</div>



	
</form>
</div>

</body>
</html>