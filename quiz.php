<?php
session_start();
error_reporting(0);
if($_SESSION['cc']=="")
{
	$_SESSION['cc']=$_REQUEST['cc'];
}
mysql_connect('localhost','root','');
mysql_select_db("project2");
/*$id2=rand(1,15);
$id1=rand(1,15);
if($id==$id1)
{
	$id=$id2;
}
$i=7;
$cars[0]=$i;
echo "I like " . $cars[0];*/

if($_SESSION['id']=="")
{
	$_SESSION['id']=1;
}
$_SESSION['id']=$_SESSION['id']+1;
$id=$_SESSION['id'];
if($_SESSION['ques']=="")
{
	$_SESSION['ques']=11;
}
if($_SESSION['cc']==1)
{
	$query="select *from quiz1 where id='$id'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
}
else if($_SESSION['cc']==2)
{
	
	$query="select *from quiz2 where id='$id'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
	
}
else if($_SESSION['cc']==3)
{
	$query="select *from quiz3 where id='$id'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
}
else if($_SESSION['cc']==4)
{
	$query="select *from quiz4 where id='$id'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
}
else if($_SESSION['cc']==5)
{
$query="select *from quiz where id='$id'";
$res=mysql_query($query);
$row=mysql_fetch_array($res,MYSQL_BOTH);
}
?>


<html>
<head>
<script>
imgno=55;
function myfun()
{
	if(imgno>15 && imgno<=55)
	{
		document.getElementById("demo").innerHTML="<p style='color:green; float:left;'>"+imgno+"</p>";
	}
	else if(imgno<=15 && imgno>=0)
	{
		//imgno="<span style='color:red;'>"+imgno+"</span>"
		document.getElementById("demo").innerHTML="<p style='color:red; float:left;'>"+imgno+"</p>";
	}
	else if(imgno==-1)
	{
		//alert("Your time is out. Because you could not answer the given question.");
//var r=confirm("Press ok if you want to quit  this game otherwise \n if you want to play please press Cancel button!");

	location.href="index.php? t=1";
//	location.href="quizcode.php";
	}
imgno--;
window.setTimeout("myfun()",1000);	
}
</script>
<style>
th
{
	margin-top:50px;
	font-size:30px;
}
td 
{
	margin-top:20px;
	font-size:20px;
}
span
{
	color:green; 
	font-size:125px; 
	margin-right:200px;
}
</style>
</head>

<body bgcolor="lightblue" onload="myfun()">

			<table border="0" cellpadding="7">
			<h1>Click here to <a href="index.php? t=1">Cancel.</a></h1>
		<!--	<p style="color:red; font-size:30px; float:right; margin-right:200px;">45 Sec.</p> -->
			<span id="demo" style="float:right; " ></span> <!--used to show time intervl for the question..-->
			
			<?php
			error_reporting(0);
			$m=$_REQUEST['m'];
				if($_SESSION['ques']==1)
				{
					header("location:c.php? m=1");
					//session_destroy();
			?>
					<!--<span style="color:blue; font-size:25px;">Thankyou for playing..</span> -->
			<?php	
				}
				else
				{
			?>
			<span style="color:red; font-size:25px;"><?php echo $_SESSION['ques']-1; ?> Questions are remains to come out.</span>
			<?php
				}
			?>
			<tr>
			<th colspan="2"><?php echo $row['question'];?></th>
			</tr>
			<th>options:-</th>
			<form action="quizcode.php? cc=<?php echo $_SESSION['cc']; ?> " method="post">
			<tr>
			<td><input type="radio" name="option" value="option1" /><?php echo $row['option1'];?></td>
			<td><input type="radio" name="option" value="option2"/><?php echo $row['option2'];?></td>
			</tr>
			<td><input type="radio" name="option" value="option3"/><?php echo $row['option3'];?></td>
			<td><input type="radio" name="option" value="option4"/><?php echo $row['option4'];?></td>
			</tr>
			<td><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
			<td><input type="submit" value="Next" style="height:35px; width:125px; background-color:blue;" /></td>
			</form>
			</table>
		<audio autoplay>
  <source src="AudioJoiner160311064037.mp3" hidden="hidden" type="audio/mpeg"/>
  </audio>	
	
</body>
</html>