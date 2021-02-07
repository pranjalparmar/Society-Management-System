<?php
if(isset($_POST['submit']))
{
	$path="photos/";
	$ename = $_POST['fname'];
	$image = $_FILES['fileToUpload']['tmp_name'];
	
	$cmd= "insert into event_detail(ename,ephoto) value=('$ename','$ename')";
	$result= mysqli_error($con,$cmd) or die (mysqli_error($con));
	if($result)
	{
		move_uploaded_file($_FILES["filetouplod"]["tmp_name"],'photos/'.$ename.".jpg");
		echo"<script>alert ('photo/file uploded sucessfully')</script>";
		echo"<script>location.href='displayimage.php';</script>";
		
	}else
	echo"<script>alert ('photo/file  not uploded sucessfully')</script>";
}


?>