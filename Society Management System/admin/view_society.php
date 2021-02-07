<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

</head>
<body>
<?php
include "a_include/a_header.php";
include "a_include/a_menu.php";
?>
<div class="container">
<center>
<h1>All Requests are as below</h1>
<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
<thead>
<th>sname</th>
<th>saddress</th>
<th>secname</th>
<th>secemail</th>
<th>secmob</th>
<th>status</th>
<th>Action</th>


</thead>
<tbody>
<tr>
<?php
include "../connection.php";
//display query 
$cmd="select * from society";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$sname=$row['sname'];
	$saddress=$row['saddress'];
	$secname=$row['secname'];
	$secemail=$row['secemail'];
	$secmob=$row['secmob'];
	$status=$row['status'];
	
	
	
	
?>
<td><?php echo $sname; ?></td>
<td><?php echo $saddress; ?></td>
<td><?php echo $secname; ?></td>
<td><?php echo $secemail; ?></td>
<td><?php echo $secmob; ?></td>

<?php
if($status==0)
{?>
	<td>Pending</td>
	<td><a href=sapprove.php?email=<?php echo $secemail;?> title="Approve"><i class="fa fa-check" style="font-size:28px;color:green"></i></a>
	<a href=sreject.php?email=<?php echo$secemail;?>><i class="fa fa-close" style="font-size:28px;color:red"></i></a></td>
<?php	
}
elseif($status==1)
{
	?>
	<td>Approved</td>
	<td><a href=sreject.php?email=<?php echo $secemail?>>Reject</a></td>
	<?php
}
else
{
	
	?>
	<td>Rejected</td>
	<td><a href=sapprove.php?email=<?php echo $secemail?>>Approve</a></td>
	<?php
}
?>


</tr>

<?php } ?>
</tbody>
</table>
</center>
</div>
<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	
	</script>
</body>
</html>