<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "srinivasa"; // change as per your DB
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_id   = intval($_POST['blog_id']);
    $user_name = $conn->real_escape_string($_POST['user_name']);
    $user_email = $conn->real_escape_string($_POST['user_email']);
    $comment   = $conn->real_escape_string($_POST['comment']);

    $sql = "INSERT INTO blog_comments (blog_id, user_name, user_email, comment) 
            VALUES ('$blog_id', '$user_name', '$user_email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Comment added successfully!'); window.history.back();</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
