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
$qid=$_REQUEST['id'];
$comment=$_POST['comment'];
$user=$_SESSION['email'];
include("database.php");
$query="insert into comment (qid,comment,user) values('$qid','$comment','$user')";
mysql_query($query);
header("location:profile.php");
?>