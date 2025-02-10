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
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <!-- Google tag (gtag.js) -->

  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10932795730">
  </script>
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
<style>
  @media (min-width:992px) {

    .showthisdiv {
      padding-left: 100px !important;
    }
  }
</style>

<body>
<?php include 'navbar.php'; ?>





  <main id="main">

    <section class="sectionForm mt-5 pt-5">
      <div class="container appointment_bg" style="  background-color: #E7F3FE80;">

        <div class="section-title">
          <h2 class=" pt-5 mb-4 contct_text">Make an Appointment</h2>
        </div>


        <div class="row">
          <div class="col-md-6 d-none d-md-block">
            <img src="assets/img/srinivasa/BOOK APOINTMENT.png" class="img-fluid">
          </div>


          <div class="col-md-6 mt-5">
            <form action="appointmentform.php" method="post" role="form" class="php-email-form"
              data-aos-delay="100">
              <div class="row">
                <div class="col-md-6 form-group mt-4 mt-md-0 mb-4">
                  <input type="text" name="name" class="form-control  " id="name"
                    style="border-radius: 23px; " placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-4 mt-md-0">
                  <input type="email" class="form-control  " name="email" id="email"
                    style="border-radius: 23px;" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group mt-5 mt-md-0">
                  <input type="tel" class="form-control  " name="phone" id="phone"
                    style="border-radius: 23px;" placeholder="Your Phone" required>
                </div>
                <div class="col-md-6 form-group mt-4  mt-md-0">
                  <input type="date" name="date" class="form-control datepicker  "
                    style="border-radius: 23px;" id="date" placeholder="Appointment Date" required>
                </div>
              </div>
              <div class="row">

                <div class="  form-group mt-4">
                  <select name="department" id="department" style="border-radius: 23px;"
                    class="form-select" required>
                    <option value="">Select Service</option>
                    <option value="Root Canal"> Root Canal</option>
                    <option value="Dental Implants">Dental Implants</option>
                    <option value="Teeth Filling">Teeth Filling</option>
                    <option value="Dental Braces">Dental Braces</option>
                    <option value="Teeth Cleaning">Teeth Cleaning</option>
                    <option value="Teeth Whitening">Teeth Whitening</option>
                    <option value="Smile Makeover">Smile Makeover</option>
                    <option value="Tooth Crown & Bridges">Tooth Crown & Bridges</option>
                    <option value="Dentures">Dentures</option>
                    <option value="Tooth extraction">Tooth extraction</option>
                    <option value="Teeth Scaling"> Teeth Scaling</option>
                    <option value="Full Mouth Restoration">Full Mouth Restoration</option>




                  </select>
                </div>

              </div>

              <div class="form-group mt-4 mb-5">
                <textarea class="form-control" name="message" style="border-radius: 23px;" rows="5"
                  placeholder="Message (Optional)"></textarea>
              </div>

              <div class="text-center maker"><button type="submit" class="makee">Make an
                  For Appointment</button></div>
            </form>
          </div>



        </div>
      </div>
    </section>


  </main>


  <?php include('./footer.php'); ?>
  


</body>

</html>