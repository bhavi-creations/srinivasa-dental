<?php
include '../../db.connection/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // BLOG ID
    $id = intval($_POST['id']);

    // TEXT DATA
    $title = $_POST['title'];
    $telugu_title = $_POST['telugu_title'];
    $service = $_POST['service'];

    $main_content = $_POST['main_content'];
    $telugu_main_content = $_POST['telugu_main_content'];
    $full_content = $_POST['full_content'];
    $telugu_full_content = $_POST['telugu_full_content'];

    // HASHTAGS & KEYPOINTS (convert to JSON)
    $hashtags = array_map('trim', explode(',', $_POST['hashtags']));
    $keypoints = array_map('trim', explode(',', $_POST['keypoints']));

    $hashtags_json = json_encode($hashtags);
    $keypoints_json = json_encode($keypoints);

    // OLD FILES
    $old_main_image = $_POST['old_main_image'];
    $old_section1_image = $_POST['old_section1_image'];
    $old_video = $_POST['old_video'];

    // UPLOAD PATHS
    $imagePath = "../../uploads/photos/";
    $videoPath = "../../uploads/videos/";

    // ------------------------------------
    // MAIN IMAGE UPLOAD
    // ------------------------------------
    if (!empty($_FILES['main_image']['name'])) {
        $main_image = time() . "_" . $_FILES['main_image']['name'];
        move_uploaded_file($_FILES['main_image']['tmp_name'], $imagePath . $main_image);

        if ($old_main_image && file_exists($imagePath . $old_main_image)) {
            unlink($imagePath . $old_main_image);
        }
    } else {
        $main_image = $old_main_image;
    }

    // ------------------------------------
    // SECTION 1 IMAGE
    // ------------------------------------
    if (!empty($_FILES['section1_image']['name'])) {
        $section1_image = time() . "_sec1_" . $_FILES['section1_image']['name'];
        move_uploaded_file($_FILES['section1_image']['tmp_name'], $imagePath . $section1_image);

        if ($old_section1_image && file_exists($imagePath . $old_section1_image)) {
            unlink($imagePath . $old_section1_image);
        }
    } else {
        $section1_image = $old_section1_image;
    }

    // ------------------------------------
    // VIDEO UPLOAD
    // ------------------------------------
    if (!empty($_FILES['video']['name'])) {
        $video = time() . "_" . $_FILES['video']['name'];
        move_uploaded_file($_FILES['video']['tmp_name'], $videoPath . $video);

        if ($old_video && file_exists($videoPath . $old_video)) {
            unlink($videoPath . $old_video);
        }
    } else {
        $video = $old_video;
    }

    // ------------------------------------
    // UPDATE QUERY
    // ------------------------------------
    $stmt = $conn->prepare("
        UPDATE blogs SET
            title=?,
            telugu_title=?,
            service=?,
            main_content=?,
            telugu_main_content=?,
            full_content=?,
            telugu_full_content=?,
            main_image=?,
            video=?,
            section1_image=?,
            hashtags=?,
            keypoints=?
        WHERE id=?
    ");

    $stmt->bind_param(
        "ssssssssssssi",
        $title,
        $telugu_title,
        $service,
        $main_content,
        $telugu_main_content,
        $full_content,
        $telugu_full_content,
        $main_image,
        $video,
        $section1_image,
        $hashtags_json,
        $keypoints_json,
        $id
    );

    if ($stmt->execute()) {
        echo "<script>alert('Blog Updated Successfully'); window.location='allblog.php';</script>";
    } else {
        echo "Error Updating Blog: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
