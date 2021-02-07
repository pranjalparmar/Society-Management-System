

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<?php
include "include/header.php";
include "a_include/a_menu.php";
?>

<form action="insert_event.php" method="POST">
  <div class="container">
    <h1>Event Details</h1>
   
    <label for="title"><b>Event Name</b></label>
    <input type="text" placeholder="Enter Event Name" name="Title" required>
	
	<label for="title"><b>Event Date</b></label>
    <input type="text" placeholder="DD/MM/YYYY" name="Title" required>


    <label for="discription"><b>Event Discription</b></label>
    <input type="text" placeholder="Enter Event Discription" name="discription" required>


    <button type="submit" class="registerbtn" name="submit">Submit</button>
  </div>
  
  <div class="container signin">
  </div>
</form>

</body>
</html>