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

$serch=$_POST['serch'];
//echo $serch;
echo "</br>";

include("database.php");
$query="select *from regist where name like '$serch%'";
$res=mysql_query($query);
/*if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo "<b style='color:blue;font-size:30px;'>Results...</b>";
}
else
{
	echo "<b style='color:blue;font-size:30px;'>Not found....</b>";
}
*/
?>

<html>
<head>
<style>
#p
{
	height:400px;
	width:600px;
	margin:0px auto;
	float:left;
}
#p1
{
	height:400px;
	width:300px;
	margin:0px auto;
	float:left;
	
}
#p2
{
	height:400px;
	width:300px;
	margin:0px auto;
	float:right;
}
body
{
	background:-webkit-linear-gradient(white,pink,white);
}
</style>
</head>
<body>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<table border="0" cellpadding="15px" cellspacing="15px" style="float:left">
	<tr>
	<td rowspan="6"><img src="attach/<?php echo $row['file']; ?>" height="175" width="175"/></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:blue;"><?php echo $row['name']; ?></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:blue;"><?php echo $row['email']; ?></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:blue;"><?php echo $row['dob']; ?></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:blue;"><?php echo $row['city']; ?></td>
	</tr>
	<tr>
	<td style="font-size:20px;color:blue;"><?php echo $row['mobile']; ?></td>
	</tr>
	
</table>
<?php
}
?>		
</body>
</html>

