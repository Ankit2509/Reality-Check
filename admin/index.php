<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_Panel</title>
<link href="admin.css" rel="stylesheet" type="text/css" media="all" />
<link href="includes/header.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<?php
include("includes/header.php");
?>
<div id="mid" >
<form method="post">
<table width="550px" height="350px" id="table" align="center" >
<tr>
<th colspan="2">
<p id="login_header" >Admin Log-In</p></th>
</tr>
<tr>
 <th><h3>Admin-Id</h3></th>
 <th><input type="text" name="email" placeholder="eg. xyz@abcd.com" required="required" />  </th>
</tr>
<tr>
 <th><h3>Password:</h3></th>
 <th><input type="password" name="pass" title="password must be atleast 6 character long" required="required" />  </th>
</tr>
<tr>
 
 <th colspan="2" id="login_button"><input type="submit" name="sub" value="Login"/> </th>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php
include("db/config.php");

if(isset($_POST['sub']))
{
  $admin=$_POST['email'];
  
  $pass=$_POST['pass'];
  
  $data="select * from admin where email='$admin' AND password='$pass' ";	
  
  $run=mysqli_query($conn,$data);
  
  if(mysqli_num_rows($run)>0)
  {
	  header("location:admin_dash.php");
  }
  else
  {
	  echo '<script>alert("Invalid Id or Password!!")</script>';
  }
}

?>