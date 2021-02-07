<?php
include "../connection.php";
if(isset($_POST['submit']))

{
	$path="photos/";
	$pname=$_POST['pname'];
	$image=$_FILES['fileToUpload']['tmp_name'];
	
	$cmd="insert into event_details (ename,ephoto) values('$pname','$pname')";

	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

	if($result)
	{
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],'photos/'.$pname.".jpg");
		echo "<script>alert('Photo / file uploaded successfully');</script>";
		echo "<script>location.href='displayimage.php';</script>";
	}else
	{
		echo "<script>alert('Photo / file not uploaded');</script>";
	}
}
?>