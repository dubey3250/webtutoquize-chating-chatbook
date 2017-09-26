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
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="attach/";

mysql_connect('localhost','root','');

mysql_select_db("project2");
$query="insert into profilep(file,email) values('$file','$email')";
mysql_query($query);

move_uploaded_file($tmp_name,$location.$file);
header("location:show.php");

?>
