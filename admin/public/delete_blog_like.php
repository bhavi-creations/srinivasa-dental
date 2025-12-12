<?php
include 'db_connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM blog_likes WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: view_blog_likes.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
