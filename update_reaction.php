<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "srinivasa");
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "DB connection failed"]));
}

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_id = intval($_POST['comment_id']);
    $type = $_POST['type'];

    if ($type === "like") {
        $sql = "UPDATE blog_comments SET likes = likes + 1 WHERE id = $comment_id";
    } elseif ($type === "dislike") {
        $sql = "UPDATE blog_comments SET dislikes = dislikes + 1 WHERE id = $comment_id";
    } else {
        echo json_encode(["success" => false, "message" => "Invalid type"]);
        exit;
    }

    if ($conn->query($sql)) {
        // Fetch updated counts
        $res = $conn->query("SELECT likes, dislikes FROM blog_comments WHERE id = $comment_id");
        $row = $res->fetch_assoc();

        echo json_encode([
            "success" => true,
            "likes" => $row['likes'],
            "dislikes" => $row['dislikes']
        ]);
    } else {
        echo json_encode(["success" => false, "message" => $conn->error]);
    }
}
?>
