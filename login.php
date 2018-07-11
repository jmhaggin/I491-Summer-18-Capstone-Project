<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
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
	
session_start();	

$username=mysqli_real_escape_string($con,$_POST['username']);
$pass = $_POST['pswrd'];

$sql = "SELECT * from user where username='$username'";
$result = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($result);

if($result->num_rows>0) 
	{
	while($row = $result->fetch_assoc()) 
		{
		if(password_verify($pass,$row["password"])) 
			{
			$_SESSION['login']='true';
			header("location:http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php");
			}
		else 
			{
			echo "Incorrect password provided. Please return to login form";
			}
		}
	}
else {
	echo "Incorrect usernmae provided. Please return to login form";
}
?>
<br>
<a href="http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/LoginForm.php" style="font-size:40px; font-style:bold; color:black;">Return to Registration Form</a>
</body>
</html>