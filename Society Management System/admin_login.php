<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:homepage.php');
	
}
include "connect.php";
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$pass=$_POST['pwd'];
	$cmd="select*from admin where username ='$uname' and password='$pass'";
	$result=mysqli_query($con,$cmd)or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	if($count>=1)
	{
		$_SESSION['username']=$uname;
		
		echo"<script>alert('login sucessfully');</script>";
		echo"<script>location.herf='homepage.php';</script>";
	}else
	{
		echo"<script>alert('wrong username & password');</script>";
	}
}
 


?>






<!DOCTYPE html>

<html lang="en">
<head>
  <title>admin login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit"  name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
