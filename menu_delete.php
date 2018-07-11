<!DOCTYPE html>
<html>
<head>
	
	<title>Menu Item Delete</title>
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	<!-- <link rel="stylesheet" type="text/css" href="form.css"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>

<div class="header">
	<h2>The Bistro on Walnut</h2>
</div>

<?php
//creates connection viable to use later, enter own username in line
$con=mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// takes login information and tests if it is successful, if not returns an error 
if (!$con)
	{die("Failed to connect to MySQL: " . mysqli_connect_error()); }


//below begins querys by grabbing variables
$var_itemname = mysqli_real_escape_string($con,$_POST['itemname']);

//Runs the code inject function on the email submitted in the form
if(IsInjected($var_fname) or IsInjected($var_lname))
{ 
	die ("You entered a bad email address");
	
}
else {

//run query
$sql="DELETE FROM menu
WHERE name='$var_itemname'";
if (mysqli_query($con,$sql)) 
	{header('Location: http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/EditMenu.php');}
Else
	{ die('SQL Error: ' . mysqli_error($con)); }
mysqli_close($con);
}

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
<br>
<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/EditMenu.php">Return to menu edit page</a>
</body>
</html>