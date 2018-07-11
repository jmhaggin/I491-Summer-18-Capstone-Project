<?php
//creates connection viable to use later, enter own username in line
$con=mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// takes login information and tests if it is successful, if not returns an error 
if (!$con)
	{die("Failed to connect to MySQL: " . mysqli_connect_error()); }
	
$sql = "SELECT name FROM menu";
$result = $con->query($sql);

echo "<select name='itemname'>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><option value='".$row['name']."'>".$row['name']. "</option>";
    }
}
echo "</select>";

mysqli_close($con);
?>

