<?php	//login coding
session_start();
if(isset($_SESSION['username']))
{
	header('location:secretory/shomepage.php');
}
include "connection.php";
if(isset($_POST['submit']))
{
	$uname=$_POST['uname'];
	$psw=$_POST['psw'];

	
	$cmd="select * from reg where email='$uname' and password='$psw'";
	$result=mysqli_query($con,$cmd)or die(mysqli_error($con));
	$count=mysqli_num_rows($result);
	if($count>=1)
	{
		$_SESSION['username']=$uname;
		echo"<script>alert('Congrats Login Sucessfully');</script>";
		echo"<script>location.href='secretory/shomepage.php';</script>";
	}else
	{
		echo"<script>alert('wrong username & password');</script>";
	}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
include "include/header.php";
include "include/menu.php";
?>

<h2>Login Form</h2>

<form action="" method="POST">
  
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="reset" name="submit" value="Reset" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>