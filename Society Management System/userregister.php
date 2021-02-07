<?php

include "connection.php";
$con=mysqli_connect("localhost","root","","sms");
if(!$con)
{
	echo "Error in Connection";
}
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lastname=$_POST['lastname'];
  $mob=$_POST['mob'];
  $gender=$_POST['gender'];
  $wing=$_POST['wing'];
  $flatno=$_POST['flatno'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$wing=$_POST['wing'];
	
	//type your query here
	$cmd="insert into signup(fname,lastname,mob,gender,wing,flatno,email,pass) values('$fname','$lastname','$mob','$gender','$wing','$flatno','$email','$pass')";
	// run your query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	// check query run successfully or not
	if($result)
	{
		echo "<script>alert('Registration Successfully')</script>";
		echo "<script>location.href='ulogin.php';</script>";
	}else
	{
		echo "<script>alert(' Error in Registration')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 15px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 200px;
  opacity: 0.9;
}
.registerbtn{
  width: 150px;
  text-align: center;
  margin: 0 auto;
  cursor: pointer;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php
include "include/header.php";
include "include/menu.php";
?>

<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>User Registeration</h1>
   
    <hr>
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Your First Name" name="fname" required>

    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your Last Name" name="lastname" required>

    <label for="mob"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Your Mobile Number" name="mob" required>
    
    <br><br>

    <p><b>Please select your gender:</b></p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male"><b>Male</b></label><br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female"><b>Female</b></label><br><br>

    <p><b>Select Your Society Wing</b></p>
    <select name="wing">
    <option value="">---Select Wing---</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    </select><br><br>

    <label for="flatno"><b>Flat No. :</b></label>
    <input type="text" placeholder="Enter Your Flat No. " name="flatno" required>
    <br>
    <b>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="pass" required>
    

    <input type="submit" name="submit" class="registerbtn" value="Submit" href="ulogin.php" >
  </div>
  
  
</form>

</body>
</html>
