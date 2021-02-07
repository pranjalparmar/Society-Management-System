<?php	//insert coding
include "../connection.php";


if(isset($_GET['submit']))
{
	$sname=$_GET['sname'];
	$saddress=$_GET['saddress'];
	$secname=$_GET['secname'];
	$secemail=$_GET['secemail'];
	$secmob=$_GET['secmob'];
	
	
	
	//query
	$cmd="insert into society(sname,saddress,secname,secemail,secmob) values ('$sname','$saddress','$secname','$secemail','$secmob') ";
	//run query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	//check query run successfully or not
	if($result)
	{
		echo"<script>alert('Society Added successfully');</script>";
		echo"<script>location.href='view_society.php';</script>";
	}else
	{
		echo"<script>alert('Error in Adding Details');</script>";
	}
	
}


?>