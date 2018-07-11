<!DOCTYPE html>
<html>
<head>
	
	<title>Menu Item Edit</title>
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
$var_attribute = mysqli_real_escape_string($con,$_POST['attribute']);
$var_newinfo = mysqli_real_escape_string($con,$_POST['newinfo']);


//Runs the code inject function on the email submitted in the form
if(IsInjected($var_itemname) or IsInjected($var_attribute) or IsInjected($var_newinfo))
{ 
	die ("You entered a bad email address");
	
}
else {
if (($_attribute=='price') and (preg_match("\d{1,3}\.\d{2}$",$var_newinfo) {
	//run query
	$sql="update menu set $var_attribute='$var_newinfo' where name='$var_itemname'";

	if (mysqli_query($con,$sql)) 
		{echo "Item successfully updated";}
	Else
		{ die('SQL Error: ' . mysqli_error($con)); }}
elseif (preg_match("[A-Za-z-()\h\.]{1,200}",$var_newinfo) {
	//run query
	$sql="update menu set $var_attribute='$var_newinfo' where name='$var_itemname'";

	if (mysqli_query($con,$sql)) 
		{echo "Item successfully updated";}
	Else
		{ die('SQL Error: ' . mysqli_error($con)); }}
else {
	echo "The new information you entered did not match the required pattern for that item attribute. Please return to the edit menu page and retry your entry";}

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