

<?php
mysql_connect('localhost','root','');
mysql_select_db("project2");
$query="select *from news";
$res=mysql_query($query);
?>
						<marquee behavior="alternate" direction="down" scrollamount="3" onmouseover="stop()" onmouseout="start()" name="if" >
				<?php		
						while($row=mysql_fetch_array($res,MYSQL_BOTH))
						{
					?>
						    	<span style="color:blue; font-size:18px;"><?php echo $row['id']; ?>.</span>
							<span style="color:blue; font-size:18px;  word-spacing:3px;"><?php echo $row['news'];?></span></br></br>
							<span style="color:blue; font-size:18px;"><?php echo $row['date']?></span><br/><br/>
					<?php	
						}
						
?>
						</marquee>