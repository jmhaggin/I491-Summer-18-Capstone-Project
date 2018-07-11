<?php 
	session_start();
	if($_SESSION['login']!=true) {
		die ("You do not have access to this page");
	}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Register</h4>
</div>

<!--Creates Navigation Form-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#">Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#">Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/ContactUs.php#">Contact Us</a>
	<?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/RegistrationForm.php#" class="active">Registration</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/VIPList.php#">VIP List</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/EditMenu.php#">Edit Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Logout.php#">Log Out</a>
	<?php else: ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/LoginForm.php#">Login</a>
	<?php endif; ?>
</div>

<!-- Begin code for main section of page -->
<div class="row">

	
	<!--Calls script to insert left side bar content-->
	<?php include 'leftsidebars.php' ?>
	
	<!--center/main column of the page-->
	<div class="main">
		
		<!-- creates form and necessary inputs -->
		<form action="register.php" method="post" class="registerform">
			<h4 class="formheader">Register a New User</h4>
		
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Username" required>
			
			<label for="pswrd">Password</label>
			<input type="password" name="pswrd" placeholder="Enter Password" required>
			
			<input type="Submit" value="Submit">			
		</form>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>
	
	
</div>

</body>
</html>