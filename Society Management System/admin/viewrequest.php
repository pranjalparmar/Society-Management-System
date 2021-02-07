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
<th>Fullname</th>
<th>Mobile</th>
<th>Email</th>
<th>Wing</th>
<th>status</th>
<th>Action</th>


</thead>
<tbody>
<tr>
<?php
include "../connection.php";
//display query 
$cmd="select * from reg";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$fname=$row['fname'];
	$mob=$row['mob'];
	$email=$row['email'];
	$wing=$row['wing'];
	$status=$row['status'];
?>
<td><?php echo $fname; ?></td>
<td><?php echo $mob; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $wing; ?></td>
<?php
if($status==0)
{?>
	<td>Pending</td>
	<td><a href=approve.php?email=<?php echo $email;?> title="Approve"><i class="fa fa-check" style="font-size:28px;color:green"></i></a>
	<a href=reject.php?email=<?php echo$email;?>><i class="fa fa-close" style="font-size:28px;color:red"></i></a></td>
<?php	
}
elseif($status==1)
{
	?>
	<td>Approved</td>
	<td><a href=reject.php?email=<?php echo $email?>>Reject</a></td>
	<?php
}
else
{
	
	?>
	<td>Rejected</td>
	<td><a href=approve.php?email=<?php echo $email?>>Approve</a></td>
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