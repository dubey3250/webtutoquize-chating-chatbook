<style>
img
{
	height:250px;
	width:280px;
	border-radius:15px 5px 15px 5px;
	border:1px solid black;
}
a img:hover
{
	border:1px solid white;
}
</style>


<?php
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="select max(id),id ,news,date from news2 group by id";
$res=mysql_query($query);
						while($row=mysql_fetch_array($res,MYSQL_BOTH))
						{
					?>
						    <marquee behavior="" direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()" name="if" >	<span style="color:blue; font-size:18px;"><?php echo $row['id']; ?>.</span>
							<span style="color:blue; font-size:18px;  word-spacing:3px;"><?php echo $row['news'];?></span></br></br>
							<span style="color:blue; font-size:18px;"><?php echo $row['date']?></span></marquee>
					<?php	
						}
						
?>
<?php
$query="select *from glry";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<div id="b">
<span style="color:red; font-size:25px;  word-spacing:3px;">Advertising...</span>
<marquee behavior="alternate" direction="up" scrollamount="2" onmouseover="stop()" onmouseout="start()" name="if" >
<a href="http://localhost:70/website2/admin/file/<?php echo $row['file'];?>"><img src="admin/file/<?php echo $row['file']; ?>" height="250" width="283"/></a>
</marquee>
</div>
<?php
}
?>