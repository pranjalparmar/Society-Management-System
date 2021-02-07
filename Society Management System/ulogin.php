<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    

    // type your query here
    $cmd="select * from ulogin where email='$email' and password='$pass'";
    // run your query
    $result=mysqli_query($con,$cmd) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    // check query run successfully or not
    if($count>=1)
    {
      $_SESSION['email']=$email;
        echo "<script>alert('Login successfully');</script>";
        echo "<script>location.href='user/uhome.php';</script>";
    }else
    {
        echo "<script>alert('Error in Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php
include "include/header.php";
include "include/menu.php";
?>

<h2>User Login</h2>

<form action="" method="POST">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit" name="submit" value="submit">Login</button>
</form>

</body>
</html>
