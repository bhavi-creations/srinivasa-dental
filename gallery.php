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
  <link href="assets/css/style1.css" rel="stylesheet">

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
          <li><a class="nav-link scrollto active" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link" href="blogs.php">Blogs</a></li>
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




  <main id="main">

    <section class="sectionForm mt-5 pt-5">
      <div class="container">
        <div class="row servSect">
          <div class="col-md-4">
            <img src="assets/img/gallery/1.png" alt="" class="imgg1">
          </div>
          <div class="col-md-4"> <img src="assets/img/gallery/2.png" alt="" class="imgg2">
          </div>
          <div class="col-md-4"> <img src="assets/img/gallery/3.png" alt="" class="imgg3">
          </div>


        </div>
        <div class="row servSect">
          <div class="col-md-3">
            <img src="assets/img/gallery/4.png" alt="" class="imgg4"><br />
            <img src="assets/img/gallery/7.png" alt="" class="imgg5">
          </div>

          <div class="col-md-6"> <img src="assets/img/gallery/5.png" alt="" class="imgg6">
          </div>
          <div class="col-md-3"> <img src="assets/img/gallery/6.png" alt="" class="imgg7">
          </div>


        </div>
        <div class="row servSect">
          <div class="col-md-4">
            <img src="assets/img/gallery/8.png" alt="" class="imgg8">
          </div>

          <div class="col-md-4"> <img src="assets/img/gallery/9.png" alt="" class="imgg9">
          </div>
          <div class="col-md-4"> <img src="assets/img/gallery/10.png" alt="" class="imgg10">
          </div>


        </div>
      </div>
    </section>


  </main>
  <?php include ('./footer.php'); ?>

</body>

</html>