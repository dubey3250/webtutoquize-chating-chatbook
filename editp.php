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
$id=$_REQUEST['id'];

$name=$_POST['name'];
echo $name;
echo "</br>";

$number=$_POST['mobile'];
echo $number;
echo "</br>";


$dob=$_POST['dob'];
echo $dob;
echo "</br>";

$email=$_POST['email'];
echo $email;
echo "</br>";


$gender=$_POST['gender'];
echo $gender;
echo "</br>";

$city=$_POST['city'];
echo $city;
echo "</br>";


include("database.php");
	$query="update regist set name='$name', mobile='$number', dob='$dob', email='$email', gender='$gender',city='$city' where id='$id'";
	mysql_query($query);
	header("location:show.php? m=1");
?>