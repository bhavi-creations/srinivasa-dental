<?php
// Database connection
include 'db.connection/db_connection.php';

// Fetch ALL blogs (latest first)
$sql = "SELECT id, title, main_content, main_image FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);

$blogs = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
}


$sql = "SELECT title, logo, logo_link FROM blogs ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$blog = $result->fetch_assoc();


// Count total blogs
$total_blogs = count($blogs);

// Split equally (if odd, left gets +1 blog)
$left_count = ceil($total_blogs / 2);
$right_count = $total_blogs - $left_count;

// Function to limit words in title
function get_words($text, $limit)
{
    $words = explode(" ", strip_tags($text));
    return implode(" ", array_slice($words, 0, $limit));
}



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

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srinivasa-Dental</title>

    <!-- libraries CSS -->
    <!-- <link rel="stylesheet" href="assets2/icon/flaticon_digicom.css"> -->
    <link rel="stylesheet" href="assets2/icon/flaticon_err.css">
    <link rel="stylesheet" href="assets2/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets2/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets2/vendor/animate-wow/animate.min.css">
    <link rel="stylesheet" href="assets2/vendor/slim-select/slimselect.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index.html">
                    <img src="assets2/img/logo.svg" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

        <!-- sidebar content -->
        <div>
            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">About Us</span>
                <p class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odio eveniet ex dicta
                    beatae, repellat voluptatibus ratione alias modi maxime, quaerat sed iste nihil molestiae numquam
                    unde fuga qui velit!</p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Location</span>
                <p class="descr"><i class="flaticon-pin"></i><span>123 Main Street, New York, NY 10012</span></p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Contact Us</span>
                <p class="descr"><i class="flaticon-call"></i><a href="tel:1234567890">123-456-7890</a></p>
            </div>
        </div>

        <!-- sidebar footer -->
        <div class="ul-sidebar-footer">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="#"><i class="flaticon-facebook"></i></a>
                <a href="#"><i class="flaticon-twitter"></i></a>
                <a href="#"><i class="flaticon-instagram"></i></a>
                <a href="#"><i class="flaticon-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR SECTION END -->


    <!-- SEARCH MODAL SECTION START -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- SEARCH MODAL SECTION END -->





    <main>



        <section class="ul-service-details ul-section-spacing full_blogs_section">
            <div class="container-fluid">
                <div class="row g-xl-5 g-4 mx-3">

                    <!-- Left Sidebar (First Half Blogs) -->
                    <div class="col-lg-3 col-md-5">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <!-- Show only 2 blogs at a time, scroll for rest -->
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">Latest Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, 0, $left_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "uploads/photos/{$row['main_image']}"   // ✅ fixed path
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' 
                                             style='width:70px; height:70px; object-fit:cover; border-radius:5px;' 
                                             alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Content -->
                    <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="scrollable-content text-center">
                            <?php if (!empty($blog['logo'])) { ?>
                                <a href="<?php echo !empty($blog['logo_link']) ? htmlspecialchars($blog['logo_link']) : '#'; ?>" target="_blank">
                                    <img src="uploads/logos/<?php echo htmlspecialchars($blog['logo']); ?>"
                                        class="img-fluid mb-3" alt="Blog Logo">
                                </a>
                            <?php } ?>

                            <?php if (!empty($blog['title'])) { ?>
                                <h1><?php echo htmlspecialchars($blog['title']); ?></h1>
                            <?php } else { ?>
                                <h1>No blog found</h1>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Right Sidebar (Second Half Blogs) -->
                    <div class="col-lg-3 col-md-3">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">More Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, $left_count, $right_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "uploads/photos/{$row['main_image']}"   // ✅ fixed path
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' 
                                             style='width:70px; height:70px; object-fit:cover; border-radius:5px;' 
                                             alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>












        <section class="ul-service-details ">
            <div class="container-fluid">
                <div class="row g-xl-5 g-4 mx-3">

                    <div class="col-lg-3 col-md-2">

                        <img src="assets2/img/banner 1.jpeg" alt="" style="height: 320px; width: 400px;">
                    
                        <div class="card">
                            <h3 class="mani">Contact us</h3>
                            <p>for digital marketing ajency</p>
                            <strong>=91 9876543210</strong>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 middle_content">
                        <!-- Scrollable container -->
                        <div style="max-height: 390px; overflow-y: auto; padding-right:10px;">
                            <div>
                                <div class="ul-service-details-img">
                                    <img src="./assets2/img/teeth filling.jpg" alt="Image">
                                </div>
                                <div class="ul-service-details-txt">






                                   

                                    <div class="px-2">
                                        <div class="row">
                                            <!-- Image Column -->
                                            <div class="col-md-6">
                                                <?php if (!empty($blog['main_image'])): ?>
                                                    <img src="../uploads/photos/<?= $blog['main_image']; ?>" alt="Blog Image" class="img-fluid">
                                                <?php endif; ?>
                                            </div>

                                            <!-- Video Column -->
                                            <div class="col-md-6 service_secong_image">
                                                <?php if (!empty($blog['video'])): ?>
                                                    <video controls width="100%">
                                                        <source src="../uploads/videos/<?= $blog['video']; ?>" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="ul-service-details-inner-block">
                                        <h3 class="ul-service-details-inner-title">Why It Matters:</h3>
                                        <p>Improving your lifestyle isn't just about avoiding illness — it's about
                                            living better, feeling stronger, and thinking clearer every day.</p>
                                        <div class="ul-accordion ul-service-details-faq">
                                            <div class="ul-single-accordion-item">
                                                <div class="ul-single-accordion-item__header">
                                                    <div class="left">
                                                        <h3 class="ul-single-accordion-item__title">Do I need a
                                                            diagnosis to book a session?</h3>
                                                    </div>
                                                    <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                                </div>
                                                <div class="ul-single-accordion-item__body">
                                                    <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae
                                                        consequat Juisque eget congue velit in cursus leo sodales the
                                                        turpis euismod quis sapien euismod quis sapien the. E-learning
                                                        is suitable for students, professionals, and anyone interested.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="ul-single-accordion-item open">
                                                <div class="ul-single-accordion-item__header">
                                                    <div class="left">
                                                        <h3 class="ul-single-accordion-item__title">Why Join Us as a
                                                            Volunteer?</h3>
                                                    </div>
                                                    <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                                </div>
                                                <div class="ul-single-accordion-item__body">
                                                    <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae
                                                        consequat Juisque eget congue velit in cursus leo sodales the
                                                        turpis euismod quis sapien euismod quis sapien the. E-learning
                                                        is suitable for students, professionals, and anyone interested.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="ul-single-accordion-item">
                                                <div class="ul-single-accordion-item__header">
                                                    <div class="left">
                                                        <h3 class="ul-single-accordion-item__title">Be Part of a
                                                            Community</h3>
                                                    </div>
                                                    <span class="icon"><i class="flaticon-arrow-up-right"></i></span>
                                                </div>
                                                <div class="ul-single-accordion-item__body">
                                                    <p>Aonsectetur adipiscing elit Aenean scelerisque augue vitae
                                                        consequat Juisque eget congue velit in cursus leo sodales the
                                                        turpis euismod quis sapien euismod quis sapien the. E-learning
                                                        is suitable for students, professionals, and anyone interested.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>












                    </div>


                    <div class="col-lg-3 col-md-2">
                        
                        <img src="assets2/img/banner 1.jpeg" alt="" style="height: 320px; width: 400px;">
                        <div class="card">
                            <h3 class="mani">Contact us</h3>
                            <p>for digital marketing ajency</p>
                            <strong>=91 9876543210</strong>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>



    <!-- libraries JS -->
    <script src="assets2/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets2/vendor/splide/splide.min.js"></script>
    <script src="assets2/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets2/vendor/animate-wow/wow.min.js"></script>
    <script src="assets2/vendor/fslightbox/fslightbox.js"></script>
    <script src="assets2/vendor/slim-select/slimselect.min.js"></script>


    <!-- custom JS -->
    <script src="assets2/js/main.js"></script>
    <script src="assets2/js/tab.js"></script>
    <script src="assets2/js/accordion.js"></script>
    <script src="assets2/js/progressbar.js"></script>

</body>