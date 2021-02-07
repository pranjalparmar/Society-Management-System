<html>
<body>
<center>
<h1>All images are as Below </h1>
<table border="2">
<th> Person Name </th>
<th> Event Photo</th>


<tr>
<?php
include "../connection.php";

// write query
$cmd="select * from event_details";

// run query
$result = mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$pname=$row['pname'];
	$photo=$row['ephoto'];
	
?>
<td> <?php echo $pame; ?> </td>
<td> <?php echo $photo; ?></td>
</tr>
<?php }?>
</table>
</center>
</body>
</html>