<?php
include __DIR__ . '/../../db.connection/db_connection.php';

$result = $conn->query("SELECT * FROM telugu_blogs ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Telugu Blogs List</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
    <?php include 'sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'navbar.php'; ?>

            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Telugu Blogs List</h1>
                <a href="create_telugu_blog" class="btn btn-primary mb-3">Add New Blog</a>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Service</th>
                                        <th>Main Image</th>
                                        <th>Section 1 Image</th>
                                        <th>Video</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['title'] ?></td>
                                        <td><?= $row['service'] ?></td>
                                        <td>
                                            <?php if($row['main_image']): ?>
                                                <img src="../../uploads/photos/<?= $row['main_image'] ?>" width="80">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($row['section1_image']): ?>
                                                <img src="../../uploads/photos/<?= $row['section1_image'] ?>" width="80">
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($row['video']): ?>
                                                <video width="120" controls>
                                                    <source src="../../uploads/videos/<?= $row['video'] ?>" type="video/mp4">
                                                </video>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="edit_telugu_blog?id=<?= $row['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                                            <a href="delete_telugu_blog?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>
