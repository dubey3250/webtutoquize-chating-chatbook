<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:index.php");
}
?>

<html>
<head>
<title>page</title>
</head>
<body style="background:-webkit-linear-gradient(white,pink,white)">
<form action="passwordc.php" method="POST">

<span style="font-size:40px; font-family:Old English Text MT;">User change password</span><br/><br/>
		<span style="font-size:40px;">Enter Old password</span> <input type="text" name="old" required="required" style="height:40px; width:200px;"/><br/><br/>
		<span style="font-size:40px;">Enter new password</span>  <input type="password" name="new" required="required" style="height:40px; width:200px;"/><br/><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="change" style="height:40px; border-radius:10px; width:150px; background-color:blue;" />

</form>
<?php
error_reporting(0);
$n=$_REQUEST['n'];
if($n==1)
{
?>
	<span style="color:red;font-size:20px;">you have entered wrong password...</span>
<?php
}
?>

</body>
</html>
