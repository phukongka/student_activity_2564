<?php
$servername = "localhost";
$username = "root";
$password = "oak_123456";
$dbname = "advisor_ctc";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>