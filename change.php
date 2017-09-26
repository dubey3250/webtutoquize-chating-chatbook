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
$id=$_REQUEST['id'];
$email=$_SESSION['email'];
include("database.php");
$query="select *from profilep where id='$id' and email='$email'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$file=$row['file'];
$query2="update regist set file='$file' where email='$email'";
mysql_query($query2);
header("location:show.php");
?>