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
                    <li><a class="nav-link scrollto" href="services.php">Services</a></li>
                    <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
                    <li><a class="nav-link" href="blogs.php">Blogs</a></li>
                    <li><a class="nav-link scrollto" href="testimonials.php">What Patients Say</a></li>
                    <li><a href="appointment.php" class="appointment-btn scrollto d-lg-none" style="z-index: 999;">
                            Appointment
                        </a></li>
                </ul>
            </nav>

            <a href="appointment.php" class="appointment-btn scrollto d-none d-lg-block" style="z-index: 999;">
                Appointment
            </a>
        </div>
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
    <footer id="footer">
        <div class="footer-top">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 py-2">
                        <a href="#"> <img src="assets/img/srinivasa/logo.png" class="img-fluid" alt=""></a>
                        <p class="foot_para">Srinivasa Multispeciality Dental Hospital Jawahar street, Beside MRF
                            showroom, opp Vivekananda statue- kulaicheruvu park Kakinada-1
                        </p>
                        <p class="foot_para"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <g clip-path="url(#clip0_94_738)">
                                    <path d="M11.5289 10.0012L9.15863 8.22346V4.60227C9.15863 4.23816 8.86432 3.94385 8.50021 3.94385C8.13611 3.94385 7.8418 4.23816 7.8418 4.60227V8.55271C7.8418 8.76009 7.93925 8.95566 8.10516 9.07944L10.7388 11.0547C10.8573 11.1435 10.9956 11.1863 11.1332 11.1863C11.334 11.1863 11.5315 11.0961 11.6606 10.9223C11.8792 10.6319 11.8199 10.2191 11.5289 10.0012Z" fill="white" />
                                    <path d="M8.5 0C3.81281 0 0 3.81281 0 8.5C0 13.1872 3.81281 17 8.5 17C13.1872 17 17 13.1872 17 8.5C17 3.81281 13.1872 0 8.5 0ZM8.5 15.6832C4.5397 15.6832 1.3168 12.4603 1.3168 8.5C1.3168 4.5397 4.5397 1.3168 8.5 1.3168C12.461 1.3168 15.6832 4.5397 15.6832 8.5C15.6832 12.4603 12.4603 15.6832 8.5 15.6832Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_94_738">
                                        <rect width="17" height="17" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg> &nbsp; &nbsp; Clinic Time <br>
                            Mon-Sat – 9:00 AM To 8:30 PM <br> Sun – 9:00 AM To 1:00 PM</p>
                        <p class="foot_para">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_94_734)">
                                    <path d="M13.6189 10.4377L11.6652 8.48393C10.9674 7.78617 9.7812 8.0653 9.50209 8.97237C9.29276 9.60038 8.595 9.94927 7.96701 9.80969C6.57148 9.4608 4.68751 7.64661 4.33863 6.18131C4.1293 5.55329 4.54796 4.85553 5.17595 4.64622C6.08304 4.36712 6.36215 3.18092 5.66439 2.48315L3.71064 0.529413C3.15243 0.0409771 2.31511 0.0409771 1.82668 0.529413L0.500926 1.85517C-0.824828 3.2507 0.640479 6.94885 3.91997 10.2283C7.19947 13.5078 10.8976 15.0429 12.2932 13.6474L13.6189 12.3216C14.1074 11.7634 14.1074 10.9261 13.6189 10.4377Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_94_734">
                                        <rect width="14" height="14" fill="white" transform="translate(0 0.164062)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            +91-08842342346 
                        </p>
                        <p class="foot_para">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                <g clip-path="url(#clip0_94_734)">
                                    <path d="M13.6189 10.4377L11.6652 8.48393C10.9674 7.78617 9.7812 8.0653 9.50209 8.97237C9.29276 9.60038 8.595 9.94927 7.96701 9.80969C6.57148 9.4608 4.68751 7.64661 4.33863 6.18131C4.1293 5.55329 4.54796 4.85553 5.17595 4.64622C6.08304 4.36712 6.36215 3.18092 5.66439 2.48315L3.71064 0.529413C3.15243 0.0409771 2.31511 0.0409771 1.82668 0.529413L0.500926 1.85517C-0.824828 3.2507 0.640479 6.94885 3.91997 10.2283C7.19947 13.5078 10.8976 15.0429 12.2932 13.6474L13.6189 12.3216C14.1074 11.7634 14.1074 10.9261 13.6189 10.4377Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_94_734">
                                        <rect width="14" height="14" fill="white" transform="translate(0 0.164062)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            +91-9290019948
                        </p>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 py-2">
                        <h1 class="foot_head">Helpfull Link</h1>
                        <a href="index.php">
                            <p class="foot_para">Home</p>
                        </a><a href="about.php">

                            <p class="foot_para">About us</p>

                        </a><a href="testimonials.php">
                            <p class="foot_para">What Patients Say</p>
                        </a><a href="blogs.php">
                            <p class="foot_para">Blog</p>
                        </a><a href="contact.php">
                            <p class="foot_para">Contact</p>
                        </a>

                        <div class="d-flex">
                            <a href="https://www.facebook.com/srinivasadentalkakinada/" target="_blank"> <img src="assets/img/srinivasa/facebook.png" class="img-fluid" alt=""></a> &nbsp;&nbsp;
                            <a href="https://www.instagram.com/srinivasadentalkakinada/" target="_blank"> <img src="assets/img/srinivasa/instagram.png" class="img-fluid" alt=""></a> &nbsp;&nbsp;

                            <a href=" https://www.youtube.com/@srinivasadentalkakinada" target="_blank"> <img src="assets/img/srinivasa/youtube.png" class="img-fluid" alt=""></a>

                        </div>


                    </div>
                    <div class="col-6 col-md-6 col-lg-3 py-2">
                        <h1 class="foot_head">Treatments
                        </h1>
                        <p class="foot_para">Root Canal</p>
                        <p class="foot_para">Dental Implants</p>

                        <p class="foot_para">Teeth Filling</p>
                        <p class="foot_para">Dental Braces</p>
                        <p class="foot_para">Teeth Cleaning</p>
                        <p class="foot_para">Teeth Whitening</p>


                    </div>
                    <div class="col-12 col-md-6 col-lg-3 py-2">
                        <h1 class="foot_head">Treatments
                        </h1>
                        <p class="foot_para">Smile Makeover</p>
                        <p class="foot_para">Tooth Crown & Bridges</p>

                        <p class="foot_para">Dentures</p>
                        <p class="foot_para">Tooth extraction</p>
                        <p class="foot_para">Teeth Scaling</p>
                        <p class="foot_para">Full Mouth Restoration</p>


                    </div>

                </div>
            </div>
        </div>

        <div class="footer-area-bottom theme-bg" style="background-color:  #000A2D;">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-xl-8 col-lg-9 col-md-12 col-12">
                        <div class="footer-widget__copyright">
                            <p class="mini_text last_text" style="color: #ffffff">
                                ©2024 SRINIVASA DENTAL . All Rights Reserved. Designed &
                                Developed by
                                <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none; color: #ffffff">Bhavi Creations</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-12 col-12">
                        <div class="footer-widget__copyright-info info-direction">
                            <p class="mini_text last_text">
                                <a href="terms.html" style="text-decoration: none; color: #ffffff">Terms & conditions
                                </a>
                                <a href="privacy.html" style="text-decoration: none; color: #ffffff">
                                    Privacy & policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- WhatsApp link -->


    <!-- Scroll Up Button  -->
    <button id="scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up "></i></button>

    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Optional, smooth scrolling animation
            });
        }

        // Show scroll button when scrolling down
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }
    </script>

    <style>
        #scrollBtn {
            display: none;
            /* Initially hide the button */
            position: fixed;
            /* Fix the position of the button */
            bottom: 20px;
            /* Adjust the bottom distance */
            right: 20px;
            /* Adjust the right distance */
            z-index: 999;
            /* Set a high z-index to ensure the button is on top */
            padding: 10px 15px;
            background-color: #01539D;
            ;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>


    <a href="https://api.whatsapp.com/send?phone=918406907980" style="color: #fff;" class="whatsapp-link" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <div id="preloader"></div>
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>




</body>

</html>