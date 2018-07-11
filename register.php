<!DOCTYPE html>
<html>
<head>

	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bistrostyle.css">
	
</head>

<body>

<div class="header">
	<h1>The Bistro on Walnut</h1>
</div>
<br>
<?php

// Create connection
$con = mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());}
else {echo "connection succesful";}


$name = mysqli_real_escape_string($con,$_POST['username']);
$pass = $_POST['pswrd'];
$passcode =  password_hash($pass, PASSWORD_DEFAULT);

//Runs the code inject function on the email submitted in the form
if(IsInjected($name) or IsInjected($pass))
{ 
	die ("You entered a bad email address");
	
}
else {
	
$usernamecheck = "select * from user where username='$name'";
$usernamecheckresult = mysqli_query($con, $usernamecheck);
$num_rows = mysqli_num_rows($usernamecheckresult);

if($usernamecheckresult->num_rows>0) {
    echo "Username already exists. Please return and enter a new name";}
else {
	$sql = "INSERT INTO user (username,password) VALUES(?,?)";
	$stmt = $con->prepare($sql);
	$stmt->bind_param('ss',$name,$passcode);
	$stmt->execute();
	$stmt->close();
	$con->close();
echo "	Registration successful";	}}
	
	
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
<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/RegistrationForm.php" style="font-size:40px; font-style:bold; color:black;">Return to Registration Form</a>
</body>
</html>

