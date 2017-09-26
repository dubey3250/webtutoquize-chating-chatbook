<?php
include("database.php");


error_reporting(0);
$t=$_REQUEST['t'];
$m=$_REQUEST['m'];


?>
<html>
<head>
<title>registration</title>
<style>
table tr td
{
	color:red;
}
</style>
<script>
function myfun()
{
	//location.href="rigistc.php"
}
</script>
</head>
<body style="background:-webkit-linear-gradient(lightblue 1%, lightblue 99%);">

<form action="code.php" method="POST" enctype="multipart/form-data">
<a href="index.php" style="color:blue; font-size:25px;" >back</a>
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
<td style="height:50px; width:200px;">Email*</td><td><input type="email" name="email" placeholder="prakash@gmail.com" required="required" style="height:50px; width:300px;"/></td>
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
<td><input type="submit" value="Create" onsubmit="myfun()" style="height:50px; width:170px; border-radius:10px; background-color:blue;"/></td>
<td><input type="reset" value="clear" style="height:50px; width:170px; border-radius:10px; background-color:blue; "/></td>
</tr>
</table>
</form>
			<?php
				if($t==1)
				{
			?>
					<p style="color:blue; font-size:20px;">Please check your email address..</p>
			<?php 
				}
				else if($m==1)
				{
			?>
					<p style="color:blue; font-size:20px;">Your account has been successfully created. please Go back to login.</p>
			<?php	
				}
			?>

</body>
</html>