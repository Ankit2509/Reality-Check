<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<link href="profile.css" rel="stylesheet" type="text/css" media="all" />
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
	 echo "<div id='add' align='center'>";
            echo "<a href='photo.php' style='color:#36F;'>Add Photo</a></div>";
     echo "</div>"; 
	 echo "<div id='up_right'><br /><br />";
	 echo "<div id='name'>$name</div>";
	 if($bio=="")
	  {
	  echo "<div id='bio'>&nbsp;&nbsp;&nbsp;<a href='bio.php'>Add Profile Bio</a></div>";
	  }
	  else
	     {echo "<div id='bio'>$bio   <a href='bio.php'>(Edit)</a></div> ";
		 }
		 }
      echo "</div>";
	  echo "</div><br />";
	  include("includes/menu.php");
      echo "<div id='below'><h2 align:center>&nbsp;&nbsp;$name, Add details about yourself</h2>";   
?>







<form method="post">

<div id="upper">
<div id="knows">
<h3 align="center">Knows About</h3>
<div style='height:0px; width:97%; border:1px  solid #999; margin:auto; '></div>
<h4>&nbsp;&nbsp;What topics do you know about?</h4>
<input type="text" name="know" style="margin:auto; width:95%; margin-left:5px; margin-bottom:5px;"  placeholder="Add Topics"/>
</div>
<div id="employment">
<h3 align="center">Employment</h3>
<div style='height:0px; width:97%; border:1px  solid #999; margin:auto; '></div>
<h4>&nbsp;&nbsp;Where have you worked?</h4>
<input type="text" name="employment" style="margin:auto; width:95%; margin-left:5px; margin-bottom:5px;" placeholder="Add Workplaces"/>
</div>
</div>
<div id="lower">
<div id="education">
<h3 align="center">Education</h3>
<div style='height:0px; width:97%; border:1px  solid #999; margin:auto; '></div>
<h4>&nbsp;&nbsp;Where have you studied?</h4>
<input type="text" name="education" style="margin:auto; width:95%; margin-left:5px; margin-bottom:5px;" placeholder="Add Education"/>
</div>
<div id="location">
<h3 align="center">Location</h3>
<div style='height:0px; width:97%; border:1px  solid #999; margin:auto; '></div>
<h4>&nbsp;&nbsp;Where do you currently live?</h4>
<input type="text" name="location" style="margin:auto; width:95%; margin-left:5px; margin-bottom:5px;" placeholder="Add Location"/>
</div>
</div>
</div>
</form>
</body>
</html>
