<?php session_start()?>
<!DOCTYPE html>
<html>
<head>

	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Menu</h4>
</div>


<!-- Creates navigation menu-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#">Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#" class="active">Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/ContactUs.php#">Contact Us</a>
	<?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/RegistrationForm.php#">Registration</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/VIPList.php#">VIP List</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/EditMenu.php#">Edit Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Logout.php#">Log Out</a>
	<?php else: ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/LoginForm.php#">Login</a>
	<?php endif; ?>
</div>


<div class="row">
	
	<!--Calls script to insert left side bar content-->
	<?php include 'leftsidebars.php' ?>

	<div class="main">
	
		<!--Calls the php script that pulls the menu items from the database and displays them in a table-->
		<div class="content">
		<?php include 'showmenu.php'?>
		</div>		
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>
	
</div>

</body>
</html>