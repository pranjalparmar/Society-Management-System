<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "include/header.php";
include "include/menu.php";
?>
<div class="container">
<br>
<center>
<h1>All Events  are as below</h1>

<div class="card" style="width:400px">
<?php
include "../connection.php";
//display query 
$cmd="select * from viewevent";
//run query
$result=mysqli_query($con,$cmd) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$purpose=$row['purpose'];
	$date=$row['date'];
	$discript=$row['discript'];
	?>
    <div class="card-body">
      <h4 class="card-title"><?php echo $purpose;?></h4>
	  <h4 class="card-title"><?php echo $date;?></h4>
      <p class="card-text"><?php echo $discript;?></p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
	<?php  }
?>
  </div>

</center>
</div>

</body>
</html>