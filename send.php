<?php
error_reporting(0);
session_start();
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:index.php");
}
$id=$_REQUEST['id'];
$email=$_SESSION['email'];

?>
<html>
<head>
<style>

#p
{
	//height:1200px;
	//width:600px;
	margin-top:10px;
	float:left;
}
#q
{
	//height:1200px;
	//width:400px;
	float:right;
}
</style>
</head>
<body style="background:-webkit-linear-gradient(white,pink,white);">
<a href="profile.php" style="color:blue; font-size:30px;">back</a><br/>
<span style="color:blue; font-size:30px;">Search for a friend..........</span>

<form action="serch.php" method="post">
<input type="search" name="serch" style="height:45px;width:1230px;"/>
<input type="submit" value="Search" style="background-image:url('img/2.jpg'); height:48; width:100px;"/>
</form>
<form action="sendc.php" method="POST">
<p style="color:blue; font-size:27px;">Write a message.</p>
<textarea rows="10" cols="60" maxlength="200"  style="resize:none;" name="msg"></textarea></br>
<span style="font-size:28px;">Email id&nbsp;</span><input type="text" style="width:400px;height:40px" name="email"/><br/><br/>
<input type="submit" value="Send" style="background-color:blue; font-size:25; height:40px; width:175px; border-radius:5px;"/>
</form>

<form action="sendc.php? x=1" method="POST" enctype="multipart/form-data" >
<p style="color:blue; font-size:27px;">Send a Picture</p>
<span style="font-size:28px;">Upload a Picture *</span><input type="file" style="width:400px;height:40px" name="file"/><br/>
<span style="font-size:28px;">Email id&nbsp;</span><input type="text" style="width:400px;height:40px" name="email"/><br/><br/>
<input type="submit" value="Send" style="background-color:blue; font-size:25; height:40px; width:175px; border-radius:5px;"/>
</form>
<div id="p">
<span style="font-size:20px;color:blue">Received messages!</span><br/><br/>
<?php
include("database.php");
$query="select *from msg where email='$email'  order by ques_id desc";
$res=mysql_query($query);
$query2="select *from msgpic where email='$email'  order by ques_id desc";
$res2=mysql_query($query2);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<img src="attach/<?php echo $row['file2']; ?>" height="50" width="50"/>
<span style="font-size:20px;">From&nbsp;&nbsp;<?php echo $row['user_id'];?>&nbsp;&nbsp;</span><br/><br/>
<span style="font-size:25px;"><?php echo $row['msg'];?></span><a href="del.php? id=<?php echo $row['ques_id']; ?>" style="margin-left:40px; font-size:20px">delete</a><br/><br/>
<?php	
}
while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
{
?>
<img src="attach/<?php echo $row2['file2']; ?>" height="50" width="50"/></img>
<span style="font-size:20px;">From&nbsp;&nbsp;<?php echo $row2['user_id'];?>&nbsp;&nbsp;</span><br/><br/>
<a href="http://localhost:70/website2/file2/<?php echo $row2['file'];?>"><img src="file2/<?php echo $row2['file'];?>" style="height:250px; width:300px"/></a>
<a href="del1.php? id=<?php echo $row2['ques_id']; ?>" style="margin-left:40px; font-size:20px;" >delete</a>
<br/><br/>
<?php	
}
?>
</div>

<div id="q">
<span style="font-size:20px;color:blue">Sent messages!</span><br/><br/>
<?php
$query="select *from msg where user_id='$email'  order by ques_id desc";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<img src="attach/<?php echo $row['file2']; ?>" height="50" width="50"/>
<span style="font-size:20px;">From&nbsp;&nbsp;<?php echo $row['user_id'];?>&nbsp;&nbsp;</span><br/><br/>
<span style="font-size:25px;"><?php echo $row['msg'];?></span><a href="del.php? id=<?php echo $row['ques_id']; ?>" style="margin-left:40px; font-size:20px">delete</a><br/><br/>
<?php	
}
?>
</div>
</body>
</html>