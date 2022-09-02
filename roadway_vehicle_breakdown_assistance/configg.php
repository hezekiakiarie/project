<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { //  Checking Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>