<?php

//Recovers and stores variables from submission form on the contact page
$name= $_POST['Name'];
$sender_email= $_POST['YourEmail'];
$subject= $_POST['Subject'];

//Runs the code inject function on the email submitted in the form
if(IsInjected($name) or IsInjected($sender_email) or IsInjected($subject))
{ 
	echo "You entered a bad email address";
	exit;
}
else {

//Builds the message of the email for both the sender and the company recieving
$message= $name. " submitted the following message:". "\n\n" .$_POST['Message'];
$message2= "Here is a copy of the message you submitted to the Bistro on Walnut:" . "\n\n". $_POST['Message']; 

//Puts together the email to be sent and returns a message to the user if the email was sent or not
if (mail("BistroonWalnut@gmail.com",$subject,$message,$sender_email) and mail($sender_email,"Copy of your contact submission to the Bistro on Walnut",$message2))
{
	header("Location:http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#");
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