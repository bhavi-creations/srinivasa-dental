<?php
include __DIR__ . '/../../db.connection/db_connection.php'; // DB connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $service = $_POST['service'];
    $main_content = $_POST['main_content'];
    $full_content = $_POST['full_content'];
    $section1_content = $_POST['section1_content'];

    // Function to upload files
    function uploadFile($fileInput, $type = 'image')
    {
        if (!isset($_FILES[$fileInput]) || $_FILES[$fileInput]['error'] != 0) {
            return null;
        }

        $ext = pathinfo($_FILES[$fileInput]['name'], PATHINFO_EXTENSION);
        $filename = time() . '_' . uniqid() . '.' . $ext;

        // Set target directory
        if ($type === 'image') {
            $uploadDir = __DIR__ . '/../../uploads/photos/';
        } elseif ($type === 'video') {
            $uploadDir = __DIR__ . '/../../uploads/videos/';
        }

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $target = $uploadDir . $filename;

        if (move_uploaded_file($_FILES[$fileInput]['tmp_name'], $target)) {
            return $filename;
        }
        return null;
    }

    // Upload files
    $main_image = uploadFile('main_image', 'image');
    $video = uploadFile('video', 'video');
    $section1_image = uploadFile('section1_image', 'image');

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO telugu_blogs 
        (title, service, main_content, full_content, section1_content, section1_image, main_image, video) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $title, $service, $main_content, $full_content, $section1_content, $section1_image, $main_image, $video);

    if ($stmt->execute()) {
        echo "<script>alert('Telugu blog added successfully'); window.location.href='list_telugu_blogs.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Telugu Blog - Admin</title>

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
                    <h1 class="h3 mb-4 text-gray-800">Create Telugu Blog</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Blog Content</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>

                                <!-- Service -->
                                <div class="mb-3">
                                    <label for="service" class="form-label text-primary">Select Service:</label>
                                    <select id="service" name="service" class="form-control" required>
                                        <option value="">Select a Service</option>
                                        <option value="Root Canal">Root Canal</option>
                                        <option value="Dental Braces">Dental Braces</option>
                                        <option value="Clear Aligners">Clear Aligners</option>
                                        <option value="Dental Implants">Dental Implants</option>
                                        <option value="Crown Bridge">Crown & Bridge</option>
                                        <option value="Teeth Filling">Teeth Filling</option>
                                        <option value="Dentures">Dentures</option>
                                        <option value="Teeth Scaling">Teeth Scaling</option>
                                        <option value="Tooth Extraction">Tooth Extraction</option>
                                        <option value="Teeth Cleaning">Teeth Cleaning</option>
                                        <option value="Teeth Whitening">Teeth Whitening</option>
                                        <option value="Smile Makeover">Smile Makeover</option>
                                        <option value="Full Mouth Restoration">Full Mouth Restoration</option>
                                    </select>
                                </div>

                                <!-- Main Content -->
                                <div class="mb-3">
                                    <label class="form-label">Main Content</label>
                                    <div id="mainEditor" style="height:200px;"></div>
                                    <input type="hidden" name="main_content" id="mainContent">
                                </div>

                                <!-- Full Content -->
                                <div class="mb-3">
                                    <label class="form-label">Full Content</label>
                                    <div id="fullEditor" style="height:200px;"></div>
                                    <input type="hidden" name="full_content" id="fullContent">
                                </div>

                                <!-- Section 1 Content -->
                                <div class="mb-3">
                                    <label class="form-label">Section 1 Content</label>
                                    <div id="sectionEditor1" style="height:150px;"></div>
                                    <input type="hidden" name="section1_content" id="section1Content">
                                </div>

                                <!-- Main Image -->
                                <div class="mb-3">
                                    <label class="form-label">Main Image</label>
                                    <input type="file" class="form-control" name="main_image">
                                </div>

                                <!-- Video -->
                                <div class="mb-3">
                                    <label class="form-label">Video</label>
                                    <input type="file" class="form-control" name="video">
                                </div>

                                <!-- Section 1 Image -->
                                <div class="mb-3">
                                    <label class="form-label">Section 1 Image</label>
                                    <input type="file" class="form-control" name="section1_image">
                                </div>

                                <button type="submit" class="btn btn-success">Publish</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
        const mainEditor = new Quill('#mainEditor', { theme: 'snow' });
        const fullEditor = new Quill('#fullEditor', { theme: 'snow' });
        const section1Editor = new Quill('#sectionEditor1', { theme: 'snow' });

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#mainContent').value = mainEditor.root.innerHTML;
            document.querySelector('#fullContent').value = fullEditor.root.innerHTML;
            document.querySelector('#section1Content').value = section1Editor.root.innerHTML;
        };
    </script>

</body>
</html>
