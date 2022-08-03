<?php



function db() {
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "razaz";
    
$conn = new mysqli($host, $user, $pass, $db);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn; 
}












