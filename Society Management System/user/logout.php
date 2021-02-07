<?php
//logout coding
session_start();
if(isset($_SESSION['email']))
{
    session_destroy();
    $_SESSION['email']="";
    echo "<script>location.href='../ulogin.php';</script>";
}else
{
    echo "<script>location.href='uhome.php';</script>";
}

?>