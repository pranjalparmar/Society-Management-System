<?php	//insert coding
include "../connection.php";

if(isset($_GET['submit']))
{
	$ename=$_GET['ename'];
	$edate=$_GET['edate'];
	$edis=$_GET['edis'];
	
	
	//query
	$cmd="insert into event(ename,edate,edis) values ('$ename','$edate','$edis') ";
	//run query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	//check query run successfully or not
	if($result)
	{
		echo"<script>alert('successfully');</script>";
		echo"<script>location.href='view_event.php';</script>";
	}else
	{
		echo"<script>alert('Error in Adding Event');</script>";
	}
	
}