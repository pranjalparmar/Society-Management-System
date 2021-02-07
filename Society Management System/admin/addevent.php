<?php

include "connection.php";
$con=mysqli_connect("localhost","root","","sms");
if(!$con)
{
	echo "Error in Connection";
}
if(isset($_POST['submit']))
{
  $purpose=$_POST['purpose'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $discript=$_POST['discript'];
	
	//type your query here
	$cmd="insert into viewevent(purpose,date,time,discript) values('$purpose','$date','$time','$discript')";
	// run your query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	// check query run successfully or not
	if($result)
	{
    
		echo "<script>alert('Add Event Successfully')</script>";
		echo "<script>location.href='viewevent.php';</script>";
	}else
	{
		echo "<script>alert(' Error in Add Event')</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=submit] ,textarea{
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
include "a_include/a_header.php";
include "a_include/a_menu.php";
?>

<h2>Society Event :</h2>

<form action="" method="post">

  <div class="container">
  <label for="text"><b>Purpose :</b></label>
    <input type="text" placeholder="Enter Your Purpose" name="purpose" required>
    <br><br>

    <label for="text"><b>Date :</b></label>
    <input type="date" name="date">
  <br><br>
    
  <label for="text"><b>Time:</b></label>
    <input type="time" name="time">
  <br><br>

  <label for="text"><b>Discription :</b></label>
    <textarea type="text" placeholder="Enter Your Complain Discription..." name="discript" rows="10" cols="200%" required></textarea>
    <br><br>
    
    <input type="submit" name="submit" class="registerbtn" value="Submit" href="shomepage.php" >
  </div>

  
</form>

</body>
</html>