<?php
include 'db.connection/db_connection.php';

$blog_id = isset($_POST['blog_id']) ? intval($_POST['blog_id']) : 0;
$lang = isset($_POST['lang']) ? $_POST['lang'] : 'english';

if($lang === 'english'){
    $sql = "SELECT id,title,main_content,full_content,title_image,main_image,video,service FROM blogs WHERE id = ?";
} else {
    $sql = "SELECT id,title,service,main_content,full_content,section1_content,section1_image,main_image,video FROM telugu_blogs WHERE id = ?";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

echo json_encode($blog ? $blog : []);
?>
