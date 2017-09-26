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
include("database.php");
$query="select *from regist where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH); 
?>
<html>
<head>
<style>
body
{
	background:-webkit-linear-gradient(white,pink,white);
}
#m
{
	height:400px;
	width:1200px;
	margin:0px auto;
//	border:1px solid;
}
#ml
{
	height:300px;
	width:400px;
//	margin:0px auto;
	//border:1px solid;
	//float:left;
}
#mr
{
	height:400px;
	width:700px;
	margin:0px auto;
	//border:1px solid;
	//float:right;
}
input
{
	height:30px;
	width:300px;
}
</style>
</head>

<body>
<div id="m">
	<div id="mr">
	<table cellpadding="10" cellspacing="25">
	<form action="editp.php? id=<?php echo $id; ?>" method="post">
	<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td></tr>
	<tr><td>Mobile</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/></td></tr>
	<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email'];?>"/></td></tr>
	<tr><td>Gender:</td><td><input type="text" name="gender" value="<?php echo $row['gender'];?>"/></td></tr>
	<tr><td>Date of birth:</td><td><input type="text" name="dob" value="<?php echo $row['dob'];?>"/></td></tr>
	<tr><td>Current city:</td><td><input type="text" name="city" value="<?php echo $row['city'];?>"/></td></tr>
	<tr><td><a href="show.php">Back.</a></td><td><input type="submit" value="update" /></td></td></tr>
	</form>
	</table>
	</div>
</div>
</body>
</html>