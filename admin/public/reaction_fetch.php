<?php
include "db.connection/db_connection.php";

$blog_id = $_POST['blog_id'];

$sql_like = "SELECT COUNT(*) AS like_count FROM blog_reactions WHERE blog_id='$blog_id' AND reaction='like'";
$sql_dislike = "SELECT COUNT(*) AS dislike_count FROM blog_reactions WHERE blog_id='$blog_id' AND reaction='dislike'";

$like = $conn->query($sql_like)->fetch_assoc()['like_count'];
$dislike = $conn->query($sql_dislike)->fetch_assoc()['dislike_count'];

echo json_encode([
    'likes' => $like,
    'dislikes' => $dislike
]);
?>
