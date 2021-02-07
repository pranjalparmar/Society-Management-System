<html>
<body>
<center>
<h1>All Images are as below</h1>
<table border="2">
<th>Event Name</th>
<th>Event Discription</th>
<th>Event Photo</th>

<tr>
<?php
include "../connection.php";
//display query 
$cmd="select * from event_details";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$ename=$row['ename'];
	$edis=$row['edis'];
	$photo=$row['ephoto'];
	
?>
<td><?php echo $ename; ?></td>
<td><?php echo $edis; ?></td>
<td><?php echo $photo; ?></td>



</tr>
<?php } ?>
</table>
</center>
</body>
</html>