<?php
header("Content-Type: application/json");
include "db.php";

$id = $_GET['id'] ?? 0;

$result = $conn->query("SELECT * FROM Blogs WHERE Id = $id");
echo json_encode($result->fetch_assoc());
?>
