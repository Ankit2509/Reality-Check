<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ask Question</title>
<link href="ask.css" type="text/css" rel="stylesheet" media="all" />
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
<div  align="center" style="background:#CCCCCC; font-size:40px;">Ask Your Question</div>
<!--<div style="height:0px; width:740px; border:1px  solid #999; margin:auto; "></div>-->
<br />
<form method="post">
<table align="center" width="95%">
<tr>
<th><h3>Write question:</h3></th>
<th><textarea rows="6" style="margin:auto; resize:none; width:95%" name="question">
</textarea></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="ask" style="margin:auto; margin-top:20px;"/></th>
</tr>

</table>
</form>
<?php

 if(isset($_POST['ask']))
 {
 $question=$_POST['question'];
 $get_email=$_SESSION['email'] ;
 $data= "insert into question(email,question) values('$get_email','$question')";
 $run=mysqli_query($con,$data);
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
