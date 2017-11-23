<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="admin_page.css" rel="stylesheet" type="text/css" />
<link href="includes/header.css" rel="stylesheet" type="text/css" media="all" />
<link href="includes/insert.css" rel="stylesheet" type="text/css" />
<link href="includes/delete.css" rel="stylesheet" type="text/css" />
<link href="includes/update.css" rel="stylesheet" type="text/css" />
<link href="includes/trending.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php
include("includes/header.php");
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
<div id="right">
</div>

</div>

</body>
</html>
<?php

if(isset($_POST['insert']))
 {header("location:includes/insert.php");}

?>
<?php
if(isset($_POST['delete']))
 {header("location:includes/delete.php");}
 ?>
 <?php
if(isset($_POST['update']))
 {header("location:includes/update.php");}
?>
<?php
if(isset($_POST['trending']))
 {header("location:includes/trending.php");}
?>