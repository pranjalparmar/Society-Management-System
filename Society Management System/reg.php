<?php
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
	$pass=$_POST['password'];
	$wing=$_POST['wing'];
	
	//type your query here
	$cmd="insert into reg(fname,mob,email,password,wing) values ('$fname','$mob','$email','$pass','$wing')";
	// run your query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	// check query run successfully or not
	if($result)
	{
		echo "<script>alert('Registration Successfully')</script>";
		echo "<script>location.href='login.php';</script>";
	}else
	{
		echo "<script>alert(' Error in Registration')</script>";
	}
}


?>
<html>
<head>
<title>User Registration Form
</title>
</head>
<body>
<center><h1>User Registration Form</h1>
	
<form method="POST" action="reg.php">
	<table border="1">
	<tr>
	<td>Full Name </td>
	<td><input type="text" name="fname" placeholder="Enter your Full Name">
	</tr>
	<tr>
	<td>Mobile</td>
	<td><input type="text" name="mob" placeholder="Enter Your Mobile">
	</tr>
	<tr>
	<td>Email(Username)</td>
	<td><input type="email" name="email" placeholder="Enter Your Email">
	</tr>
	<tr>
	<td>Password </td>
	<td><input type="password" name="password" placeholder="Enter Your Password">
	</tr>
	<tr>
	<td>Select your Wing</td>
	<td>
	<select name="wing">
	<option value="">---Select Wing----</option>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	</select>
	
	</td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="Register Now"></td>
	<td><input type="reset" name="cancel" value="Cancel">
	</tr>
	
	</table>
</form>
</center>
</body>
</html>