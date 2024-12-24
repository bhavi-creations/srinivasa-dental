<?php
include './db.connection/db_connection.php';
// Fetch blog data
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10932795730');
</script>



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
        <!-- ======= Blogs Section ======= -->
        <section id="blogs">
            <div class="container">
                <div class="section-title">
                    <h2>Blogs</h2>
                </div>

                <div class="row" id="blogRow">
                    <?php
                    $counter = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($counter === 0) {
                                echo '
                                    <div class="col-md-9  order-1 order-md-1" id="selectedblog">
                                    <div id="selectedBlogId" style="display: none">' . $counter . '</div>
                                    <h2 class="mb-3  tittle_text">' . $row['title'] . '</h2>
                                    <video class="custom-video" muted  autoplay    controls style="width: 100%; height: auto;">
                                    <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <p>Published On  ';
                    ?>




                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                                echo '</p>
                                    
                                    <div class="row d-flex my-3">';



                                echo '<div>';
                                ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif; ?>
                                <?php echo '</div>';

                                echo '
                                        </div>';
                                echo $row['content'];
                                echo '
                                            <div style="display: none" id="lastchild">
                                                    <video onclick="swapDivs(`' . $counter . '`)"
                                                        class="custom-video" controls muted autoplay style="width: 100%; height: auto;">
                                                        <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>
                                            </div>';
                                echo '</div>';





                                if ($result->num_rows > 1) {
                                    echo '<div class="col-md-3  order-2 order-md-2 scrollable-div">';
                                }
                            } else {
                                echo '<div id="sidebardiv' . $counter . '""><video
                                            class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>';
                                echo '<div class="col-md-9  order-2 order-md-1" id="lastchild" style="display: none">
                                        <h2 class="mb-3" >' . $row['title'] . '</h2>
                                        <video class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p>Published On ';
                                ?>
                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));

                                echo '</p>
                                         <div class="row d-flex my-3">
                                         <div class="row">
                                         <div class="col-9"></div>
                                         <button onclick="hideDiv()" class="btn btn-primary col-3 readmore_btn" id="read">Read More</button>
                                         
                                           </div>
                                         ';


                                echo '<div id="images" style="display:none;">'; ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif;
                                echo $row['content'];
                                ?>
                    <?php echo '</div>';




                                echo '
                                        </div>';
                                echo '</div></div>';
                            }
                            $counter++;
                        }
                        if ($result->num_rows > 1) {
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


        <script>
            state = 1;

            function hideDiv() {

                if (state == 0) {
                    var div = document.getElementById('images');
                    document.getElementById('read').innerHTML = "Read More";
                    div.style.display = 'none';
                    state = 1;
                } else {
                    var div = document.getElementById('images');
                    div.style.display = 'block';
                    document.getElementById('read').innerHTML = "Read less";
                    state = 0;
                }

            }


            function swapDivs(currentDivId) {
                var currentDiv = document.getElementById('sidebardiv' + currentDivId);
                currentDiv.setAttribute('id', 'sidebardiv' + document.getElementById('selectedBlogId').innerText);
                console.log(document.getElementById('selectedBlogId').innerText);
                let selectedBlog = document.getElementById('selectedblog');
                let currentDivLastChild = currentDiv.querySelector('#lastchild');
                let selectedDivLastChild = selectedBlog.querySelector('#lastchild');
                var currentDivNewDiv = document.createElement('div');
                currentDivNewDiv.innerHTML = selectedBlog.querySelector('#lastchild').innerHTML;
                let currentDivNewDivLastChild = document.createElement('div');
                currentDivNewDivLastChild.id = 'lastchild';
                currentDivNewDivLastChild.style.display = 'none';
                selectedBlog.removeChild(selectedDivLastChild);
                selectedBlog.removeChild(document.getElementById('selectedBlogId'));
                currentDivNewDivLastChild.innerHTML = selectedBlog.innerHTML;
                currentDivNewDiv.appendChild(currentDivNewDivLastChild);
                let selectedBlogNewDiv = document.createElement('div');
                selectedBlogNewDiv.innerHTML = currentDiv.querySelector('#lastchild').innerHTML;
                let selectedBlogIDNewDiv = document.createElement('div');
                selectedBlogIDNewDiv.id = 'selectedBlogId';
                selectedBlogIDNewDiv.innerText = currentDivId;
                let selectedBlogNewDivLastChild = document.createElement('div');
                selectedBlogNewDivLastChild.id = 'lastchild';
                selectedBlogNewDivLastChild.style.display = 'none';
                currentDiv.removeChild(currentDivLastChild);
                selectedBlogNewDivLastChild.innerHTML = currentDiv.innerHTML;
                selectedBlogNewDiv.appendChild(selectedBlogIDNewDiv);
                selectedBlogNewDiv.appendChild(selectedBlogNewDivLastChild);
                currentDiv.innerHTML = currentDivNewDiv.innerHTML;
                selectedBlog.innerHTML = selectedBlogNewDiv.innerHTML;

                // Manage volume
                let currentDivVideo = currentDiv.querySelector('video');
                let selectedBlogVideo = selectedBlog.querySelector('video');
                if (currentDivVideo) currentDivVideo.muted = true; // Mute the sidebar video
                if (selectedBlogVideo) selectedBlogVideo.muted = false; // Unmute the main video

                // Scroll to main video section
                selectedBlog.scrollIntoView({
                    behavior: 'smooth'
                });




            }
        </script>

    </main>
    <!-- ======= Footer ======= -->
    <?php include('./footer.php'); ?>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <!-- Google tag (gtag.js) -->
    <amp-analytics type="gtag" data-credentials="include">
        <script type="application/json">
            {
                "vars": {
                    "gtag_id": "AW-10932795730",
                    "config": {
                        "AW-10932795730": {
                            "groups": "default"
                        }
                    }
                },
                "triggers": {
                    "conversionEvent": {
                        "on": "visible",
                        "request": "event",
                        "vars": {
                            "event_name": "conversion",
                            "send_to": ["AW-10932795730/UbfvCITsyZcYENLylN0o"]
                        }
                    }
                }
            }
        </script>
    </amp-analytics>

</body>

</html>