<?php

$server = "localhost";
$username = "root";
$password = "password";
$db = "GROUP1";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
