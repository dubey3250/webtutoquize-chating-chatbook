<?php
session_start();
if($_SESSION['admin']=="")
{
	session_destroy();
	header("location:index.php");
//echo "<br/>";
}
?>

<html>
<head>
<link href="style6.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="lightblue">
<a href="logout.php"><p style="font-size:20px; color:blue;">LogOut.</p></a>
<span style="font-size:60px; font-family:Script MT Bold;"><?php echo $_SESSION['admin'];?></span><br/><br/>
<!--<span style="font-size:30px; font-family:Script MT Bold;">to see all the registration data</span>
<a href="show.php"><span style="font-size:35px; font-family:Script MT Bold;">Click here.</span></a>-->

<center><br/><br/>
			<!--<div id="menu2">
			      	<ul>
					
					
					<li><span style="font-size:20px;">Students</span></li>
					<li><span style="font-size:20px;">Response Mgmt</span></li>
					<li><span style="font-size:20px;">Settings</span></li>
				
				</ul>
			</div>-->
			
				<div id="menu">
			      	<ul>
					
					
					<li><a href="trunc.php"><span style="font-size:20px; color:blue;">Truncate Table C</span></a></li>
					<li><a href="ques.php"><span style="font-size:20px; color:blue;">Add Questions C</span></a></li>
					<li><a href="view.php"><span style="font-size:20px; color:blue;">View Questions C</span></a></li>
				
				</ul>
			   </div>
			   	<div id="menu">
			      	<ul>
					
					
					<li><a href="trunc1.php"><span style="font-size:20px; color:blue;">Truct Table C++</span></a></li>
					<li><a href="ques1.php"><span style="font-size:20px; color:blue;">Add Ques C++</span></a></li>
					<li><a href="view1.php"><span style="font-size:20px; color:blue;">View Ques C++</span></a></li>
				
				</ul>
			   </div>
			   	<div id="menu">
			      	<ul>
					
					
					<li><a href="trunc2.php"><span style="font-size:20px; color:blue;">Truct Table Java</span></a></li>
					<li><a href="ques2.php"><span style="font-size:20px; color:blue;">Add Ques java</span></a></li>
					<li><a href="view2.php"><span style="font-size:20px; color:blue;">View Ques java</span></a></li>
				
				</ul>
			   </div>
			   <div id="menu">
			      	<ul>
					
					
					<li><a href="trunc3.php"><span style="font-size:20px; color:blue;">Trct Tbl html&C</span></a></li>
					<li><a href="ques3.php"><span style="font-size:20px; color:blue;">Add Ques html&C</span></a></li>
					<li><a href="view3.php"><span style="font-size:20px; color:blue;">View Ques htm&C</span></a></li>
				
				</ul>
			   </div>
			    	<div id="menu">
			      	<ul>
					
					
					<li><a href="trunc4.php"><span style="font-size:20px; color:blue;">Truct Table php</span></a></li>
					<li><a href="ques4.php"><span style="font-size:20px; color:blue;">Add Ques php</span></a></li>
					<li><a href="view4.php"><span style="font-size:20px; color:blue;">View Ques php</span></a></li>
				
				</ul>
			   </div>
			
				<div id="menu">
			      	<ul>
					
					
					<li><a href="news.php"><span style="font-size:20px; color:blue;">New Program Add</span></a></li>
					<li><a href="pic.php"><span style="font-size:20px; color:blue;">Advertising mgnt</span></a></li>
					<li><a href="user.php"><span style="font-size:20px; color:blue;">Detail of Accounts</span></a></li>
				
				</ul>
			</div>
			
					<div id="menu">
			      	<ul>
					
					
					<li><a href="news.php? id=1"><span style="font-size:20px; color:blue;">News& event</span></a></li>
					<li><a href="show2.php"><span style="font-size:20px; color:blue;">Contact us mngt</span></a></li>
					<li><a href="password2.php"><span style="font-size:20px; color:blue;">Change Password</span></li>
				
				
				</ul>
			</div>
			<?php
				error_reporting(0);
				$m=$_REQUEST['m'];
				if($m==1)
				{
			?>
			<p style="align:center;color:red;font-size:25px;">Your Table is Successfully Truncated.</p>
			<?php	
				}
			
			?>
			
						
		</center>

</body>
</html>
