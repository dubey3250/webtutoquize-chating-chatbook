<?php
session_start();
$x=$_REQUEST['x'];
include("database.php");
if($x==1)
{

$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="file2/";
//echo $msg;
//echo "</br>";

$email=$_POST['email'];
//echo $number;
//echo "</br>";
$user_id=$_SESSION['email'];

$query2="select *from regist where  email='$user_id'";
$res2=mysql_query($query2);
$row2=mysql_fetch_array($res2,MYSQL_BOTH);
$file2=$row2['file'];

$query="insert into msgpic(user_id,file,email,date,file2) values('$user_id','$file','$email',curdate(),'$file2')";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$file);
}
else
{
$msg=$_POST['msg'];
//echo $msg;
//echo "</br>";

$email=$_POST['email'];
//echo $number;
//echo "</br>";
$user_id=$_SESSION['email'];


$query2="select *from regist where  email='$user_id'";
$res2=mysql_query($query2);
$row2=mysql_fetch_array($res2,MYSQL_BOTH);
$file2=$row2['file'];

$query="insert into msg(user_id,msg,email,date,file2) values('$user_id','$msg','$email',curdate(),'$file2')";
mysql_query($query);
}
header("location:send.php");
?>