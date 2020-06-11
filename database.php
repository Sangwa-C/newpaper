<?php
$servername = "localhost";
$username = "root";
$password = "";
$tableNews = "news";


// Create connection
$yes = new mysqli($servername, $username, $password, $tableNews);

// Check connection
if ($yes->connect_error) {
  die("Connection failed: " . $yes->connect_error);
}
// echo "Connected successfully"; 


?>