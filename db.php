<?php

$host = "localhost";
$db_user = "naima.aloula";
$db_pass = "";
$db_name = "ecommerce_2026A_naima_aloula";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>