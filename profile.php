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
$email=$_SESSION['email'];
include("database.php");
$query="select *from regist where email='$email'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
?>
<html>
<head>
<script>
function fun()
{
	
var x;
var r=confirm("Confirm first. \nDo you really want to delete your account!");
if (r==true)
  {
  //x="You pressed OK!";
	location.href="delp.php";
  }
else
  {
	location.href="profile.php";
	//window.print();
  }
}
</script>
<style>
ul
{
	list-style-type:none;
}
ul a:hover
{
	color:red;
}
ul li
{
	display:inline;
	margin-left:20px;
}
a
{
	text-decoration:none;
}
a:hover
{
	text-decoration:underline;
}
#if
{
	height:300px;
	width:1350px;
}
#im
{
	height:300px;
	width:200px;
	float:left;
	
}
#imd
{
	height:300px;
	width:1150px;
	float:right;
}
img
{
	//height:150px;
	border:1px solid pink;
	//width:200px;
	border-radius:15px 5px 15px 5px;
	box-shadow:10px 10px 25px indigo;
}
a img:hover
{
	border:1px solid white;
}
#xx
{
	height:100px;
	width:1335px;
	align:center;
	background-color:indigo;
	text-align:center;
}
</style>
<link href="style4.css" rel="stylesheet" type="text/css"/>
</head>

<body style="background:-webkit-linear-gradient(white,pink,white);">
<div id="xx">
<span style="font-size:80;text-shadow:15px 15px 20px  black; font-family:times new romans; color:white;"><b>Chatbook</b> </span> <br/>
</div>
<form action="serch.php" method="post">
<input type="search" name="serch" style="height:45px;width:1230px; background-color:pink;"/>
<input type="submit" value="Search" style="background-image:url('img/2.jpg'); height:48; width:100px;"/>
</form>
<span style="font-size:25;font-family:Harlow Solid Italic; text-shadow:5px 5px 8px; color:red;">Welcome to profile <?php echo $_SESSION['email'];?>....</span> <br/>
<div id="if">
	<div id="im">
	<a href="http://localhost:70/website2/attach/<?php echo $row['file'];?>"><img src="attach/<?php echo $row['file']; ?>" height="150" width="200"/></a><br/>
	
	<!--<span style="color:green; font-size:30px;"><a href="profile.php" style="text-decoration:none;"><?php echo $_SESSION['email'];?></a></span>-->
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div id="imd">
			            	<ul>
					<li><a href="#"><span style="font-size:30px;">Home</span></a></li>
					<li><a href="logout.php"><span style="font-size:30px;">Logout</span></a></li>
					<li><a href="show.php"><span style="font-size:30px;">View profile</span></a></li>
					<li><a href="send.php"><span style="font-size:30px;">Send message</span></a></li>
					<li><a href="password.php"><span style="font-size:30px;">Change password</span></a></li>
					<li><span ><input type="button"  style="font-size:30px;color:blue; border-radius:12px 0px 12px 0px; background-color:pink; " onclick="fun()" value="Delete your account"/></span></li>
					<form action="post.php" method="post" enctype="multipart/form-data" >
					<textarea rows="6" required cols="50" name="post" style="resize:none;"></textarea><br/>
					<input type="file" name="file" height="30px" width="300px" /><br/>
					<input type="submit" value="Post" style="color:blue;font-size:25px;margin-left:355px;" />
					</form>
				</ul>
				
</div>
</div>
<?php
$query2="select *from post order by id desc";
$res2=mysql_query($query2);
	while($row2=mysql_fetch_array($res2,MYSQL_BOTH))
	{
		$id=$row2['id'];
		$email=$row2['user'];
		$query="select *from regist where email='$email'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
?>
<table border="0" align="center" >
	<tr><td><img src="attach/<?php echo $row['file']; ?>" height="80" width="80"/></td><td colspan="2"><span style="font-size:25px;margin-left:10px;"><?php echo $row['name']; ?></span></td></tr>
	<tr><td></td><td><span style="font-size:25px;"><?php echo $row2['post']; ?></span></td></tr>
	<?php
		if($row2['file'])
		{
	?>
	<tr><td></td><td><a href="http://localhost:70/website2/attach/<?php echo $row2['file'];?>"><img src="attach/<?php echo $row2['file']; ?>" height="800" width="600"/></a></td></tr>
	<?php
		}
	?>
	<tr><td></td><td><span style="color:blue;font-size:30px;">Comments..</span><br/></td></tr>
		<?php
			$querys="select *from comment where qid='$id' ";
				$ress=mysql_query($querys);
				while($rows=mysql_fetch_array($ress,MYSQL_BOTH))
				{
					$email=$rows['user'];
					$query1="select *from regist where email='$email'";
					$res1=mysql_query($query1);
					$row1=mysql_fetch_array($res1,MYSQL_BOTH);
		?>
			<tr><td><img src="attach/<?php echo $row1['file']; ?>" height="50" width="50"/></td>
			<td colspan="2"><span style="font-size:25px;"><?php echo $row1['name']; ?></span></td></tr>
				<tr><td></td><td><span style="color:green;font-size:20px;"><?php echo $rows['comment'];?></span><br/></td></tr>
		<?php	
				}
		?>
	<tr><td></td><td>	
	<form action="comment.php?id=<?php echo $row2['id']; ?>" method="post" >
					<textarea rows="4" required cols="50" name="comment" style="resize:none;"></textarea><br/>
					<input type="submit" value="reply" style="color:white; background-color:blue; font-size:25px;margin-left:345px;" />
					</form>
	</td></tr>
</table>	
<?php
	}
?>
<?php
error_reporting(0);
$n=$_REQUEST['n'];
if($n==1)
{
?>
	<span style="color:red;font-size:20px;">your password is successfully changed...</span>
<?php
}
?>
</body>
</html>
