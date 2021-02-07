<html>
<body>
<center>
<h1>All Request are as Below</h1>
<table border="2">
<th> Event Name </th>
<th> Event Photo</th>


<tr>
<?php
include "../connect.php";
$cmd="select * from event_detail";
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$ename=$row['ename'];
	$ephoto=$row['ephoto'];
	

?>
<td><?php echo $fname; ?></td>
<td><?php echo $mob; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $wing; ?></td>
<?php
  if($status == 0)
  {
	  echo "<td>pending</td>";
	  echo '<td><a href="approve.php?email=<?php echo $email;?>"> Approve </a></td>';
       echo '<td><a href="reject.php?email=<?php echo $email;?>"> Reject </a></td>';
	   


  }
  elseif($status == 1)
   {
	  echo "<td>Approved</td>";
  }
  else
   {
	  echo "<td>Rejected</td>";
  }
?>

</tr>
<?php } ?>
</table>
</center>
</body>
</html>