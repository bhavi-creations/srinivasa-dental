<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Srinivasa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

</head>

<body>
  <div class="social-icons text-center">
    <a href="https://www.facebook.com/srinivasadentalkakinada/" target="_blank">
      <img src="assets/img/srinivasa/facebook.png" class="img-fluid" alt="" /></a>
    <a href="https://www.instagram.com/srinivasadentalkakinada/" target="_blank">
      <img src="assets/img/srinivasa/instagram.png" class="img-fluid" alt="" /></a>
    <a
      href=" https://www.linkedin.com/company/99449038/admin/dashboard/" target="_blank">
      <img src="assets/img/srinivasa/linkedin.png" class="img-fluid" style="border-radius: 5px" alt="" /></a>
    <a href=" https://www.youtube.com/@srinivasadentalkakinada" target="_blank">
      <img src="assets/img/srinivasa/youtube.png" class="img-fluid" alt="" /></a>
  </div>

  <!-- ======= Header ======= -->
  <header id="header1" class="main_images onlypad">
    <div class="container d-flex align-items-center">
      <div class="logo-text-container d-flex align-items-center" style="z-index: 999;">
        <a href="index.php">
          <img src="assets/img/srinivasa/image 1.png" class="img-fluid" alt="">
        </a>
      </div>

      <nav id="navbar" class="navbar order-lg-0">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <ul>

          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="services.php" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu services_drop_menu mt-1" aria-labelledby="servicesDropdown" style="width:700px;">
              <div class="row  ">
                <div class="col-md-4">
                  <li><a class="dropdown-item services_drop" href="rootcanal.php">Root Canal</a></li>
                  <li><a class="dropdown-item services_drop" href="dentalbraces.php">Dental Braces</a></li>
                  <li><a class="dropdown-item services_drop" href="dentalimplents.php">Dental Implants</a></li>
                  <li><a class="dropdown-item services_drop" href="bridgetreatment.php">Crown & Bridge</a></li>
                </div>
                <div class="col-md-4">
                  <li><a class="dropdown-item services_drop" href="teethfilling.php">Teeth Filling</a></li>
                  <li><a class="dropdown-item services_drop" href="dentures.php">Dentures</a></li>
                  <li><a class="dropdown-item services_drop" href="teethscaling.php">Teeth Scaling</a></li>
                  <li><a class="dropdown-item services_drop" href="toothextraction.php">Tooth Extraction</a></li>
                </div>
                <div class="col-md-4">
                  <li><a class="dropdown-item services_drop" href="teethcleaning.php">Teeth Cleaning</a></li>
                  <li><a class="dropdown-item services_drop" href="teethwhitning.php">Teeth whitening</a></li>
                  <li><a class="dropdown-item services_drop" href="smilemakeover.php">Smile Makeover</a></li>
                  <li><a class="dropdown-item services_drop" href="fullmouthrestrotion.php">Full Mouth Restoration</a></li>
                </div>
              </div>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link active" href="blogs.php">Blogs</a></li>
          <li><a class="nav-link scrollto" href="testimonials.php">What Patients Say</a></li>
          <li><a href="appointment.php" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
              Appointment
            </a></li>
        </ul>
      </nav>

      <a href="appointment.php" class="appointment-btn scrollto d-none d-lg-block" style="z-index: 999;">
        For Appointment
      </a>
    </div>


    <script>
      // jQuery needed to manage hover and click behavior
      $(document).ready(function() {
        // Ensure that the dropdown opens on hover
        $('#servicesDropdown').hover(function() {
          $(this).dropdown('toggle');
        });

        // Make sure the dropdown also works on click
        $('#servicesDropdown').click(function(e) {
          e.stopPropagation(); // Prevents the click from closing the dropdown immediately
          window.location.href = $(this).attr('href'); // Redirect to the link
        });
      });
    </script>
  </header>



  <main>
    <!-- Filter Buttons -->
    <div class="container">
      <div class="filter_buttons redirect_section mt-4">
        <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
        <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
        <a href="blogs.php?service=Dental Braces"><button class="redirect_blog_srivice">Dental Braces</button></a>
        <a href="blogs.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
        <a href="blogs.php?service=Crown Bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
        <a href="blogs.php?service=Teeth Filling"><button class="redirect_blog_srivice">Teeth Filling</button></a>
        <a href="blogs.php?service=Dentures"><button class="redirect_blog_srivice">Dentures</button></a>
        <a href="blogs.php?service=Teeth Scaling"><button class="redirect_blog_srivice">Teeth Scaling</button></a>
        <a href="blogs.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
        <a href="blogs.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning</button></a>
        <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
        <a href="blogs.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
        <a href="blogs.php?service=Full Mouth Restoration"><button class="redirect_blog_srivice">Full Mouth Restoration</button></a>

      </div>
    </div>

    <!-- Blogs Section -->
    <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="grid row">
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
                echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
              }
            } else {
              echo "<p>No blog posts found.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>



  <!-- ======= Footer ======= -->
  <?php include('./footer.php'); ?>

</body>

</html> <?php
        // Close the statement and connection
        $stmt->close();
        $conn->close();
        ?>