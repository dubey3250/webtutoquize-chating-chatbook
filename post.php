<?php
session_start();
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="attach/";

$post=$_POST['post'];
$user=$_SESSION['email'];

mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="insert into post (user,post,file) values('$user','$post','$file')";
mysql_query($query);

move_uploaded_file($tmp_name,$location.$file);
header("location:profile.php");

?>