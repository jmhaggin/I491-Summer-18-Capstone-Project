<?php session_start()?>
<!DOCTYPE html>
<html>
<head>

	<title>Restaurant Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	
</head>

<body>

<!--Creates header for the website and the title of the page-->
<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Welcome</h4>
</div>

<!-- Creates navigation menu-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#" class="active">Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#">Menu</a>
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
	
		<div class="content">
		<!--Creates the row of images in the main section of the page-->
		<div class="row">
			<div class="imgcolumn">
				<img src="mainpageimg2.jpg" alt="Patrons in the restaurant enjoying a glass of wine" style="width:100%;">
			</div>
			
			<div class="imgcolumn">
				<img src="mainpageimg1.jpg" alt="Waiter serving our Toss Salad and Crostini Starter" style="width:100%;">
			</div>
			
			<div class="imgcolumn">
				<img src="mainpageimg3.jpg" alt="View of tables in the bar section of the restaurant" style="width:100%;">
			</div>
		</div>
		
		<p>The Bistro on Walnut is a fine dining experience in a semi-casual setting. We are located on North Walnut Street just two blocks north of Bloomington's Historic Courthouse Square District. Our close proximity to both downtown Bloomington's main drag and the heart of the Indiana Univsity-Bloomington campus have made our restaurant a popular spot for both local residents and visitors of the university. We have been located here for 20+ years and look forward to serving the next generation of Bloomington residents and visitors. Our restaurant has a serene main dining section along with a more lively bar area complete with TV's and room to stand and have a drink with friends. Come in today to try our menu of delicious, locally sourced meals or to catch the game in the bar while having a drink with your friends. We look forward to providing you award winning service and a taste of something you will never forget!</p>
		<br><br>
		
		</div>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>
	
</div>
		


</body>
</html>