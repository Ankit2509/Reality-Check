<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trending Posts</title>
<link href="header.css" rel="stylesheet" type="text/css" media="all" />
<link href="trending.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
include("header.php");
?>
<br />
<h1 align="center" style="color:#0033FF; font:'Comic Sans MS', cursive; font-family:'Comic Sans MS', cursive;">Admin-Panel</h1>

<div id="content">
<div id="left">
<form method="post">
<br />
<input type="submit" id="insert" name="insert" value="Insert Post" />
<br /><br />
<input type="submit" id="delete" name="delete" value="Delete Post" />
<br /><br />
<input type="submit" id="update" name="update" value="update Post" />
<br /><br />
<input type="submit" id="trending" name="trending" value="Trending Post" />

</form>
</div>
<form method="post" enctype="multipart/form-data">
<div id="right">
<h2 align="center"> Insert New Post</h2>

<table width="840px" border="1px " align="center" cellpadding="10px" style="border-collapse:collapse">
<tr>
<th>Post Title:</th>
<th align="left"><textarea  name="title" style="width:95%; resize:none; margin-left:5px; " rows="3"></textarea></th>
</tr>
<tr>
<th> Write Content:</th>
<th align="left"><textarea  name="content" style="width:95%; resize:none;margin-left:5px;" rows="10"></textarea></th>
</tr>
<tr>
<th> Upload Image:</th>
<th align="left"><input type="file" name="image" style="margin-left:5px;" /></th>
</tr>
<tr>
<th> Post Date:</th>
<th align="left"><input type="date" name="date" style="margin-left:5px;" /></th>
</tr>
<tr>
<th align="center" colspan="2"><input type="submit" name="post_button" style="margin-left:5px; margin:auto;" id="submit" /></th>
</tr>

</table>
</div>
</form>
</body>
</html>
<?php

if(isset($_POST['insert']))
 {header("location:insert.php");}

?>
<?php
if(isset($_POST['delete']))
 {header("location:delete.php");}
 ?>
 <?php
if(isset($_POST['update']))
 {header("location:update.php");}
?>
<?php
if(isset($_POST['trending']))
 {header("location:includes/trending.php");}
?>
<?php
include("connection.php");
if(isset($_POST['post_button']))
 {
$title=$_POST['title'];
$content=$_POST['content'];
$date=$_POST['date'];
$image=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($temp_name,"uploaded/$image");
	
$query="insert into post(title,content,image,date) values('$title','$content','$image','$date')";
mysqli_query($con,$query);
}

?>