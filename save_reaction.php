<?php
include "./db.connection/db_connection.php";

// Check POST
if(!isset($_POST['blog_id']) || !isset($_POST['reaction'])) {
    echo "Invalid request!";
    exit;
}

$blog_id = $_POST['blog_id'];
$reaction = $_POST['reaction'];
$device_ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d");

// Check if this device already reacted today
$check_sql = "SELECT * FROM blog_reactions 
              WHERE blog_id='$blog_id' 
              AND device_ip='$device_ip' 
              AND created_at='$date'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    // Update previous reaction
    $update_sql = "UPDATE blog_reactions 
                   SET reaction='$reaction' 
                   WHERE blog_id='$blog_id' 
                   AND device_ip='$device_ip' 
                   AND created_at='$date'";
    if($conn->query($update_sql)){
        echo "Your reaction updated ✔";
    } else {
        echo "Failed to update!";
    }
} else {
    // Insert new reaction
    $insert_sql = "INSERT INTO blog_reactions(blog_id, device_ip, reaction, created_at)
                   VALUES('$blog_id', '$device_ip', '$reaction', '$date')";
    if($conn->query($insert_sql)){
        echo "Thank you! Your reaction saved ✔";
    } else {
        echo "Failed to save reaction!";
    }
}

$conn->close();
?>
