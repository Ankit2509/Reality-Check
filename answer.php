<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Answer</title>
<link href="answer.css" type="text/css" rel="stylesheet" media="all" />
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
<div  align="center" style="background:#CCCCCC; font-size:40px;">Answer Questions</div>
<!--<div style="height:0px; width:740px; border:1px  solid #999; margin:auto; "></div>-->
<br />
<?php

$fetch_data="select * from question  order by rand()";
 
 $run=mysqli_query($con,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $email=$row_wise_data[1];
	 $question=$row_wise_data[2];
	 include("includes/connect.php");
	$fetch="select name from user_info where email='$email'";
	 $runn=mysqli_query($con,$fetch);

	 while($row=mysqli_fetch_array($runn))
	 {
		 $person=$row[0];
	 }
 
	 echo "
	 <br />
	      <div id='title'><b>$question</b></div>
		  <div id='person'><b>Posted By: $person</b></div><br /><br />
		  <div id='answer' align='center'><input type='submit' name='answer' value='Answer'/></div>

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
