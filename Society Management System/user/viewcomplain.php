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
include "include/header.php";
include "include/l_menu.php";
?>
<div class="container">
<center>
<h1>All Complains are as below</h1>
<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
<thead>
<th>user email</th>
<th>society</th>
<th>wing</th>
<th>name</th>
<th>flatno</th>
<th>subject</th>
<th>discript</th>
<th>status</th>



</thead>
<tbody>
<tr>
<?php
include "../connection.php";
//display query 
$cmd="select * from ucomplain";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$uemail=$row['uemail'];
	$society=$row['society'];
	$wing=$row['wing'];
	$name=$row['name'];
	$flatno=$row['flatno'];
	$subject=$row['subject'];
	$discript=$row['discript'];
	$status=$row['status'];
	
	
	
	
?>
<td><?php echo $uemail; ?></td>
<td><?php echo $society; ?></td>
<td><?php echo $wing; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $flatno; ?></td>
<td><?php echo $subject; ?></td>
<td><?php echo $discript; ?></td>

<?php
if($status==0)
{?>
	<td>Pending</td>
	
<?php	
}
elseif($status==1)
{
	?>
	<td>Approved</td>
	
	<?php
}
else
{
	
	?>
	<td>Rejected</td>
	
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