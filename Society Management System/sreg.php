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
  $mob=$_POST['mob'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $wing=$_POST['wing'];
  $status=$_POST['status'];
	
	
	//type your query here
	$cmd="insert into reg(fname,mob,email,password,wing,status) values('$fname','$mob','$email','$password','$wing','$status')";
	// run your query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	// check query run successfully or not
	if($result)
	{
    
		echo "<script>alert('Registration Successfully')</script>";
		echo "<script>location.href='slogin.php';</script>";
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
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
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
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
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
<br>
<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
	  
	
     <label for="Society"><b>Select Society</b></label>
   <select name="society" > 
    <option value="">---select your Society---</option>
   <option value="A">Acc</option>
   <option value="B">B</option>
   <option value="C">C</option>
   </select><br>
   
      
     <label for="Society"><b>Select Wing</b></label>
   <select name="wing" > 
    <option value="">---select your wing---</option>
   <option value="A">A</option>
   <option value="B">B</option>
   <option value="C">C</option>
   </select><br>
      
      
	  
   
 
     <label for="fname"><b>Fnamne</b></label>
    <input type="text" placeholder="Enter Fname" name="fname" required>
 
     <label for="mob"><b>mob</b></label>
    <input type="text" placeholder="Enter mob" name="mob" required>

	 
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter mobile" name="mobile" required>
	
	    <label for="wing"><b>wing</b></label>
    <input type="text" placeholder="Enter wing" name="wing" required>
	
	<label for="status"><b>status</b></label>
    <input type="text" placeholder="Enter status" name="status" required>

    

    <label for="gender"><b>gender</b></label>
    <input type="radio" name="gender" value="male" required>Male
	<input type="radio" name="gender" value="female" required>Female
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    
  </div>
</form>

</body>
</html>
