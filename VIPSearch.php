<!DOCTYPE html>
<html>
<head>

	<title>VIP Customer List</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h2>The Bistro on Walnut</h2>
	<h4>Manage VIP Customer List</h4>
</div>

<!-- Creates navigation menu-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#" >Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#">Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/ContactUs.php#">Contact Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Login.php#">Login</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/VIPList.php#" class="active">VIP List</a>
</div>

<div class="row">
	
	<!--Calls script to insert left side bar content-->
	<?php include 'leftsidebars.php' ?>
	
	<div class="main">
		<div class="content">
			<!-- calls php script that querys the menu table in the database and prints the results as a menu table-->
			<?php include 'showviplist.php'?>
		</div>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>

</body>
</html>