

<html>
<head>
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
include "include/menu.php";
?>
<div class="container">
<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
			     <th>User Email</th>
                <th>society</th>
                <th>wing</th>
                <th>name</th>
                <th>Flat no</th>
                <th>subject</th>
                <th> descript</th>
			
				
            </tr>
        </thead>
        
          
        </tbody>
    </table>
	</div>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
	
	</script>
</body>
</html>