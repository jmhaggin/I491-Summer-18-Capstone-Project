<?php
//creates connection viable to use later, enter own username in line
$con=mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// takes login information and tests if it is successful, if not returns an error 
if (!$con)
	{die("Failed to connect to MySQL: " . mysqli_connect_error()); }
else 
	{ echo "Established Database Connection" ;}
	
//below begins querys by grabbing variables
$var_fname = mysqli_real_escape_string($con,$_POST['fname']);
$var_lname = mysqli_real_escape_string($con,$_POST['lname']);
$var_email = mysqli_real_escape_string($con,$_POST['email']);
$var_dob = mysqli_real_escape_string($con,$_POST['dob']);

//Runs the code inject function on the email submitted in the form
if(IsInjected($var_fname) or IsInjected($var_lname) or IsInjected($var_email) or IsInjected($var_email))
{ 
	die ("You entered a bad email address");
	
}
else {

//runs insert query-Returns confirmation or error message
$sql="INSERT INTO VIPlist(fname,lname,email,dob) VALUES
('$var_fname','$var_lname','$var_email','$var_dob')";
if (mysqli_query($con,$sql)) 
	{echo "1 record added";}
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