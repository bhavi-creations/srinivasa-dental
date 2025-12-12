<?php
// update_reaction.php
header('Content-Type: application/json');

// Database connection 
// Assuming db_connection.php sets $conn, $servername, $username, $password, $dbname
include './db.connection/db_connection.php'; 

// Check if connection was successful
if (!isset($conn) || $conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed at PHP script start.']);
    exit;
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // This is the line generating your error. If you see this, the browser sent a GET request.
    echo json_encode(['success' => false, 'message' => 'Invalid request method. (Must be POST)']);
    exit;
}

// Get and sanitize input
$blog_id = isset($_POST['blog_id']) ? intval($_POST['blog_id']) : 0;
$reaction_type = isset($_POST['reaction_type']) ? $_POST['reaction_type'] : '';

// Data Validation
if ($blog_id <= 0 || !in_array($reaction_type, ['like', 'dislike'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid blog ID or reaction type provided.']);
    exit;
}

// Database Update
$column_to_update = ($reaction_type === 'like') ? 'likes' : 'dislikes';

// Increment the corresponding column
$update_sql = "UPDATE blogs SET $column_to_update = $column_to_update + 1 WHERE id = ?";
$stmt = $conn->prepare($update_sql);

if ($stmt === false) {
    echo json_encode(['success' => false, 'message' => 'SQL Prepare failed: ' . $conn->error]);
    exit;
}

$stmt->bind_param("i", $blog_id);

if ($stmt->execute()) {
    $stmt->close();
    
    // Fetch New Counts
    $stmt = $conn->prepare("SELECT likes, dislikes FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($new_likes, $new_dislikes);
    $stmt->fetch();
    $stmt->close();

    // Send successful response
    echo json_encode([
        'success' => true,
        'likes' => $new_likes,
        'dislikes' => $new_dislikes,
        'message' => 'Count updated successfully.'
    ]);
} else {
    // Send error response if execution failed
    echo json_encode([
        'success' => false,
        'message' => 'Database execution failed: ' . $stmt->error
    ]);
}

$conn->close();
?>