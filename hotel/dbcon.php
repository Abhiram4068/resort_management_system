
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resortmanagement";
$port = 3308;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 