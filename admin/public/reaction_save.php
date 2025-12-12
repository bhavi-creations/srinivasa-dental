<?php
include "db.connection/db_connection.php";

$blog_id = $_POST['blog_id'];
$reaction = $_POST['reaction'];
$device_ip = $_SERVER['REMOTE_ADDR'];

// Check if already reacted
$check = "SELECT * FROM blog_reactions WHERE blog_id='$blog_id' AND device_ip='$device_ip'";
$check_res = $conn->query($check);

if ($check_res->num_rows > 0) {
    echo "Already reacted from this device!";
    exit;
}

// Insert Reaction
$sql = "INSERT INTO blog_reactions (blog_id, device_ip, reaction) 
        VALUES ('$blog_id', '$device_ip', '$reaction')";

if ($conn->query($sql)) {
    echo "Reaction submitted!";
} else {
    echo "Error!";
}
?>
