<?php
error_reporting(0);
$id=$_REQUEST['id'];
include("database.php");


$query="select *from msgpic where ques_id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$file=$row['file'];
//echo $file;
$location="file2/";

$query="delete from msgpic where ques_id='$id'";
mysql_query($query);
unlink($location.$file);
header("location:send.php");
?>