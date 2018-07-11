<?php 
	session_start();
	if($_SESSION['login']!=true) {
		die ("You do not have access to this page");
	}
?>

<!DOCTYPE html>
<html>
<head>

	<title>VIP Customer List</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Manage VIP Customer List</h4>
</div>

<!-- Creates navigation menu-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#">Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#">Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/ContactUs.php#">Contact Us</a>
	<?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/RegistrationForm.php#">Registration</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/VIPList.php#" class="active">VIP List</a>
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
		<div class="content">
			<!--Calls php script that creates list of all registered VIP members-->
			<?php include 'showviplist.php'?>
		</div>
		<br>
		
		<!--Creates the forms and inputs that enable an admin to search the registered VIPS by name or DOB-->
		<form action="searchvipbyname.php" method="post" class="vipsearchform">
		
			<h4 class="formheader">Search by VIP Name</h4>
		
			<label for="searchfname">First Name</label>
			<input type="text" name="searchfname" placeholder="Enter first name">
				
			<label for="searchlname">Last Name</label>
			<input type="text" name="searchlname" placeholder="Enter last name">
			
			<input type="submit" value="Search">
		</form>
		<br>
		<form action="searchvipbydob.php" method="post" class="vipsearchform">
		
			<h4 class="formheader">Search by VIP Date of Birth</h4>
		
			<label for="searchdob">Date of Birth</label>
			<input type="date" name="searchdob">
			
			<input type="submit" value="Search">
		</form>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>

</body>
</html>
