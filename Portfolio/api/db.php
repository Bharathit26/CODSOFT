<?php
$host = "localhost";
$user = "root";
$pass = "Route@123";
$db = "Portfolio";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "DB Connection Failed"]));
}
?>
