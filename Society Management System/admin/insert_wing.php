<?php	//insert coding
include "../connection.php";

if(isset($_GET['submit']))
{
	$sname=$_GET['sname'];
	$wname=$_GET['wname'];
	$secname=$_GET['secname'];
	$secmob=$_GET['secmob'];
	$secemail=$_GET['secemail'];
	$total_flats=$_GET['total_flats'];
	
	
	//query
	$cmd="insert into society(sname,wname,secname,secmob,secemail,total_flats) values ('$sname','$wname','$secname','$secmob','$secemail','$total_flats') ";
	//run query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	//check query run successfully or not
	if($result)
	{
		echo"<script>alert('Wing Added successfully');</script>";
		echo"<script>location.href='view_wing.php';</script>";
	}else
	{
		echo"<script>alert('Error in Adding Details');</script>";
	}
	
}