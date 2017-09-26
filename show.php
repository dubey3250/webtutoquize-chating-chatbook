<?php
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
echo "<br/>";
}
$email=$_SESSION['email'];
include("database.php");
$query="select *from regist where email='$email'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH); 

$query2="select *from profilep where email='$email'";
$res2=mysql_query($query2);
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
	height:500px;
	width:1200px;
	margin:0px auto;
//	border:1px solid;
}
#ml
{
	margin-top:40px;
	height:300px;
	width:400px;
//	margin:0px auto;
	//border:1px solid;
	float:left;
}
#mr
{
	height:400px;
	width:700px;
//	margin:0px auto;
	//border:1px solid;
	float:right;
}
img
{
	border:1px solid white;
	border-radius:15px 5px 15px 5px;
}
a img:hover
{
	border:1px solid blue;
	
}
tr td
{
	color:blue;
	font-size:25px;
}
#sub
{
	height:300px;
	width:300px;
	border:1px solid;
	margin:15px;
	float:left;
	
}
a
{
	color:indigo;
}
a:hover
{
	color:red;
}
#p1
{
	height:210px;
	width:180px;
	float:left;
}
#p
{
	height:180px;
	width:180px;
	float:left;
}
</style>
</head>

<body>
<div id="m">
	<div id="ml">
		<a><img src="attach/<?php echo $row['file']; ?>" height="300" width="400"/></a>
	</div>
	<div id="mr">
	<table cellpadding="10" cellspacing="25">
	<tr><td>Name</td><td><?php echo $row['name'];?></td></tr>
	<tr><td>Mobile</td><td><?php echo $row['mobile'];?></td></tr>
	<tr><td>Email:</td><td style="text-decoration:underline; color:indigo"><?php echo $row['email'];?></td></tr>
	<tr><td>Gender:</td><td><?php echo $row['gender'];?></td></tr>
	<tr><td>Date of birth:</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td>Current city:</td><td><?php echo $row['city'];?></td></tr>
	<tr><td><a href="profile.php">Back.</a></td><td><a href="editc.php? id=<?php echo $row['id']; ?>">Edit profile</a></td></td></tr>
	</table>
	</div>
</div>
<form action="setp.php" method="post" enctype="multipart/form-data">
<span style="color:blue;font-size:25px;">Upload Picture.</span><input type="file" required name="file"/>
<input type="submit" style="color:blue;font-size:20px;" value="upload"/></span>
</form>
`<?php
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<div id="p1">
 <a href="delup.php? id=<?php echo $row2['id']; ?>"><span style="color:red;font-size:25px;margin:15px;">Delete</span></a><br/>
	<a href="change.php? id=<?php echo $row2['id']; ?>"><div id="p">
	<img src="attach/<?php echo $row2['file']; ?>" height="175" width="175"/><br/>
	<span style="color:blue;font-size:25px;">Set as profile picture</span>
	</div></a>
</div>	
<?php
}
?>
</body>
</html>