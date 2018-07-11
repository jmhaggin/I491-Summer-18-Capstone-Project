<?php 

// Create connection
$con = mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>

<div class="header">
	<h2>The Bistro on Walnut</h2>
	<h4>VIP Search Results</h4>
</div>

<div class="row">
	
	<!--Calls script to insert left side bar content-->
	<?php include 'leftsidebars.php' ?>

	<div class="main">
	
		<div class="content">
		
		<?php 
		
		$var_fname = mysqli_real_escape_string($con,$_POST['searchfname']);
		$var_lname = mysqli_real_escape_string($con,$_POST['searchlname']);
		
		//Runs the code inject function on the email submitted in the form
		if(IsInjected($var_fname) or IsInjected($var_lname))
		{ 
			die ("You entered a bad email address");
			
		}
		else {
		
		$sql = "SELECT VIPid, fname, lname, email, dob from VIPlist where fname='$var_fname' and lname = '$var_lname'";

		$result = mysqli_query($con, $sql);
		$num_rows = mysqli_num_rows($result);
		
		if ($result->num_rows > 0) {
		echo "<table><tr><th class=\"VIPid\">VID ID</th><th class=\"VIPfname\">First Name</th><th class=\"VIPlname\">Last Name</th><th class=\"VIPemail\">Email Address</th><th class=\"VIPdob\">Date of Birth</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td class=\"VIPid\">".$row["VIPid"]."</td><td class=\"VIPfname\">".$row["fname"]."</td><td class=\"VIPlname\">".$row["lname"]."</td><td class=\"VIPemail\">".$row["email"]."</td><td class=\"VIPdob\">".$row["dob"]."</td></tr>";

		}
			echo "</table>";
		}
		else {echo "No records match your search criteria";}}
		
		//Function to check if the email submitted in the form contains malicious code
	function IsInjected($str)
	{
		$injections=array('(\n+)',
			'(\r+)',
			'(\t+)',
			'(%0A+)',
			'(%0D+)',
			'(%08+)',
			'(%09+)');
		
		$inject= join('|',$injections);
		$inject= "/$inject/i";
		if(preg_match($inject,$str)) {
			return true;}
		else{
			return false;}
	}
		
		?>

		</div>
		<br>
		<button onclick="goBack()">Return to search</button>
	</div>
	
	<!--Calls script to insert right side bar content-->
	<?php include 'rightsidebar.php'?>
	
	
	<script>
		function goBack() {
			window.history.back();
		}
	</script>

</body>
</html>

