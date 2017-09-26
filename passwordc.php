<?php
session_start();
include("database.php");
$old=$_POST['old'];
$new=$_POST['new'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
if($password==$old)
{
$query="update regist set password='$new' where email='$email' and password='$old'";
mysql_query($query);
header("location:profile.php?n=1");
}
else
{
	header("location:password.php?n=1");
}
?>