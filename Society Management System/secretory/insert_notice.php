<?php	//insert coding
include "../connection.php";

if(isset($_GET['submit']))
{
	$ntitle=$_GET['ntitle'];
	$ndis=$_GET['ndis'];
	
	
	//query
	$cmd="insert into notice(ntitle,ndis) values ('$ntitle','$ndis') ";
	//run query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	//check query run successfully or not
	if($result)
	{
		echo"<script>alert('successfully');</script>";
		echo"<script>location.href='view_notice.php';</script>";
	}else
	{
		echo"<script>alert('Error in Adding notice');</script>";
	}
	
}