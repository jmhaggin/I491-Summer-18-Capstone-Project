<?php

//Logs the user out of their session and sends them to the home page of the site
session_start();
unset($_SESSION["login"]);
header("Location: http://cgi.soic.indiana.edu/~jmhaggin/Restaurant/WalnutBistro.php#");

?>