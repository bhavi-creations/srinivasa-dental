<?php
include __DIR__ . '/../../db.connection/db_connection.php';

// Check if 'id' exists in URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    echo "Invalid blog ID.";
    exit;
}

// Fetch blog data
$row = $conn->query("SELECT * FROM telugu_blogs WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $service = $_POST['service'];
    $main_content = $_POST['main_content'];
    $full_content = $_POST['full_content'];
    $section1_content = $_POST['section1_content'];

    // Upload function with folder distinction
    function uploadFile($fileInput, $existingFile = null, $type = 'image') {
        $uploadDir = $type === 'video' ? '../../uploads/videos/' : '../../uploads/photos/';
        if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] == 0) {
            $filename = time() . '_' . basename($_FILES[$fileInput]['name']);
            $target = $uploadDir . $filename;
            if (move_uploaded_file($_FILES[$fileInput]['tmp_name'], $target)) {
                if ($existingFile && file_exists($uploadDir . $existingFile)) unlink($uploadDir . $existingFile);
                return $filename;
            }
        }
        return $existingFile;
    }

    $main_image = uploadFile('main_image', $row['main_image'], 'image');
    $video = uploadFile('video', $row['video'], 'video');
    $section1_image = uploadFile('section1_image', $row['section1_image'], 'image');

    $stmt = $conn->prepare("UPDATE telugu_blogs 
        SET title=?, service=?, main_content=?, full_content=?, section1_content=?, section1_image=?, main_image=?, video=? 
        WHERE id=?");
    $stmt->bind_param("ssssssssi", $title, $service, $main_content, $full_content, $section1_content, $section1_image, $main_image, $video, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Blog updated successfully'); window.location.href='list_telugu_blogs';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Telugu Blog</title>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
    <?php include 'sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'navbar.php'; ?>

            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Edit Telugu Blog</h1>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-success">Edit Blog Content</h6>
                    </div>
                    <div class="card-body">
                        <form id="editblogform" method="POST" enctype="multipart/form-data">
                            <!-- Title -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Title</label>
                                <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($row['title']) ?>" required>
                            </div>

                            <!-- Service -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Service</label>
                                <input type="text" name="service" class="form-control" value="<?= htmlspecialchars($row['service']) ?>" required>
                            </div>

                            <!-- Main Content -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Main Content</label>
                                <div id="mainEditor" style="height:200px;"><?= $row['main_content'] ?></div>
                                <input type="hidden" name="main_content" id="mainContent">
                            </div>

                            <!-- Full Content -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Full Content</label>
                                <div id="fullEditor" style="height:200px;"><?= $row['full_content'] ?></div>
                                <input type="hidden" name="full_content" id="fullContent">
                            </div>

                            <!-- Section 1 Content -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Section 1 Content</label>
                                <div id="sectionEditor1" style="height:150px;"><?= $row['section1_content'] ?></div>
                                <input type="hidden" name="section1_content" id="section1Content">
                            </div>

                            <!-- Main Image -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Main Image</label>
                                <input type="file" name="main_image" class="form-control">
                                <?php if($row['main_image']): ?>
                                    <img src="../../uploads/photos/<?= $row['main_image'] ?>" width="80">
                                <?php endif; ?>
                            </div>

                            <!-- Video -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Video</label>
                                <input type="file" name="video" class="form-control">
                                <?php if($row['video']): ?>
                                    <video width="120" controls>
                                        <source src="../../uploads/videos/<?= $row['video'] ?>" type="video/mp4">
                                    </video>
                                <?php endif; ?>
                            </div>

                            <!-- Section 1 Image -->
                            <div class="mb-3">
                                <label class="form-label text-primary">Section 1 Image</label>
                                <input type="file" name="section1_image" class="form-control">
                                <?php if($row['section1_image']): ?>
                                    <img src="../../uploads/photos/<?= $row['section1_image'] ?>" width="80">
                                <?php endif; ?>
                            </div>

                            <div class="row p-3">
                                <div class="col-xl-7 col-sm-2"></div>
                                <button type="reset" class="btn btn-danger mx-1 my-2 col-xl-2">Clear</button>
                                <button type="submit" class="btn btn-success mx-1 my-2 col-xl-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
const mainEditor = new Quill('#mainEditor', {theme:'snow'});
const fullEditor = new Quill('#fullEditor', {theme:'snow'});
const section1Editor = new Quill('#sectionEditor1', {theme:'snow'});

document.querySelector('#editblogform').onsubmit = function(){
    document.querySelector('#mainContent').value = mainEditor.root.innerHTML;
    document.querySelector('#fullContent').value = fullEditor.root.innerHTML;
    document.querySelector('#section1Content').value = section1Editor.root.innerHTML;
};
</script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
