<?php 

$db_user = "root";
$db_pass = "";
$db_name = "demo";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);