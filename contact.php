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
            <img src="assets/img/srinivasa/facebook.png" class="img-fluid" alt=""
        /></a>
        <a href="https://www.instagram.com/srinivasadentalkakinada/" target="_blank">
            <img src="assets/img/srinivasa/instagram.png" class="img-fluid" alt=""
        /></a>
        <a
            href=" https://www.linkedin.com/company/99449038/admin/dashboard/" target="_blank">
            <img src="assets/img/srinivasa/linkedin.png" class="img-fluid" style="border-radius: 5px" alt=""
        /></a>
        <a href=" https://www.youtube.com/@srinivasadentalkakinada" target="_blank">
            <img src="assets/img/srinivasa/youtube.png" class="img-fluid" alt=""
        /></a>
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
          <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
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

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 class="contct_text">Contact</h2>
        </div>

      </div>



      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row d-flex flex-row justify-content-center">
              <!-- <div class="col-md-12">
                 <div class="info-box">
                   <i class="bx bx-map"></i>
                   <h3>Our Address</h3>
                   <p>
                     2-56-5,
                     SANTHI NAGAR,ROAD NO.1,<br>
                     100 BUILDING CENTER,<br>
                     HOUSING BOARD COLONY<br>
                     OPP. CHRISTIAN COMMUNITY HALL<br>
                     KAKINADA-533003 <br>
                     Andhra Pradesh, India
                     <br><br>
                   </p>
                 </div>
               </div> -->
              <div class="col-md-7">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3 style="font-family:Mulish;">Email Us</h3>
                  <p style="font-family:Mulish;"> srinivasadentalkakinada@gmail.com </p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3 style="font-family:Mulish;">Call Us</h3>
                  <p style="font-family:Mulish;"> +919290019948 </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contactform .php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" required="" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control just_font" name="contactemail" id="email" placeholder="Your Email" style="font-family:Mulish;" required="">
                </div>

                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactnumber" id="number" placeholder="Phone" required="" style="font-family:Mulish;">
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="contactmessage" rows="7" placeholder="Message" required=" " style="font-family:Mulish;"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

         

        </div>

      </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15263.91014555985!2d82.23060610030991!3d16.975655241485622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a38280cfb8b76af%3A0x20fa1fab700c8dc2!2ssrinivasa%20dental%20clinic!3m2!1d16.9617979!2d82.2343163!5e0!3m2!1sen!2sin!4v1725952492416!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </main>
  <?php include ('./footer.php'); ?>
</body>

</html>