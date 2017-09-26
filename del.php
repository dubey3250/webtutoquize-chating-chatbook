<?php
error_reporting(0);
$id=$_REQUEST['id'];
include("database.php");
$query="delete from msg where ques_id='$id'";
mysql_query($query);
header("location:send.php");
?>