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

<?php
include("database.php");
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