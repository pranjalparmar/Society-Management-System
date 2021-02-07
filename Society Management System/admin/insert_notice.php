<?php	//insert coding
include "../connection.php";


if(isset($_POST['submit']))
{
	$ntitle=$_POST['ntitle'];
	$ndis=$_POST['ndis'];
		
	
	
	//query
	$cmd="insert into notice(ntitle,ndis) values ('$ntitle','$ndis') ";
	//run query
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	//check query run successfully or not
	if($result)
	{
		echo"<script>alert('Notice Added successfully');</script>";
		echo"<script>location.href='view_notice.php';</script>";
	}else
	{
		echo"<script>alert('Error in Adding Notice');</script>";
	}
	
}


?>