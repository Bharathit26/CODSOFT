<?php
header("Content-Type: application/json");
include "db.php";

$id = $_GET['id'];

$conn->query("DELETE FROM Blogs WHERE Id = $id");

echo json_encode(["status" => "success"]);
?>
