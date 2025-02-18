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

</head>


<body>
<?php include 'navbar.php'; ?>





  <main id="main">





    <section class="sectionForm">
      <div class="container">
        <div class="row servSect">
          <div class="col-md-7 dr_content_padding order-1 order-md-1">
            <h5 class="poetsen_font11">About us</h5>
            <h2 class="dr_welcome_text1 mt-4 mb-4">Our History</h2>
            <p class="poetsen_font1">
              Our hospital, established in 2014, is equipped with advanced infrastructure to provide specialized oral health care. Thousands of patients have benefited from our comprehensive dental services, improving their oral and overall health. As a team, we continue to bring smiles to families through ethical dental practices in Kakinada. Dr. D.V.S. Kiran Raju, M.D.S., specializes in braces. At our clinic, we provide treatment for all ages, transforming misaligned teeth into beautiful smiles.
            </p>

            <div class="showthisdiv" style="display:none;">
              <p class="poetsen_font1">
                Our dedicated clinician excels in pain management, replacement of missing teeth, esthetic dentistry, and strives to offer complete care by utilizing advanced techniques. We are the best dental clinic in Kakinada. Dr. D. Sree Lakshmi Deepika strongly believes that ‘Natural tooth is a God’s gift.’ As a specialist in advanced gum care and surgical treatments, she is committed to saving natural teeth. Proficient in implants and laser therapies, she is dedicated to providing quality dental care at Srinivasa Dental Clinic in Kakinada.
              </p>
            </div>

            <div class="d-flex flex-row justify-content-start">
              <p class="get_in_touch read_hide" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore()">
                Read More <i class="fa-solid fa-arrow-right"></i>
              </p>
            </div>
          </div>

          <div class="col-md-5 order-3  order-md-2 mt-5 text-center">
            <img src="assets/img/services/about.png" class="img-fluid dr_img_padding" alt="" class="servImg">
          </div>
        </div>
      </div>
    </section>

    <script>
      function toggleReadMore() {
        var showThisDiv = document.querySelector('.showthisdiv');
        var readMoreText = document.querySelector('.get_in_touch');

        if (showThisDiv.style.display === "none") {
          showThisDiv.style.display = "block";
          readMoreText.innerHTML = 'Read Less <i class="fa-solid fa-arrow-up"></i>';
        } else {
          showThisDiv.style.display = "none";
          readMoreText.innerHTML = 'Read More <i class="fa-solid fa-arrow-right"></i>';
        }
      }
    </script>


  </main>


  <?php include('./footer.php'); ?>





</body>

</html>