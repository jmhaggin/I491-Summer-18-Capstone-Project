<?php
// Create connection
$con = mysqli_connect("db.soic.indiana.edu","i491u18_jmhaggin","my+sql=i491u18_jmhaggin","i491u18_jmhaggin");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2>Appetizers</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='STARTER' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

echo "<h2>Salads</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='SALAD' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

echo "<h2>Sandwiches</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='SANDWICH' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

echo "<h2>Entrees</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='ENTREE' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

echo "<h2>Desserts</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='DESSERT' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

echo "<h2>Drinks</h2>";
$sql = 
"SELECT name, price, description
from menu
where category='DRINK' and status = 'ON'";

$result = mysqli_query($con, $sql);
$num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
    echo "<table><tr><th class=\"menuitemname\">Name</th><th class=\"menuitemdesc\">Description</th><th class=\"menuitemprice\">Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class=\"menuitemname\">".$row["name"]."</td><td class=\"menuitemdesc\">".$row["description"]."</td><td class=\"menuitemprice\">"."$".$row["price"]."</td></tr>";

	}
    echo "</table>";
} 

mysqli_close($conn);

?>