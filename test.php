<?php
$servername = "mysql.hostinger.co.uk";
$database = "u993426836_7vHo0";
$username = "u993426836_dJziZ";
$password = "3tec2024Proz";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully"; 

mysqli_close($conn);
?>