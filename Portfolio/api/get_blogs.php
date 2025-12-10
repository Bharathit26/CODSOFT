<?php
header("Content-Type: application/json");
include "db.php";

$result = $conn->query("SELECT * FROM Blogs ORDER BY Created_at DESC");

$blogs = [];
while ($row = $result->fetch_assoc()) {
    $blogs[] = $row;
}

echo json_encode($blogs);
?>
