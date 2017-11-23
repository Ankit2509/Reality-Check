
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0">
	<title>css3menu.com</title>
		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="includes/menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

	

</head>
<?php
//session_start();
include("includes/connect.php");
//$_SESSION['menu'];
 $get_email=$_SESSION['email'] ;

$query="select * from user_info where email='$get_email'";
$execute=mysqli_query($con,$query);
while($row_wise_data=mysqli_fetch_array($execute))
 {
	 $name=$row_wise_data[1];
	 $photos=$row_wise_data[4];
}

?>
<body ontouchstart="" style="background-color:#EBEBEB">
<div id="menu">
<!-- Start css3menu.com BODY section -->
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu" style="width:960px; margin:auto;">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="home.php" style="height:32px;line-height:32px; width:171px;">Read</a></li>
	<li class="topmenu"><a href="ask.php" style="height:32px;line-height:32px;width:171px;"><img src="includes/menu_files/css3menu1/help.png" alt=""/>Ask Question</a></li>
	<li class="topmenu"><a href="answer.php" style="height:32px;line-height:32px;width:171px;"><img src="includes/menu_files/css3menu1/favour.png" alt=""/>Answer</a></li>
	<li class="topmenu"><a href="#" style="height:32px;line-height:32px;width:171px;"><img src="includes/menu_files/css3menu1/contact.png" alt=""/>Notifications</a></li>
	<li class="toplast"><a href="#" style="height:32px;line-height:32px;width:171px;"><span><?php echo "<img src='includes/menu_files/css3menu1/service1.png' alt=''/>"?><?php echo $name;?></span></a>
	<ul>
		<li style="width:171px;"><a href="profile.php">Profile</a></li>
		<li style="width:171px;"><a href="#">your content</a></li>
		<li style="width:171px;"><a href="#">Settings</a></li>
		<li style="width:171px;"><a href="query.php">Contact Us</a></li>
        <li style="width:171px;"><a href="logout.php">Logout</a></li>
	</ul></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">drop down menu</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->


</div>

</body>
</html>
