<?php

include "../connection.php";
$con=mysqli_connect("localhost","root","","sms");
if(!$con)
{
	echo "Error in Connection";
}
if(isset($_POST['submit']))
{
  $uemail=$_POST['email'];
  $society=$_POST['society'];
  $wing=$_POST['wing'];
  $name=$_POST['name'];
  $flatno=$_POST['flatno'];
  $subject=$_POST['subject'];
  $discript=$_POST['discript'];
	
	//type your query here
	$cmd="insert into ucomplain(uemail,society,wing,name,flatno,subject,discript) values('$uemail','$society','$wing','$name','$flatno','$subject','$discript')";
	// run your query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	// check query run successfully or not
	if($result)
	{
		echo "<script>alert('Registration Successfully')</script>";
		echo "<script>location.href='uhome.php';</script>";
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
input[type=text], input[type=password],select,textarea {
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
include "include/l_menu.php";



?>

<form action="" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>User Complain</h1>
   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required>

    <label for="society"><b>Society Name:</b></label>
    <input type="text" placeholder="Enter Your Society Name" name="society" required>

    <p><b>Select Your Society Wing</b></p>
    <select name="wing">
    <option value="">---Select Wing---</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    </select><br>
   <br>

    <b>Enter Person Name :</b>
    <input type="text" placeholder="Enter Person Name"  name="name" required >
    <br> 
    <br>
    
    <label for="text"><b>Flat No. :</b></label>
    <input type="text" placeholder="Enter Your Flat No." name="flatno" required>
    <br><br>

    <label for="text"><b>Subject :</b></label>
    <input type="text" placeholder="Enter Your Subject" name="subject" required>
    <br><br>

    <label for="text"><b>Discription :</b></label>
    <textarea type="text" placeholder="Enter Your Complain Discription..." name="discript" rows="10" cols="200%" required></textarea>
    <br><br>
    

    <input type="submit" name="submit" class="registerbtn" value="Submit" href="uhome.php" >
  </div>
  
  
</form>

</body>
</html>
