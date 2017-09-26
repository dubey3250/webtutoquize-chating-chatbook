<?php
error_reporting(0);
session_start();
$m=$_REQUEST['t'];
if($_SESSION['email'])
{
	header("location:profile.php");
}
?>
<html>
			<head>
					<title>page</title>
					<link href="style3.css" rel="stylesheet" type="text/css"/>
					<style>
						td input
						{
						 outline:none; border-radius:15px 15px 15px 15px;
						}
#xx
{
	height:100px;
	width:1360px;
	align:center;
	text-align:center;
	background-color:indigo;
}
					</style>
			</head>
					<body>
					<!--  <a href="index.php" style="text-decoration:none; font-size:20px;">click here to Home..</a><br/>-->
					  
					 <div id="xx">
					<span style="font-size:80;text-shadow:15px 15px 20px  black; font-family:times new romans; color:white;"><b>Welcome To Chatbook</b> </span> <br/>
					</div>
		
				<form action="code2.php" method="POST">		
		<div  id="mn">		
					   <div id="outer">
					   
	<?php
$msg=$_REQUEST['msg'];
if($msg==1)
{  
?>
<p style="color:red; margin-left:150px; font-size:20px;">invalid username or password</p>
<?php
}
?>					
						<table  cellspacing="15px" cellpadding="" style="margin-top:75px;text-align:center;">
						<span style="font-size:40px; font-family:Rockwell Extra Bold; margin-left:100px; box-shadow:15px 15px 20px pink; color:white;">Login To Chatbook</span><br/>
						<tr>
						 <td><span style="font-size:25px;">Email Id</span></td><td><input type="email"  style="height:40px;width:200px;" name="email"/></td>
						 </tr>
						 <tr>
						<td> <span style="font-size:25px;">Password</span></td><td><input type="password" style="height:40px;width:200px;" name="password"/></td>
						</tr>
						<tr>
						<td><a href="regist.php" style="font-size:25px;">Sign up</td> <td><input type="submit" value="login" style="height:35px; background-color:blue; outline:none; width:100px; border-radius:15px 15px 15px 15px;"/></td>
						 </tr>
						</table>	
					   </div>
					    </form>
					   <div id="outer1">
					   
			<?php
				if($m==1)
				{
			?>
					<p style="color:red;  font-size:20px;">Please check your email address..</p>
			<?php 
				}
			?>
								<a href="index.php" style="color:blue; font-size:25px;" >back</a>
								<form action="code.php" method="POST" enctype="multipart/form-data">
								
<table border="0" style="height:50px; width:250px;" align="center">

<tr>
<td style="height:50px; width:200px;">Name*</td><td><input type="text" name="name" required="required" placeholder="Enter your name" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Number*</td><td><input type="text" name="number"  required placeholder="Enter your mobile number" style="height:50px; width:300px;"/></td>
</tr>

<tr>
<td style="height:50px; width:200px;">Dob*</td><td><input type="date" name="dob"   placeholder="Enter your date of birth" style="height:50px; width:300px;" /></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Email*</td><td><input type="email" name="email" placeholder="chatbook@gmail.com" required="required" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Password*</td><td><input type="password" required name="password" style="height:50px; width:300px;"/></td>
</tr>

<tr>
<td style="height:50px; width:200px;">Upload Resume*</td><td><input type="file" required name="file" style="height:50px; width:300px;"/></td>
</tr>
<tr>
<td style="height:50px; width:200px;">Gender*</td><td><input type="radio" name="gender"  value="male"/>male<input type="radio" name="gender" value="female"/>female</td>
</tr>
<tr>
<td>City*</td>
   <td><select name="city" style="height:50px; width:300px;">
	   <option>Allahabad</option>
		<option>Jaunpur</option>
		<option>Lucknow</option>
		<option>Delhi</option>
		<option>Ghazipur</option>
		<option>Chandauli</option>
	</select></td>
</tr>	
<tr>
<td><input type="submit" value="SignUp" onsubmit="myfun()" style="height:50px; font-size:25px; width:170px; border-radius:10px; background-color:blue;"/></td>
<td><input type="reset" value="Clear" style="height:50px; font-size:25px; width:170px; border-radius:10px; background-color:blue; "/></td>
</tr>
</table>
</form>
					   </div>
			</div>		   
					
					</body>
					
</html>					