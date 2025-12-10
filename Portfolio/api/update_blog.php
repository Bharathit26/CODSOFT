<?php
header("Content-Type: application/json");
include "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$stmt = $conn->prepare("UPDATE Blogs SET Title=?, Content=?, Updated_at=NOW() WHERE Id=?");
$stmt->bind_param("ssi", $title, $content, $id);
$stmt->execute();

echo json_encode(["status" => "success"]);
?>
