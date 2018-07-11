<?php session_start()?>
<!DOCTYPE html>
<html>
<head>

	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<!-- <link rel="stylesheet" type="text/css" href="form.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Contact Us</h4>
</div>


<!-- Creates navigation menu-->
<div class="topnav">
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#">Home</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/AboutUs.php#" >About Us</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/News.php#">News</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Events.php#">Events</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Menu.php#">Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/ContactUs.php#" class="active">Contact Us</a>
	<?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/RegistrationForm.php#">Registration</a>
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
	
		<!--Inserts and sizes the map-->
		<div class="mapSection">
			<div id="map" style="height:300px;width:100%;border:1px solid black;"></div>
			
			<!--establishs the view of the area and location of the pin on the map-->
			<script>
				function myMap() {
					var myCenter = new google.maps.LatLng(39.169691,-86.533953);
					var mapCanvas = document.getElementById("map");
					var mapOptions = {center: myCenter, zoom: 15};
					var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker = new google.maps.Marker({position:myCenter});
					marker.setMap(map);
				}
			</script>
			
			<!--Pulls the view of the map from google and runs the script created above of what to show-->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDu6Y5PYI_6myPyY4KBFFOuCTCVZZ9EovM&callback=myMap"></script>
		</div>
		<br>
		
		<div class="EmailContact">
			<!--Creates the form and inputs for a user to contact the restaurant with an email-->
			<h4 class="formheader">Contact Us!</h4>
		
			<form action="EmailContact.php" method="post">
			
				<label for="YourName">Name</label>
				<input type="text" id="Name" name="Name" placeholder="Name" required>
				
				<label for="Subject">Subject</label>
				<input type="text" id="Subject" name="Subject" placeholder="Subject" required>
				
				<label for="YourEmail">Your Email Address</label>
				<input type="email" id="YourEmail" name="YourEmail" placeholder="Your Email Address" required>
				
				<label for="Message">Your Message</label><br>
				<textarea name="Message" rows="5" placeholder="Enter your message here" required></textarea>
				
				<input  type="submit" value="Send">
			</form>
		</div>
		<br>
		<div class="VIPform">
			
			<!--Creates the form and inputs for a user to sign up for the restaurants vip list-->
			<h4 class="formheader">Sign up for our VIP list here!</h4>
		
			<form action="VIPsignup.php" method="post">
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" placeholder="First Name" required>
				
				<label for="name">Last Name</label>			
				<input type="text" id="lname" name="lname" placeholder="Last Name" required>
				
				<label for="fname">Email</label>
				<input type="email" id="email" name="email" placeholder="Email" required>
				
				<label for="fname">Date of Birth</label>
				<input type="date" id="dob" name="dob" placeholder="Date of Birth" min="1900-01-01" max="2018-01-01" required>
				
				<input  type="submit" value="Submit">
			</form>
		</div>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>
	
</div>


</body>
</html>