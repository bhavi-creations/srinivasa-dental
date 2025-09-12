<?php
// ✅ Show errors in live (remove after testing)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";

// Check if running locally or live
if ($_SERVER['SERVER_NAME'] == "localhost") {
    // Localhost credentials
    $user = "root";
    $pass = "";
    $db   = "srinivasa";
} else {
    // Live server credentials (update with your cPanel DB name + user + pass)
    $user = "srinivasadentalkakinada";
    $pass = "sTNcxCDh5cdERAZ";
    $db   = "srinivasadentalkakinada";
}

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
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
        echo "<script>
                alert('✅ Comment added successfully!');
                window.location.href = document.referrer;
              </script>";
    } else {
        echo "<script>alert('❌ SQL Error: " . addslashes($conn->error) . "');</script>";
    }
}
?>
