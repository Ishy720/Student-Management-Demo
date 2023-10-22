<?php

//Server configuration
$host = "localhost";
$username = "root";
$password = "";
$dbname = "member_management_demo";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>