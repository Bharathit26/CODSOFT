<?php
header("Content-Type: application/json");
include "db.php";

$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

if ($title === "" || $content === "") {
    echo json_encode(["status" => "error", "message" => "All fields required"]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO Blogs (Title, Content) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $content);
$stmt->execute();

echo json_encode(["status" => "success", "message" => "Blog created successfully"]);
?>
