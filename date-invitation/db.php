<?php

mysqli_report(MYSQLI_REPORT_OFF);

$host = "sql307.infinityfree.com";
$username = "if0_43009612";
$password = "0610Prakash";
$database = "if0_43009612_date_invitation";

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_error) {
    die("DATABASE CONNECTION ERROR: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>