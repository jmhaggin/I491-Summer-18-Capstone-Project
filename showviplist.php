<?php

// Create connection
$con = mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * from VIPlist";

	if ($_GET['orderBy'] == 'VIPid')
	{
		$sql .= " ORDER BY VIPid";
	}
	elseif ($_GET['orderBy'] == 'lname')
	{
		$sql .= " ORDER BY lname";
	}
	elseif ($_GET['orderBy'] == 'email')
	{
		$sql .= " ORDER BY email";
	}
	elseif($_GET['orderBy'] == 'dob')
	{
		$sql .= " ORDER BY dob";
	}

$result = mysqli_query($con, $sql);	
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
	
	echo "<table><tr><th class=\"VIPid\"><a href=\"?orderBy=VIPid\">VIP ID</a></th><th class=\"VIPname\"><a href=\"?orderBy=lname\">Name</a></th><th class=\"VIPemail\"><a href=\"?orderBy=email\">Email</a></th><th class=\"VIPdob\"><a href=\"?orderBy=dob\">Date of Birth</a></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"VIPid\">".$row["VIPid"]."</td><td class=\"VIPname\">".$row["lname"].", ".$row["fname"]."</td><td class=\"VIPemail\">".$row["email"]."</td><td class=\"VIPdob\">".$row["dob"]."</td></tr>";
	}
    echo "</table>";
} 

?>
