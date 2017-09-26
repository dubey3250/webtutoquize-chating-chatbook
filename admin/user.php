<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:login.php");
echo "<br/>";
} 
?>

<?php

//$serch=$_POST['serch'];
//echo $serch;
//echo "</br>";

include("database.php");
$query="select *from regist";
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
	background:-webkit-linear-gradient(lightblue,lightblue);
}
</style>
</head>
<body>
<marquee behavior="alternate" scrollamount="15" onmouseover="stop()" onmouseout="start()"><table  >
<tr>
<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<td><table border="1" cellpadding="0" cellspacing="10" style="float:left;margin:10px">
	<tr>
	<td rowspan="6"><img src="../attach/<?php echo $row['file']; ?>" height="220" width="200"/></td>
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
	<tr>
	<td style="font-size:20px;color:blue;">Password is</td><td style="font-size:20px;color:blue;"><?php echo $row['password']; ?></td>
	</tr>
</table></td>
<?php
}
?>		
</tr>
</table></marquee>
</body>
</html>