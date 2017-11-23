<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<link href="photo.css" rel="stylesheet" type="text/css" media="all" />
<link href="includes/logo.css" rel="stylesheet" type="text/css" media="all" />
<link href="includes/menu.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<?php
include("includes/logo.php");
session_start();
?>
<div id="above">
<?php
include("includes/connect.php");
$get_email=$_SESSION['email'] ;
$photo_var="";
$query="select * from user_info where email='$get_email'";
$execute=mysqli_query($con,$query);
while($row_wise_data=mysqli_fetch_array($execute))
 {
	 $name=$row_wise_data[1];
	 $photo=$row_wise_data[4];
	 $bio=$row_wise_data[5];
	 echo "<div id='up_left'>";
	 echo "<div id='one'>";
	 if($photo=="")
        {
			echo "<img src='images/photo.png' name='image' width='190' height='190' id='images' /></div>"; 
		    
        }
	 else
	 {
		 echo "<img src='users/$photo' name='image' width='190' height='190' id='images' />";
		  echo  "</div>";

     }
	 echo "</div>"; 
	 echo "<div id='up_right'><br /><br />";
	 echo "<div id='name'>$name</div>";
	 if($bio=="")
	  {
	  echo "<div id='bio'>&nbsp;&nbsp;&nbsp;<a href='bio.php'>Add Profile Bio</a></div>";
	  }
	  else
	     echo "<br /><div id='bio'>$bio</div>"; }
      echo "</div>";
	  echo "</div><br />";
	  
	  echo "<div id='below'>";
	  echo "<h2 align='center'>Submit your Query</h2>";
	  echo "<div style='height:0px; width:98%; border:1px  solid #999; margin:auto; '></div><br /> <br /><br /> <br />";
	  echo "<form method='post' enctype='multipart/form-data'";
	  echo "<table align='center'";
	  echo "<tr><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea rows='10' cols='50' name='query_file' style='margin:auto; '  ></textarea></th></tr>"."<br /><br /><tr><th><input type='submit' name='sub' style='margin:auto;' value='Upload' /></th></tr></table></form>";
	  echo "</div>";  

if(isset($_POST['sub']))
 {
$image_name=$_FILES['photo_file']['name'];
$temp_name=$_FILES['photo_file']['tmp_name'];
move_uploaded_file($temp_name,"users/$image_name");
	
$query="update user_info set image='$image_name' where email='$get_email'";
mysqli_query($con,$query);
header("location:profile.php");
}

?>
</body>
</html>
