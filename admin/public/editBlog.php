<?php
// Database connection
include '../../db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data including Telugu fields and video
    $stmt = $conn->prepare("SELECT title, main_content, full_content, service, telugu_title, telugu_main_content, telugu_full_content, video FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $service, $telugu_title, $telugu_main_content, $telugu_full_content, $video);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid blog ID.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Blog</title>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
</head>
<body id="page-top">
<div id="wrapper">
    <?php include 'sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'navbar.php'; ?>
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Edit BLOG</h1>

                <div class="row">
                    <div class="col-xl-11">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-success">EDIT CONTENT</h6>
                            </div>
                            <div class="card-body">
                                <form id="editblogform" action="addBlog.php" method="POST" enctype="multipart/form-data">

                                    <!-- English Title -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Title (English)</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                                    </div>

                                    <!-- Telugu Title -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Title (Telugu)</label>
                                        <input type="text" class="form-control" name="telugu_title" value="<?php echo htmlspecialchars($telugu_title); ?>">
                                    </div>

                                    <!-- Service Dropdown -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Select Service</label>
                                        <select name="service" class="form-control" required>
                                            <?php
                                            $services = ['Implants','Root Canal','Tooth Aligners','Clips Braces','Crowns Bridges','Gum Surgery','Child Dentistry','Maxillofacial Surgery','Laser Treatment','Teeth Whitening','Veneers','Composite Filler','Teeth Jewellery'];
                                            foreach($services as $s) {
                                                $selected = ($service == $s) ? 'selected' : '';
                                                echo "<option value='{$s}' {$selected}>{$s}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- English Main Content -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Main Content (English)</label>
                                        <div id="mainEditor" style="height:200px;"></div>
                                        <input type="hidden" name="main_content" id="mainContentData">
                                    </div>

                                    <!-- Telugu Main Content -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Main Content (Telugu)</label>
                                        <div id="teluguMainEditor" style="height:200px;"></div>
                                        <input type="hidden" name="telugu_main_content" id="teluguMainContentData">
                                    </div>

                                    <!-- English Full Content -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Full Content (English)</label>
                                        <div id="fullEditor" style="height:300px;"></div>
                                        <input type="hidden" name="full_content" id="fullContentData">
                                    </div>

                                    <!-- Telugu Full Content -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Full Content (Telugu)</label>
                                        <div id="teluguFullEditor" style="height:300px;"></div>
                                        <input type="hidden" name="telugu_full_content" id="teluguFullContentData">
                                    </div>

                                    <!-- Main Image Upload -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Main Image</label>
                                        <input type="file" name="main_image" class="form-control">
                                    </div>

                                    <!-- Video Upload -->
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Video</label>
                                        <input type="file" name="video" class="form-control">
                                        <?php if(!empty($video)) {
                                            echo "<small>Current Video: <a href='../../uploads/videos/{$video}' target='_blank'>View</a></small>";
                                        } ?>
                                    </div>

                                    <input type="hidden" name="id" value="<?php echo $blog_id; ?>">

                                    <div class='row p-3'>
                                        <div class='col-xl-7 col-sm-2'></div>
                                        <button type='reset' class='btn btn-danger mx-1 my-2 col-xl-2'>Clear</button>
                                        <button type='submit' class='btn btn-success mx-1 my-2 col-xl-2'>Update</button>
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
const quillMain = new Quill('#mainEditor', { theme: 'snow' });
const quillTeluguMain = new Quill('#teluguMainEditor', { theme: 'snow' });
const quillFull = new Quill('#fullEditor', { theme: 'snow' });
const quillTeluguFull = new Quill('#teluguFullEditor', { theme: 'snow' });

// Load existing data
quillMain.root.innerHTML = <?php echo json_encode($main_content); ?>;
quillTeluguMain.root.innerHTML = <?php echo json_encode($telugu_main_content); ?>;
quillFull.root.innerHTML = <?php echo json_encode($full_content); ?>;
quillTeluguFull.root.innerHTML = <?php echo json_encode($telugu_full_content); ?>;

// On submit, copy editor content to hidden fields
document.querySelector('#editblogform').onsubmit = function() {
    document.querySelector('#mainContentData').value = quillMain.root.innerHTML;
    document.querySelector('#teluguMainContentData').value = quillTeluguMain.root.innerHTML;
    document.querySelector('#fullContentData').value = quillFull.root.innerHTML;
    document.querySelector('#teluguFullContentData').value = quillTeluguFull.root.innerHTML;
};
</script>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
