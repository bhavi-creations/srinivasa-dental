<?php
// Database connection (replace with your actual database connection details)
include './db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data
    $stmt = $conn->prepare("SELECT title, main_content, full_content, title_image, main_image, video FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $title_image, $main_image, $video);
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
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Srinivasa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="google-site-verification" content="XNZHTr2i9SNJMA0nilQUt823CAqyXT89mM9RX0Q4egE" />
    <!-- Favicons -->
    <link href="assets/img/srinivasa/tittle.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10932795730"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10932795730');
    </script>

    <meta name="google-site-verification" content="DTcGCIR9IfsrwdT9-mWW0E5SAgsnh3ampaFCbajjoZg" />

</head>

<body>
<?php include 'navbar.php'; ?>

    <main>
        <!-- ======= Blogs Section ======= -->
        <!-- <div class="page-header bg-more-light tittle-image">
            <?php
            if (!empty($title_image)) {
                $title_image_path = "./admin/uploads/photos/{$title_image}";
                echo "<img class='img-fluid img_sts' src='{$title_image_path}' style='width: 3000px;  ' alt='Title Image'>";
            } else {
                echo "<img class='img-fluid img_sts' src='assets/images/title images2/Deep_vein_thrombosis_title_image_one_stop_vascular_solutions.webp' style='width: 3000px;' alt='Deep_vein_thrombosis_title_image_one_stop_vascular_solutions'>";
            }
            ?>
        </div> -->

        <div class="container blog-detailed blog-detailed-sidebar" style="padding-bottom: 0px;padding-top: 50px;">
            <div class="row">
                <div class="col-lg-8 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-1">
                    <div class="blog-content">
                        <h4 class="blog-title tittle ls-n-20" style="color: #283779; font-weight:800"><?php echo htmlspecialchars($title); ?></h4>

                        <p class="main-content" style="text-align: justify;">
                            <?php echo $main_content; ?>
                        </p>

                        <?php
                        // Check if video is available
                        if (!empty($video)) {
                            $video_path = "./admin/uploads/videos/{$video}";
                            echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
                        }
                        // If no video, display the image
                        elseif (!empty($main_image)) {
                            $main_image_path = "./admin/uploads/photos/{$main_image}";
                            echo "<img class='main-image img-fluid blog_main_img' src='{$main_image_path}'  alt='Main Image'>";
                        }
                        ?>

                        <div class="full-content">
                            <?php echo $full_content; ?>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1 order-lg-2">
                    <div class="side-bar">


                        <div class="row scrollable-row" style="max-height: 700px; overflow-y: auto;  overflow-x:hidden">
                            <?php
                            // Fetch all blog data for sidebar
                            $conn = new mysqli($servername, $username, $password, $dbname); // Re-establish connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT id, title, main_image FROM blogs ORDER BY created_at DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $sidebar_image_path = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                    $title = strlen($row['title']) > 20 ? substr($row['title'], 0, 50) . '...' : $row['title'];

                                    echo "
                      <div class='col-5 background_sidebar mb-3'>
                          <figure>
                              <img src='{$sidebar_image_path}' class='w-100 height-auto mt-3 ' alt='Blog Image'>
                          </figure>
                      </div>
                      <div class='col-7   background_sidebar d-flex flex-column justify-content-center mb-3'>
                          <a href='fullblog.php?id={$row['id']}'>
                              <p class='blog-card-text'>{$title}</p>
                          </a>
                      </div>";
                                }
                            } else {
                                echo "<p>No blog posts found.</p>";
                            }
                            $conn->close();
                            ?>
                        </div>



                    </div>
                </div>


            </div>
        </div>

    </main>
    <!-- ======= Footer ======= -->
    <?php include('./footer.php'); ?>


</body>

</html>