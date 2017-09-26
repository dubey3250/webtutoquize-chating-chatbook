<?php
session_start();
error_reporting(0);
$t=$_REQUEST['t'];
if($t==1)
{
	session_destroy();
}
 
 
?>



<html> 
<head>
<style>
body
{
//	background-color:black;
	 background-image:url('img/6830616-background-pictures.jpg');
	  background-repeat:no-repeat;
	  background-size:cover;
}
#menu
{
  height:50px;
  width:1340px;
  background-color:indigo;
  margin:0px auto;
  border-radius:15px 15px 0px 0px;
//  border:1px solid
 }
 a
 {
   text-decoration:none;
  
   }
   #search
   {
     height:30px;
	 width:200px;
	 background-color:white;
	 border:1px solid white;
	 margin:0px auto;
   }
#menu ul
{
	padding:15px;
	list-style-type:none;
align:center;
}

#menu li
   {
	float:left;
	
	 padding-right:150px;
	 display:block;
	// background-color:blue;
	 //border-radius:15px 15px 0px 0px;
	// border:1px solid;
	}
	
#menu li ul
{
  display:none; 
  align:center;
  text-align:center;
 }
 
 #menu li:hover ul
 {
   display:block;
   height:auto;
   width:50px;
  }
  
  #menu li ul li
  {
	clear:both;
	border:1px solid purple;
	//background-color:white;
	opacity:0.7;
	width:120px;
	height:45px;
	color:green;
	background-color:pink;
	border-radius:10px;
  }
  #main
  {
	  
	  height:1000px;
	  width:1340px;
	//  border:1px solid red;
	  margin:0px auto;
	//  margin-top:5px;
  }
  #left
  {
	 height:1000px;
	  width:330px;
	//  border:1px solid red;
		float:left;
		margin:0px auto;
  }
  #right
  {
	 height:995px;
	  width:995px;
	//  border:1px solid red;
		float:right;
		margin:0px auto;
		margin-top:7px;
		//background-color:white;
		opacity:0.9;
		 border-radius:15px 15px 15px 15px;
  }
  #lright
  {
	  
	   height:990px;
	  width:700px;
	  border:3px solid blue;
		float:left;
		margin:0px auto;
		//margin-top:7px;
		background-color:white;
		opacity:0.8;
		 border-radius:15px 15px 0px 0px;
	  
  }
    #rright
  {
	  
	   height:995px;
	  width:288px;
	//  border:1px solid blue;
		float:right;
		margin:0px auto;
	//	margin-left:5px;
		//background:-webkit-linear-gradient(yellow,blue,blue,yellow);
		//opacity:0.4;
	  
  }
  #sub
  {
	  height:492px;
	  width:280px;
	  margin:0px auto;
	  background-color:white;
	  border:2px solid blue;
	  border-radius:15px 15px 0px 0px;
	opacity:0.8;
  }
  #sub1
  {
	  background-color:white;
	  height:493px;
	  margin:0px auto;
	  width:280px;
	  	  border:2px solid blue;
	 opacity:0.8;
	 margin-top:2px;
	  border-radius:15px 15px 0px 0px;
  }
  
  
 
  #pic
  {
	  background-color:black;
	  height:250px;
	  width:1340px;
	  background-image:url('img/9.jpg');
	  background-repeat:no-repeat;
	  background-size:cover;
	  border-radius:15px 15px 0px 0px;
	  margin:0px auto;
	  //opacity:0.9;
	  //border:1px solid;
  }
#h
{
	height:16px;
	width:1340px;
	//border:1px solid blue;
	margin-top:8px;
}
</style>
<script>
imgno=1;

function movemyslider()
{
	if(imgno==12)
	{
		imgno=1;
	}
document.getElementById("imgslider").src="img/"+imgno+".jpg";
imgno++;
window.setTimeout("movemyslider()",2000);	
}
</script>
</head>
<body onload="movemyslider()">
<div id="menu">
<ul>
  <li><a href="#"><font face="timesnewroman" size="4" color="white" >Home </font></a>
		<!--	<ul>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="#">Mybeline</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="#">Laykme</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="#">Lotus</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="#">MAC</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="#">Dove</a></li></font>
			</ul>-->
	</li>
  
 <li><a href="#"><font face="timesnewroman" size="4" color="white" style="padding-left:40px;" >Play Quiz</font></a>
 
			<ul>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="c.php? cc=5">C-language</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="c.php? cc=1">C++ Oops</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="c.php? cc=2">java Oops</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="c.php? cc=3">Html&Css</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="c.php? cc=4">PHP Quiz</a></li></font>
			</ul>
 
 </li>
  <li><a href="#"><font face="timesnewroman" size="4" color="white" style="padding-left:40px;" >Chatting</font></a>
  
		<ul>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="login.php">User login</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="regist.php">Create an Account</a></li></font>
			</ul>
  
  
  </li>
  
  <li><a href="#"><font face="timesnewroman" size="4" color="white" style="padding-left:40px;">Tutorials</font></a>
  <ul>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="cprogram.php" target="iframe">C-Programs</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="cc.php" target="iframe">C++ Programs</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" ><li><a href="jv.php" target="iframe">java Programs</a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="htmlcs.php" target="iframe">Html&Css </a></li></font>
			<font face="timesnewroman"	color="white"  size="4" >	<li><a href="ph.php" target="iframe">PHP Programs</a></li></font>
			</ul>
  
  </li>
   <li><a href="contact.php"><font face="timesnewroman" size="4" color="white" style="padding-left:40px;">Contact us</font></a></li>
 <!-- <li><a href="#"><font face="timesnewroman" size="4" color="white" >Gifts</font></a></li>-->
     
  
</ul>  
</div>

<div  id="pic">
	<!--<img id="imgslider" width="1340px" height="250px"/>-->
</div>

<div  id="main">

	<div id="left">
		<iframe src="cprogram.php" frameborder="0"  height="1000" width="330" name="iframe"></iframe>
	</div>
	<div id="right">
	
		<div id="lright">
			<iframe src="cp.php" frameborder="0"  height="990" width="700" name="iframe2"></iframe>
		</div>
		
		<div  id="rright">
				<div id="sub">
							<span style="font-size:25px; color:red;">What will be the output of these programs.</span>
							<iframe src="news.php" frameborder="0" height="430" width="284px">
							</iframe>
				</div>
				<div  id="sub1">
							<span style="font-size:25px; color:red;">News from the website.</span>
							<iframe src="news2.php" frameborder="0" height="430" width="284px">
							</iframe>
				</div>
		</div>
	<!--<iframe src="" frameborder="0"  height="1000" width="330" name="iframe2"></iframe>-->
	</div>	
	
</div>
<div id="h">
	<span style="margin-left:100px; font-size:20px; word-spacing:30px;"><a href="#" style="text-decoration:underline;">Privacy</a>
	<a href="#" >feedback </a>
	<a href="#" >Copyright-2015-2016</a></span>
</div>
</body>
</html>