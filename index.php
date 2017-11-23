<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link  href="front.css" type="text/css" rel="stylesheet" media="all"/>
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
<table width="550px" height="350px" id="table" align="center" >
<tr>
<th colspan="2">
<p id="login_header" >Log-In</p></th>
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
 
 <th colspan="2" id="login_button"><input type="submit" name="sub" value="Login"/> <a href="forgot.php">Forgot Password? </a></th>
</tr>
<tr>
 
 <th colspan="2"><a href="signup.php" id="sign" style="color:#0000CC;"><br />Not registered yet? Click Here</a> </th>
</tr>

</table>
</form>
</div>
</body>
</html>
<?php
include("includes/connect.php");
if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$_SESSION['email']=$email;
	$_SESSION['var']=$email;
	$query="select email And password from user_info where email='$email' AND password='$password'";
	$run=mysqli_query($con,$query);
	if(strlen($password)<6)
	{
       echo "<script>alert('Password must be atleast 6 character long!!')</script>"; 	
	}
	else
	{if(mysqli_num_rows($run)>0)
	{
	   
		header("location:home.php");
	}
	else
	  echo "<script>alert('Invalid Email Or Password!!')</script>";
	}
}
?>
