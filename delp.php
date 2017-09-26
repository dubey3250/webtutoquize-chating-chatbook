<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
echo "<br/>";
} 
?>


<?php
//session_start();
$email=$_SESSION['email'];
include("database.php");
$query="delete from regist where email='$email'";
mysql_query($query);
header("location:login.php");
?>