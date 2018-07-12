<!--starts session to check if user is logged in-->
<?php 
	session_start();
	if($_SESSION['login']!=true) {
		die ("You do not have access to this page");
	}
?>


<!DOCTYPE html>
<html>
<head>

	<title>Edit Menu</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
	<h4>Edit menu items</h4>
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
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/VIPList.php#">VIP List</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/EditMenu.php#" class="active">Edit Menu</a>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/Logout.php#">Log Out</a>
	<?php else: ?>
	<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/LoginForm.php#">Login</a>
	<?php endif; ?>
</div>

<div class="row">
	
	<!--Calls script to insert left side bar content-->
	<?php include 'leftsidebars.php' ?>

	<div class="main">
	
	<!--creates all forms and the necessary inputs involved in them -->
	<div class="menuform">
		
			<h4 class="formheader">Add New Menu Item</h4>
			
			
			<form action="menu_add.php" method="post">
				<label for="category">Item Category</label>
				<select name="category">
					<option value="STARTER">Starters</option>
					<option value="DRINK">Drinks</option>
					<option value="SANDWICH">Sandwiches</option>
					<option value="SALAD">Salads</option>
					<option value="ENTREE">Entrees</option>
					<option value="DESSERT">Desserts</option>
				</select>
				<br><br>
				<label for="name">Item Name</label>
				<input type="text" name="name" placeholder="Item Name" pattern="([A-Za-z\h\.]{1,200})" required>
				<!--added in validation around here-->
				<label for="price">Item Price</label>
				<input type="text" name="price" placeholder="Item Price" pattern="(\d{1,3})+(\.\d{2})$" title="Must be formatted like a price: up 3 letters, a period, followed by exactly 2 numbers" required>
				
				<label for="description">Item Description</label>
				<input type="text" name="description" placeholder="Item Description" pattern="([A-Za-z\h\.]{1,200})" required>
				
				<label for="status">Item Status</label>
				<input type="radio" name="status" value="ON" checked="Checked">ON <input type="radio" name="status" value="OFF">OFF	
				<br>
				<input type="submit" value="Insert Item">
			</form>
		</div>
		<br>
		<div class="menuform">
			
			<h4 class="formheader">Edit Menu Item</h4>
			
			<form action="menu_edit.php" method="post">
				<label for="itemname">Item to Edit</label>
				<?php include 'menuoption.php'?>
				<br><br>
				
				<label for="attribute">Attribute To Edit</label>
				<select name="attribute">
					<option value="name">Name</option>
					<option value="price">Price</option>
					<option value="description">Description</option>
					<option value="category">Category</option>
					<option value="status">Status</option>
				</select>
				<br><br>
				
				<label for="newinfo">New Information. If editting a price please enter up to 3 numbers, followed by a period, followed by exactly two more numbers. If editting item category please enter one of the following (starter,drink,sandwich,salad,entree,dessert). Anything else enter only letters/spaces or the follwing 4 characters:-().</label>
				<input type="text" name="newinfo" placeholder="New Information" pattern="\d{1,3})\.\d{2}|[A-Za-z-()\h\.]{1,200}" required>
				
				<input type="submit" value="Edit Item">
			</form>
		</div>
		<br>
		<div class="menuform">
		
			<form action="menu_delete.php" method="post">
			
				<h4 class="formheader">Delete Menu Item</h4>
				
				<label for="itemname">Item to delete</label>
				<?php include 'menuoption.php'?>
				<br><br>
				
				<input type="submit" value="Delete Item">
			</form>
		</div>
	
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>

</div>

</body>
</html>