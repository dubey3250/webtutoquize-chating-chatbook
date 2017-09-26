<?php

$name=$_POST['name'];
echo $name;
echo "</br>";

$number=$_POST['number'];
echo $number;
echo "</br>";


$dob=$_POST['dob'];
echo $dob;
echo "</br>";

$email=$_POST['email'];
echo $email;
echo "</br>";

$password=$_POST['password'];
echo $password;
echo "</br>";


$gender=$_POST['gender'];
echo $gender;
echo "</br>";

$city=$_POST['city'];
echo $city;
echo "</br>";

$file=$_FILES['file']['name'];
//echo $file;
//echo "<br/>";
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
//echo "<br/>";

$type=$_FILES['file']['type'];
//echo $type;
//echo "<br/>";

//$type=$_FILES['file']['type'];
//echo $type;
//echo "<br/>";

$size=$_FILES['file']['size'];
//echo $size;
//echo "<br/>";

$location="attach/";

include("database.php");
$query="select * from regist where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	header("location:login.php? t=1");
}
else
{
	$query="insert into regist(name,mobile,dob,email,password,gender,city,file) values('$name','$number','$dob','$email','$password','$gender','$city','$file')";
	mysql_query($query);
	$query="insert into profilep(file,email) values('$file','$email')";
    mysql_query($query);
	move_uploaded_file($tmp_name,$location.$file);	
	header("location:login.php? m=1");
}


$query="select max(id) as p from regist";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
$id=$row['p'];
//header("location:login.php?");
?>