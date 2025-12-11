<?php
include __DIR__ . '/../../db.connection/db_connection.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $row = $conn->query("SELECT * FROM telugu_blogs WHERE id=$id")->fetch_assoc();

    // Delete main image
    if (!empty($row['main_image'])) {
        $mainImagePath = __DIR__ . '/../../uploads/photos/' . $row['main_image'];
        if (file_exists($mainImagePath)) unlink($mainImagePath);
    }

    // Delete section1 image
    if (!empty($row['section1_image'])) {
        $section1ImagePath = __DIR__ . '/../../uploads/photos/' . $row['section1_image'];
        if (file_exists($section1ImagePath)) unlink($section1ImagePath);
    }

    // Delete video
    if (!empty($row['video'])) {
        $videoPath = __DIR__ . '/../../uploads/videos/' . $row['video'];
        if (file_exists($videoPath)) unlink($videoPath);
    }

    // Delete the row from database
    $conn->query("DELETE FROM telugu_blogs WHERE id=$id");

    // Redirect to the list page
    header('Location: list_telugu_blogs');
    exit;
} else {
    echo "Invalid Blog ID.";
}
?>
