<?php
include "../connection.php";
if(isset($_POST['submit']))
{
	$ename=$_POST['fname'];
	$image=$_FILES['fileToUpload']['tmp_name'];
	
	$cmd="insert into event_details (ename,ephoto) values('$ename','$ename')";
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	
	if($result)
	{
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],'photos/'.$ename.'.jpg');
		echo "<script>alert('photos / file uploadedd sucessfully');</script>";
		echo "<script>location.href='displayimage.php';</script>";
		
	}else
	{
		echo "<script>alert('photos / file not uploadedd ');</script>";
	}
}
?>