<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "srinivasa"; 
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blog_id    = intval($_POST['blog_id']);
    $user_name  = trim($conn->real_escape_string($_POST['user_name']));
    $user_email = trim($conn->real_escape_string($_POST['user_email']));
    $comment    = trim($conn->real_escape_string($_POST['comment']));

    // Insert new comment
    $sql = "INSERT INTO blog_comments (blog_id, user_name, user_email, comment, likes, dislikes) 
            VALUES ('$blog_id', '$user_name', '$user_email', '$comment', 0, 0)";

    if ($conn->query($sql) === TRUE) {
        // ✅ Direct redirect to service_detsils.php with blog_id
        header("Location: service_detsils.php?id=" . $blog_id);
        exit();
    } else {
        die("❌ SQL Error: " . $conn->error);
    }
}
?>
