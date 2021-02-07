<?php

include "../connection.php";
$email=$_GET['email'];

$status=2;
//query to update status
$cmd="update society set status='$status' where uemail='$email'";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

if($result)
{
	echo "<script>alert('Request Rejected Sucessfully');</script>";
	echo "<script>location.href='view_society.php';</script>";
}
else
{
	echo "<script>alert('Error while Rejecting Request');</script>";
}
?>  