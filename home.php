<?php
session_start();
if(!$_SESSION['var'])
{header("location:index.php");}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="home.css" type="text/css" rel="stylesheet" media="all" />
<link href="includes/logo.css" type="text/css" rel="stylesheet" media="all" />
<link href="includes/menu.css" type="text/css" rel="stylesheet" media="all" />

</head>

<body>
<?php
include("includes/logo.php");
?>
<div id="slider">
<?php
include("slider/wowslider.html");
?>
</div>
<?php
include("includes/menu.php");
include("admin/includes/connection.php");
?>

<div id="feeds">
<div id="feed_title" align="center" style="background:#CCCCCC; font-size:40px;">Feeds</div>
<!--<div style="height:0px; width:240px; border:1px  solid #999; margin:auto; "></div>-->
<br />
<h3 align="center">Questions(
<?php 
$count="select count(id) from question where email='$get_email'"; 
$value=mysqli_query($con,$count); 
while($row_wise_data=mysqli_fetch_array($value))
 {
	 $counting=$row_wise_data[0];
 }
echo "$counting";
?> )</h3>
<h3 align="center">Answers(0)</h3>
</div>
<div id="content">
<div  align="center" style="background:#CCCCCC; font-size:40px;">Top Stories for you</div>
<!--<div style="height:0px; width:740px; border:1px  solid #999; margin:auto; "></div>-->
<br />
<?php

$fetch_data="select * from post order by rand()";
 
 $run=mysqli_query($con,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $title=$row_wise_data[1];
	 $content=$row_wise_data[2];
	 $image=$row_wise_data[3];
	 $date=$row_wise_data[4];
	 $substring=substr($content,0,150)."...";
	 
	 echo "
	 <br />
	      <div id='title'><b>$title</b></div>
		  <div id='date'><h4 align='right' >Posted On: $date</h4></div>
		  <div id='image' align='center'><img src='admin/includes/uploaded/$image' height='200px' width='90%' /></div><br />
		  <div id='content_user' align='center'>$substring</div>
		  <a href='#' ><p align='center'>(Read More...)</p></a>
		  <div style='height:0px; width:97%; border:1px  solid #999; margin:auto; '></div>
		  
		  <br /><br />
	    ";
 }
 

?>
</div>

<div id="trending">
<div  align="center" style="background:#CCCCCC; font-size:40px;">Trending Posts</div>
<!--<div style="height:0px; width:240px; border:1px  solid #999; margin:auto; "></div>-->
<br />
</div>
</body>
</html>
