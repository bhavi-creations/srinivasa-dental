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


<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="header1" class="main_images onlypad">
  <div class="container d-flex align-items-center">
    <div class="logo-text-container d-flex align-items-center" style="z-index: 999;">
      <a href="index.php">
        <img src="assets/img/srinivasa/image 1.png" class="img-fluid d-lg-none d-xl-block" alt="">
        <img src="assets/img/srinivasa/image 1.png" class="   d-none d-lg-block d-xl-none" style="width:200px;  height:70px" alt="">

      </a>
    </div>

    <nav id="navbar" class="navbar order-lg-0">
      <i class="bi bi-list mobile-nav-toggle"></i>
      <ul>
        <li><a class="nav-link <?= ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
        <li><a class="nav-link <?= ($current_page == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($current_page == 'services.php') ? 'active' : ''; ?>"
            href="services.php" id="servicesDropdown" role="button">
            Services
          </a>
          <ul class="dropdown-menu services_drop_menu mt-1" aria-labelledby="servicesDropdown" style="width:700px;">
            <div class="row">
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
                <li><a class="dropdown-item services_drop" href="clearaligners.php"> Clear Aligners</a></li>
                <li><a class="dropdown-item services_drop" href="teethwhitning.php">Teeth Whitening</a></li>
                <li><a class="dropdown-item services_drop" href="smilemakeover.php">Smile Makeover</a></li>
                <li><a class="dropdown-item services_drop" href="fullmouthrestrotion.php">Full Mouth Restoration</a></li>
              </div>
            </div>
          </ul>
        </li>

        <li><a class="nav-link <?= ($current_page == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php">Gallery</a></li>
        <li><a class="nav-link <?= ($current_page == 'blogs.php') ? 'active' : ''; ?>" href="blogs.php">Blogs</a></li>
        <li><a class="nav-link <?= ($current_page == 'testimonials.php') ? 'active' : ''; ?>" href="testimonials.php">What Patients Say</a></li>
        <li><a href="appointment.php" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
            Appointment
          </a></li>
      </ul>
    </nav>

    <a href="appointment.php" class="appointment-btn scrollto d-none d-lg-block" style="z-index: 999;">
      For Appointment
    </a>
  </div>
</header>


<script>
  $(document).ready(function() {
    // Open dropdown on hover
    $('.nav-item.dropdown').hover(
      function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
      },
      function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
      }
    );
  });
</script>