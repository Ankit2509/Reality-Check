<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp</title>
<link  href="signup.css" type="text/css" rel="stylesheet" media="all"/>
</head>

<body>
<div id="logo">
<img src="images/logo.png" height="250" width="210" />
</div>
<div id="header_com">
<span id="header" align="center"> Reality Check</span>
<span id="sub" align="center">The right place for any discussion.</span>
</div>

<div id="mid">
<form method="post">
<table align="center" id="table" >
<tr>
<th colspan="2">
<p id="signup_header" >Sign Up</p></th>
</tr>
<tr>
 <th><h3>Name</h3></th>
 <th><input type="text" name="name"  required="required" />  </th>
</tr>

<tr>
 <th><h3>Email:</h3></th>
 <th><input type="text" name="email" placeholder="eg. xyz@abcd.com" required="required" />  </th>
</tr>
<tr>
 <th><h3>Password:</h3></th>
 <th><input type="password" name="pass" title="password must be atleast 6 character long" required="required" />  </th>
</tr>
<tr>
 
 <th colspan="2" id="signup_button"><input type="submit" name="sign" value="SignUp"/> </th>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
session_start();

?>
<?php
include("includes/connect.php");
//include("includes/toastmessage.js");
if(isset($_POST['sign']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$query="insert into user_info(name,email,password) values('$name','$email','$password')";
	$_SESSION['email'] = $email;
	if(strlen($password)<6)
	{
       echo "<script>alert('Password must be atleast 6 character long!!')</script>"; 	
	}
	else
	{
	  
		$run=mysqli_query($con,$query);
	    header("location:profile.php");
	}
}
?>
