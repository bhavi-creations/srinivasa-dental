<?php
// Database connection
include '../../db.connection/db_connection.php';

// Fetch all reactions
$sql = "SELECT 
            id,
            blog_id,
            device_ip,
            reaction,
            created_at
        FROM blog_reactions
        ORDER BY id DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Srinivasa Dental - Dashboard</title>

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

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h2 mb-0 text-info mx-2">Blog Reactions</h2>
                    </div>

                    <!-- TABLE SHOWING ALL blog_reactions DATA -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Blog Reactions List</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>ID</th>
                                            <th>Blog ID</th>
                                            <th>Device IP</th>
                                            <th>Reaction</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {

                                                echo "
                                                <tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['blog_id']}</td>
                                                    <td>{$row['device_ip']}</td>
                                                    <td>{$row['reaction']}</td>
                                                    <td>{$row['created_at']}</td>
                                                    <td>
                                                        <a href='editReaction.php?id={$row['id']}' 
                                                           class='btn btn-sm btn-warning mx-1'>
                                                           Edit
                                                        </a>
                                                        <a href='deleteReaction.php?id={$row['id']}' 
                                                           class='btn btn-sm btn-danger mx-1' 
                                                           onclick=\"return confirm('Are you sure you want to delete this reaction?');\">
                                                           Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
                                            }
                                        } else {
                                            echo "
                                            <tr>
                                                <td colspan='6' class='text-center'>No Reactions Found</td>
                                            </tr>
                                            ";
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        ©2024 Srinivasa Dental. Designed by Bhavi Creations
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>

</html>
