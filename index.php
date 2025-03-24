<?php include 'navbar.php'; ?>






<section class="only_first">
    <!-- <video id="myVideo" width="100%" height="auto" loop autoplay controls>
             <source src="assets/img/srinivasa/g.mp4" type="video/mp4">
             Your browser does not support the video tag.
         </video> -->

    <video id="myVideo" width="100%" height="auto" loop autoplay muted controls playsinline>
        <source src="assets/img/srinivasa/g.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- <button id="unmuteButton">Unmute</button> -->
</section>


<script>
  document.addEventListener("DOMContentLoaded", function () {
    let video = document.getElementById("myVideo");

    // Try playing immediately (some browsers may block it)
    video.play().then(() => {
      console.log("Autoplay with sound worked!");
    }).catch((error) => {
      console.log("Autoplay blocked. Waiting for user interaction...");
      document.body.addEventListener("click", function () {
        video.play();
      }, { once: true }); // Play on first click
    });
  });
</script>




<script>
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.getElementById('myVideo');
        const unmuteButton = document.getElementById('unmuteButton');

        // Function to unmute and play the video
        unmuteButton.addEventListener('click', () => {
            video.muted = false; // Unmute the video
            video.play(); // Play the video
            unmuteButton.style.display = 'none'; // Hide the unmute button
        });
    });
</script>


<!-- <section class="bg_images">
         <div class="container bg_container">
             <div class="row">
                 <div class="col-md-6">
                     <p class="hello_border"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                             viewBox="0 0 15 15" fill="none">
                             <g clip-path="url(#clip0_99_174)">
                                 <path
                                     d="M2.86075 4.05715C3.2263 3.80165 3.77736 3.85065 4.10558 4.12171L3.72914 3.57454C3.42619 3.14249 3.53469 2.67504 3.96714 2.37171C4.39958 2.06954 5.62497 2.88193 5.62497 2.88193C5.3193 2.4456 5.37647 1.8926 5.8128 1.58654C6.24914 1.28165 6.85114 1.38704 7.1568 1.82415L11.209 7.5486L10.6926 12.5555L6.38252 10.9837L2.62314 5.40971C2.31475 4.97065 2.4213 4.36515 2.86075 4.05715Z"
                                     fill="#EF9645" />
                                 <path
                                     d="M2.01831 7.24179C2.01831 7.24179 1.57809 6.60012 2.22015 6.16029C2.86142 5.72046 3.30126 6.36173 3.30126 6.36173L5.34331 9.33984C5.4137 9.2224 5.4907 9.10651 5.57665 8.99218L2.74242 4.85946C2.74242 4.85946 2.30259 4.21818 2.94426 3.77834C3.58553 3.33851 4.02537 3.97979 4.02537 3.97979L6.6912 7.86751C6.79037 7.78662 6.89187 7.70534 6.99648 7.62562L3.90598 3.11801C3.90598 3.11801 3.46615 2.47673 4.10781 2.0369C4.74909 1.59707 5.18892 2.23834 5.18892 2.23834L8.27942 6.74518C8.39298 6.67557 8.50537 6.61529 8.61815 6.55151L5.72948 2.33907C5.72948 2.33907 5.28965 1.69779 5.93092 1.25796C6.5722 0.818122 7.01203 1.4594 7.01203 1.4594L10.0664 5.91373L10.5307 6.59118C8.60648 7.91107 8.42331 10.3941 9.5227 11.9975C9.74242 12.3183 10.0633 12.0986 10.0633 12.0986C8.74376 10.174 9.14665 8.0114 11.0713 6.6919L10.5039 3.85223C10.5039 3.85223 10.2919 3.10401 11.0398 2.89168C11.788 2.67973 12.0003 3.42796 12.0003 3.42796L12.6556 5.37396C12.9154 6.14551 13.1919 6.91434 13.5578 7.64157C14.5911 9.6949 13.9739 12.2468 12.0256 13.5834C9.90031 15.0406 6.99492 14.4988 5.53737 12.374L2.01831 7.24179Z"
                                     fill="#FFDC5D" />
                                 <path
                                     d="M5.63667 12.9608C4.08111 12.9608 2.50922 11.3889 2.50922 9.83332C2.50922 9.61826 2.35172 9.44443 2.13667 9.44443C1.92161 9.44443 1.73145 9.61826 1.73145 9.83332C1.73145 12.1666 3.30333 13.7385 5.63667 13.7385C5.85172 13.7385 6.02556 13.5484 6.02556 13.3333C6.02556 13.1183 5.85172 12.9608 5.63667 12.9608Z"
                                     fill="#5DADEC" />
                                 <path
                                     d="M3.69244 13.7222C2.52577 13.7222 1.74799 12.9444 1.74799 11.7778C1.74799 11.5627 1.57416 11.3889 1.3591 11.3889C1.14405 11.3889 0.970215 11.5627 0.970215 11.7778C0.970215 13.3333 2.13688 14.5 3.69244 14.5C3.90749 14.5 4.08133 14.3262 4.08133 14.1111C4.08133 13.896 3.90749 13.7222 3.69244 13.7222ZM10.3035 1.27777C10.0889 1.27777 9.91466 1.45199 9.91466 1.66666C9.91466 1.88133 10.0889 2.05555 10.3035 2.05555C11.8591 2.05555 13.4147 3.45127 13.4147 5.16666C13.4147 5.38133 13.5889 5.55555 13.8035 5.55555C14.0182 5.55555 14.1924 5.38133 14.1924 5.16666C14.1924 3.02233 12.6369 1.27777 10.3035 1.27777Z"
                                     fill="#5DADEC" />
                                 <path
                                     d="M12.2478 0.516327C12.0331 0.516327 11.8589 0.674216 11.8589 0.888882C11.8589 1.10355 12.0331 1.2941 12.2478 1.2941C13.4144 1.2941 14.1759 2.15938 14.1759 3.22222C14.1759 3.43688 14.3661 3.6111 14.5811 3.6111C14.7962 3.6111 14.9537 3.43688 14.9537 3.22222C14.9537 1.73005 13.8033 0.516327 12.2478 0.516327Z"
                                     fill="#5DADEC" />
                             </g>
                             <defs>
                                 <clipPath id="clip0_99_174">
                                     <rect width="14" height="14" fill="white" transform="translate(0.970215 0.5)" />
                                 </clipPath>
                             </defs>
                         </svg> &nbsp; Welcome to Srinivasa Dental !</p>

                     <h1 class="transform_smile">Transform <span class="smile_text">Your Smile <img
                                 src="assets/img/services/2.png" alt="" class="img-fluid topimg">
                         </span> with Expert Dental
                         Care</h1>
                     <p class="mt-4 mb-4">Enjoy high-quality dental care in a comfortable and friendly environment. Start
                         your journey @ Srinivasa Dental for
                         <span class="heailther_text"> healthier, brighter smile</span> today!
                     </p>

                     <div class="d-flex  buttons_section_banner">
                         <div class="">

                             <a href="contact.php"> <button class="contacct_button">Contact Us</button></a>
                         </div>

                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                         <div class="d-flex ">

                             <div class="image_width">
                                 <img src="assets/img/srinivasa/Call.png" class="img-fluid ">
                             </div>
                             &nbsp;&nbsp;
                             <div class="text_div">
                                 <p><span class="dental_text_mini"> Dental 24H Emergency </span> <br><span
                                         class="num_mini">92900 19948</span></p>
                             </div>



                         </div>

                     </div>
                 </div>



                 <div class="col-md-6">
                     <img src="assets/img/srinivasa/Dentist.png" class="img-fluid" alt="">
                 </div>

             </div>
         </div>
     </section> -->

<main id="main">

    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-4 text-center">
                    <img src="assets/img/srinivasa/clipboard.png" alt="" class="img-fluid">
                    <h3 class="mini_con mt-4">Affordable Price</h3>
                    <p class="mini_para">Our hospital offers high-quality medical care at affordable prices,
                        ensuring everyone has access to essential health services.
                        We prioritize cost-effective treatments without compromising on patient safety or care.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/srinivasa/tools.png" alt="" class="img-fluid">
                    <h3 class="mini_con mt-4">Professional Dentist</h3>
                    <p class="mini_para">Our hospital features highly skilled and experienced dentists committed to providing exceptional dental care. With state-of-the-art equipment and personalized treatment plans, we ensure your dental health is in expert hands.
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="assets/img/srinivasa/chair.png" alt="" class="img-fluid">
                    <h3 class="mini_con mt-4">Satisfactory Service</h3>
                    <p class="mini_para">Our hospital is dedicated to providing patient-centered care that exceeds expectations. We ensure every visit is met with attentive service, compassionate staff, and a focus on your comfort and satisfaction.
                    </p>
                </div>



            </div>
        </div>
    </section>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="row">


                <div class="col-md-6 order-2 order-md-1" data-aos="fade-right">
                    <iframe class="video-frame   img_padding"
                        src="https://www.youtube.com/embed/UEm0ustQR1I?start=7&autoplay=1&mute=1&loop=10"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>





                <div class="col-md-6   order-1 order-md-2  content_padding" data-aos="fade-left">



                    <p class="welcome_text">WELCOME TO </p>
                    <h2 class="welcome_text_oncology">
                        Srinivasa Multispeciality Dental Hospital Dentist In Kakinada</h2>
                    <p class=poetsen_font>
                        We offer a comprehensive range of dental services designed to meet the needs of your entire family. Our clinic is committed to providing exceptional care in a welcoming and professional environment. We strive to ensure that every visit is both friendly and thorough, reflecting our dedication to your family’s dental health.
                        <br>
                        <br>
                        Our success is measured by each patient and each smile. That’s why we are the best dentist in Kakinada.
                    </p>


                    <!-- <div class="d-flex flex-row justify-content-start   ">
                             <a href="about.php">
                                 <button class="read_more_btn">Read More </button>
                             </a>
                         </div> -->

                </div>


            </div>




        </div>
    </section>
    <!-- End About Us Section -->

    <section>
        <div class="container">
            <div class="section-title text-center">
                <h2 class="apporach">Our Approach</h2>


                <p class="svg_apporach"> <svg xmlns="http://www.w3.org/2000/svg" width="266" height="10"
                        viewBox="0 0 266 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.11475 7.98364C11.7525 7.38504 26.5688 7.3551 66.7894 7.29524C129.595 7.20545 179.441 6.54699 193.295 5.58923C194.395 5.49944 106.357 4.84098 97.3157 5.31986C83.2214 6.09804 15.912 5.43958 2.36768 4.54167C-1.48249 4.30223 -0.0386618 3.46418 2.47082 3.2846C6.38973 2.9853 16.909 3.01524 45.751 3.0751C66.0331 3.10503 227.396 2.41663 245.031 1.18949C254.932 0.501097 260.948 -0.127436 263.698 0.0222149C266.001 0.141936 266.036 0.501097 264.042 1.48879C262.701 2.14726 264.214 2.53635 265.176 2.71593C266.654 3.01523 266.035 4.03286 264.179 4.84097C261.67 5.94839 257.338 5.91846 259.401 4.81104C259.848 4.5716 259.951 3.973 258.37 4.09272C253.763 4.45188 221.209 6.90615 212.374 7.32517C118.045 11.8746 25.9843 8.55231 6.49286 9.65973C-0.416819 10.0788 2.74587 8.3428 6.11475 7.98364Z"
                            fill="#25B4F8" />
                    </svg></p>


                <p class="  text-center service_text">we recognize that every patient is unique and deserves to
                    receive dental care that reflects their individual wants and needs. Using the latest advances
                    in dental technology, our dentists strive to help you achieve a happy, healthy smile you can’t
                    wait to show off.

                </p>
            </div>
        </div>
    </section>


    <section class="happpy_section mt-3  d-md-none ">
        <div class="container">
            <div class="row">
                <div class="col-6">

                    <div class=" ">

                        <div>
                            <img src="assets/img/srinivasa/experence.png" alt="" class="approc_image">
                        </div>

                        &nbsp; &nbsp;

                        <div class="">

                            <h1 class="text_dental counter  " data-max="10"> <span class="plus_symbol">+</span></h1>


                            <p class="text_para">Year Experience</p>
                        </div>

                    </div>

                </div>
                <div class="col-6">

                    <div class="">

                        <div>
                            <img src="assets/img/srinivasa/docters.png" alt="" class="approc_image">
                        </div>

                        &nbsp; &nbsp;

                        <div class="">
                            <h1 class="text_dental counter  " data-max="10"> <span class="plus_symbol">+</span></h1>


                            <p class="text_para">Doctor & Staff</p>
                        </div>

                    </div>

                </div>
                <div class="col-6 ">

                    <div class="  ">

                        <div class="">
                            <img src="assets/img/srinivasa/happy.png" alt="" class="approc_image">
                        </div>

                        &nbsp; &nbsp;

                        <div class="">
                            <h1 class="text_dental counter  " data-max="8126"> <span class="plus_symbol">+</span></h1>


                            <p class="text_para">Happy  Patients</p>
                        </div>

                    </div>

                </div>
                <div class="col-6">

                    <div class="">

                        <div>
                            <img src="assets/img/srinivasa/implants.png" alt="" class="approc_image">
                        </div>

                        &nbsp; &nbsp;

                        <div class="">
                            <h1 class="text_dental counter  " data-max="500"> <span class="plus_symbol">+</span></h1>


                            <p class="text_para">Implants</p>
                        </div>

                    </div>

                </div>

                <div class="col-6">

                    <div class="">

                        <div>
                            <img src="assets/img/srinivasa/invisligners.png" alt="" class="approc_image">
                        </div>

                        &nbsp; &nbsp;

                        <div class="">
                            <h1 class="text_dental counter  " data-max="120"> <span class="plus_symbol">+</span></h1>


                            <p class="text_para">Invisalign</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="happpy_section mt-3 d-none d-md-block">
        <div class="container">
            <div class="d-flex flex_div counter_section_spacing">
                <div class=" ">
                    <div class="d-flex flex_div">
                        <div>
                            <img src="assets/img/srinivasa/happy.png" alt="" class="approc_image img-fluid">
                        </div>
                        &nbsp; &nbsp;
                        <div class="marging_img_dix">
                            <h1 class="text_dental counter  " data-max="8126"> <span class="plus_symbol">+</span></h1>
                            <p class="text_para">Happy Patients</p>

                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="d-flex flex_div">
                        <div>
                            <img src="assets/img/srinivasa/experence.png" alt="" class="approc_image img-fluid">
                        </div>
                        &nbsp; &nbsp;
                        <div class="marging_img_dix">
                            <h1 class="text_dental counter  " data-max="10"> <span class="plus_symbol">+</span></h1>
                            <p class="text_para">Year Experience</p>

                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="d-flex flex_div">
                        <div>
                            <img src="assets/img/srinivasa/docters.png" alt="" class="approc_image img-fluid">
                        </div>
                        &nbsp; &nbsp;
                        <div class="marging_img_dix">
                            <h1 class="text_dental counter  " data-max="10"> <span class="plus_symbol">+</span></h1>
                            <p class="text_para">Doctor & Staff</p>

                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="d-flex flex_div">
                        <div>
                            <img src="assets/img/srinivasa/implants.png" alt="" class="approc_image img-fluid">
                        </div>
                        &nbsp; &nbsp;
                        <div class="marging_img_dix">
                            <h1 class="text_dental counter  " data-max="500"> <span class="plus_symbol">+</span></h1>
                            <p class="text_para">Implants</p>
                        </div>
                    </div>
                </div>

                <div class=" ">
                    <div class="d-flex flex_div">
                        <div>
                            <img src="assets/img/srinivasa/invisligners.png" alt="" class="approc_image img-fluid">
                        </div>
                        &nbsp; &nbsp;
                        <div class="marging_img_dix">
                            <h1 class="text_dental counter  " data-max="120"> <span class="plus_symbol">+</span></h1>
                            <p class="text_para">Invisalign</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <!-- Updated Bootstrap 5.2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>
        <script>
            function inVisible(element) {
                // Checking if the element is visible in the viewport
                var WindowTop = $(window).scrollTop();
                var WindowBottom = WindowTop + $(window).height();
                var ElementTop = element.offset().top;
                var ElementBottom = ElementTop + element.height();
                // Animating the element if it is visible in the viewport
                if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop) {
                    animate(element);
                }
            }

            function animate(element) {
                // Animating the element if not animated before
                if (!element.hasClass('ms-animated')) {
                    var maxval = element.data('max');
                    var html = element.html();
                    element.addClass("ms-animated");
                    $({
                        countNum: element.html()
                    }).animate({
                        countNum: maxval
                    }, {
                        // Duration 5 seconds
                        duration: 5000,
                        easing: 'linear',
                        step: function() {
                            element.html(Math.floor(this.countNum) + html);
                        },
                        complete: function() {
                            element.html(this.countNum + html);
                        }
                    });
                }
            }

            // When the document is ready
            $(function() {
                // This is triggered when the user scrolls the page
                $(window).scroll(function() {
                    // Checking if each item to animate is visible in the viewport
                    $("h1[data-max]").each(function() {
                        inVisible($(this));
                    });
                });
            });
        </script>
    </section>






    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="row">


                <div class="col-12 col-md-4 col-lg-5" data-aos="fade-right">
                    <img src="assets/img/srinivasa/groupimg.png" alt="" class="img-fluid">
                </div>





                <div class="col-12 col-md-8  col-lg-7   content_padding" data-aos="fade-left">



                    <p class="welcome_text">About us</p>
                    <h2 class="welcome_text_oncology">
                        Hear Why We Love What We Do</h2>
                    <p class=poetsen_font>
                        Your dental team, led by Dr. Kiran Raju, is dedicated to making our practice
                        patient-centered. We want each patient to feel like a member of the Srinivasa Dentistry
                        family, confidently putting their trust in our team. check our testimonials to see why we
                        are passionate about our patients’ experience. <br><br>
                        We will help you choose a custom care plan designed to help you accomplish the smile of
                        your dreams find more about dentist in kakinada at our What Patients Say Section.
                    </p>



                    <div class="row">
                        <div class="col-6">

                            <p class="tetx_color_about"><i class=" check_mark fa-solid fa-circle-check "></i>
                                Modern Equipment </p>
                            <p class="tetx_color_about"><i class=" check_mark fa-solid fa-circle-check "></i>
                                Comfortable Clinic</p>

                        </div>

                        <div class="col-6">

                            <p class="tetx_color_about"><i class=" check_mark fa-solid fa-circle-check "></i>
                                Always Monitored </p>
                            <p class="tetx_color_about"><i class=" check_mark fa-solid fa-circle-check "></i>
                                Online Appointment</p>

                        </div>
                    </div>







                    <div class="d-flex flex-content justify-content-between">
                        <div class="    ">
                            <a href="about.php">
                                <button class="read_more_btn">Read More </button>
                            </a>
                        </div>
                        <div class="   ">
                            <a href="appointment.php">
                                <button class="app_more_btn">Make an Appointment </button>
                            </a>
                        </div>
                    </div>
                </div>


            </div>




        </div>
    </section>



    <section>
        <div class="container mb-5">
            <div class="section-title text-center">
                <p class="welcome_text">Our services</p>
                <h2 class="apporach">Comprehensive Dental Services </h2>


                <p class="svg_apporach_service"> <svg xmlns="http://www.w3.org/2000/svg" width="266" height="10"
                        viewBox="0 0 266 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.11475 7.98364C11.7525 7.38504 26.5688 7.3551 66.7894 7.29524C129.595 7.20545 179.441 6.54699 193.295 5.58923C194.395 5.49944 106.357 4.84098 97.3157 5.31986C83.2214 6.09804 15.912 5.43958 2.36768 4.54167C-1.48249 4.30223 -0.0386618 3.46418 2.47082 3.2846C6.38973 2.9853 16.909 3.01524 45.751 3.0751C66.0331 3.10503 227.396 2.41663 245.031 1.18949C254.932 0.501097 260.948 -0.127436 263.698 0.0222149C266.001 0.141936 266.036 0.501097 264.042 1.48879C262.701 2.14726 264.214 2.53635 265.176 2.71593C266.654 3.01523 266.035 4.03286 264.179 4.84097C261.67 5.94839 257.338 5.91846 259.401 4.81104C259.848 4.5716 259.951 3.973 258.37 4.09272C253.763 4.45188 221.209 6.90615 212.374 7.32517C118.045 11.8746 25.9843 8.55231 6.49286 9.65973C-0.416819 10.0788 2.74587 8.3428 6.11475 7.98364Z"
                            fill="#25B4F8" />
                    </svg>
                </p>
                <h2 class="apporach"> In kakinada include</h2>


                <p class="  text-center service_text mb-5">General and cosmetic dentistry can give you a smile you’re happy to show off. Modern cosmetic dentistry techniques make it easier than ever for you to have a bright, even smile. Visit Srinivasa Dental Clinic in Kakinada.

                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="welcome_text_oncology mt-5 mb-4">CROWNS, BRIDGES <br> DENTURES</h2>
                    <p class="svg_apporach_service"> <svg xmlns="http://www.w3.org/2000/svg" width="266"
                            height="10" viewBox="0 0 266 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.11475 7.98364C11.7525 7.38504 26.5688 7.3551 66.7894 7.29524C129.595 7.20545 179.441 6.54699 193.295 5.58923C194.395 5.49944 106.357 4.84098 97.3157 5.31986C83.2214 6.09804 15.912 5.43958 2.36768 4.54167C-1.48249 4.30223 -0.0386618 3.46418 2.47082 3.2846C6.38973 2.9853 16.909 3.01524 45.751 3.0751C66.0331 3.10503 227.396 2.41663 245.031 1.18949C254.932 0.501097 260.948 -0.127436 263.698 0.0222149C266.001 0.141936 266.036 0.501097 264.042 1.48879C262.701 2.14726 264.214 2.53635 265.176 2.71593C266.654 3.01523 266.035 4.03286 264.179 4.84097C261.67 5.94839 257.338 5.91846 259.401 4.81104C259.848 4.5716 259.951 3.973 258.37 4.09272C253.763 4.45188 221.209 6.90615 212.374 7.32517C118.045 11.8746 25.9843 8.55231 6.49286 9.65973C-0.416819 10.0788 2.74587 8.3428 6.11475 7.98364Z"
                                fill="#25B4F8" />
                        </svg>
                    </p>
                    <p class="poetsen_font mt-4">Srinivasa Dental Clinic provides treatments like Dental crowns,
                        Dental
                        Bridges, and
                        Dentures.</p>
                    <div class="    ">
                        <a href="services.php">
                            <button class="read_more_btn mt-4 mb-2">Read More </button>
                        </a>
                    </div>
                </div>

                <style>
                    /* Basic styles for the carousel */
                    .carousel-container {
                        position: relative;
                        width: 100%;
                        overflow: hidden;
                        margin-top: 0px;
                    }

                    .carousel {
                        display: flex;
                        transition: transform 0.5s ease-in-out;
                        /* Smooth transition for sliding */
                        width: 100%;
                    }

                    .slide {
                        min-width: 100%;
                        /* Each slide takes full width */
                        box-sizing: border-box;
                    }

                    .imgCar {
                        width: 100%;
                        height: auto;

                    }

                    /* Buttons for previous and next */
                    .prev1,
                    .next1 {
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        background-color: rgba(0, 0, 0, 0.5);
                        color: white;
                        border: none;
                        padding: 10px;
                        cursor: pointer;
                    }

                    .prev1 {
                        left: 10px;
                    }

                    .next1 {
                        right: 10px;
                    }

                    /* Optional: Disable button text selection */
                    .prev1,
                    .next1 {
                        user-select: none;
                    }
                </style>

                <div class="col-md-6 carPart">
                    <div class="row">
                        <div class="col-10">
                            <div class="carousel-container">
                                <div class="carousel" id="carouselSlider">
                                    <!-- <div class="slide">
                                             <img src="assets/img/services/c.png" alt="" class="img-fluid imgCar">
                                         </div>
                                         <div class="slide">
                                             <img src="assets/img/services/d.png" alt="" class="img-fluid imgCar">
                                         </div>
                                         <div class="slide">
                                             <img src="assets/img/services/e.png" alt="" class="img-fluid imgCar">
                                         </div> -->
                                    <div class="slide">
                                        <img src="assets/img/services/equip.jpg" alt="" class="img-fluid imgCar">
                                    </div>
                                    <div class="slide">
                                        <img src="assets/img/services/equip1.jpg" alt="" class="img-fluid imgCar">
                                    </div>
                                    <div class="slide">
                                        <img src="assets/img/services/equipmet.png" alt="" class="img-fluid imgCar">
                                    </div>
                                    <div class="slide">
                                        <img src="assets/img/services/equi.png" alt="" class="img-fluid imgCar">
                                    </div>
                                </div>
                                <button class="prev1" onclick="moveSlide(-1)">&#10094;</button>
                                <button class="next1" onclick="moveSlide(1)">&#10095;</button>
                            </div>
                        </div>
                        <div class="col-2 minicar">
                            <img src="assets/img/srinivasa/clip_art.png" alt="" class="img-fluid  line_up_img">
                        </div>

                    </div>

                </div>
            </div>
        </div>





        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('carouselSlider');
                const slides = document.querySelectorAll('.carousel .slide');
                const totalSlides = slides.length;
                let currentSlide = 0;
                let slideWidth = slides[0].offsetWidth;

                // Function to update the slide position
                function updateSlidePosition() {
                    carousel.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
                }

                // Function to move to the next or previous slide
                function moveSlide(n) {
                    currentSlide += n;

                    if (currentSlide >= totalSlides) {
                        currentSlide = 0; // Loop back to the first slide
                    } else if (currentSlide < 0) {
                        currentSlide = totalSlides - 1; // Loop to the last slide
                    }

                    updateSlidePosition(); // Update the position to reflect the move
                }

                // Auto-slide functionality
                function autoSlide() {
                    moveSlide(1); // Move to the next slide
                }

                // Set the auto-slide interval (adjust time as needed)
                setInterval(autoSlide, 3000); // Auto-slide every 3 seconds

                // Handle window resizing to adjust slide width
                window.addEventListener('resize', function() {
                    slideWidth = slides[0].offsetWidth; // Recalculate slide width
                    updateSlidePosition(); // Adjust the position after resizing
                });

                // Initialize the first slide
                updateSlidePosition();
            });
        </script>
    </section>




    <!--<section>
             <div class="container">
                 <div class="section-title text-center">
                     <h2 class="apporach">Explore our virtual tour of the hospital!</h2>
                 </div>
             </div>

             <div class="container ">
                 <div class="row">

                     

                     <div class=" col-12 mt-5 d-block d-md-none">
                         <div style="text-align: center;">
                             <video controls style="width: 100%; max-width: 560px; height: auto;">
                                 <source src="assets/img/hospital_video/WhatsApp Video 2024-10-25 at 11.05.18.mp4" type="video/mp4">
                                 Your browser does not support the video tag.
                             </video>
                         </div>
                     </div>


                     <div class="   col-lg-6 mt-5 d-none d-md-block">
                         <div style="text-align: center;">
                             <video class="video_tag_messures" controls>
                                 <source src="assets/img/hospital_video/WhatsApp Video 2024-10-25 at 11.05.18.mp4" type="video/mp4">
                                 Your browser does not support the video tag.
                             </video>
                         </div>
                     </div>

                     <div class="col-12 col-lg-6 mt-5">
                         <div style="text-align: center;">
                             <img src="assets/img/hospital_video/WhatsApp Image 2024-10-25 at 11.05.18 (1).jpeg" alt="" class="img-fluid">
                         </div>
                     </div>

                 </div>
             </div>
         </section>-->

    <?php include('./videotestimonials.php'); ?>


    <section class="blogs_section_new">
        <div class="container">
            <div class="section-title text-center">
                <p class="our_blogs my-2">Our Blogs</p>
                <h2 class="apporach">Blogs & Articles </h2>



                <p class="mb-5  ">General and cosmetic dentistry can give you a smile you’re proud to show off. Modern cosmetic dentistry techniques make it easier than ever to achieve a bright, even smile. Visit Srinivasa Dental Clinic in Kakinada.

                </p>
            </div>
        </div>

        <div class="container ">
            <div class="row">

                <?php
                include './db.connection/db_connection.php';

                // Fetch latest 3 blogs with video
                $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<div class='row'>"; // Start row for card layout

                    while ($row = $result->fetch_assoc()) {
                        $blog_id = $row['id'];
                        $title = $row['title'];
                        $main_content = $row['main_content'];
                        $main_image = $row['main_image'];
                        $video = $row['video'];

                        echo "<div class='col-md-4 mb-4'>"; // Create 3 equal-width columns for medium devices
                        echo "<div class='card h-100'>"; // Start card

                        // Display the blog title
                        echo "<div class='card-body'>";


                        // Display video if available
                        if (!empty($video)) {
                            $video_path = "./admin/uploads/videos/{$video}";
                            echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
                        }
                        // If no video, display main image
                        elseif (!empty($main_image)) {
                            $main_image_path = "./admin/uploads/photos/{$main_image}";
                            echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
                        }
                        echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
                        // Display a short portion of the blog content
                        echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

                        // Link to full blog post
                        echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

                        echo "</div>"; // End card body
                        echo "</div>"; // End card
                        echo "</div>"; // End column
                    }

                    echo "</div>"; // End row
                } else {
                    echo "No blog posts found.";
                }

                $conn->close();
                ?>










               <div class="mt-5 d-none d-md-block" >
                    <a href="blogs.php" style="text-decoration: none;">
                        <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More<i
                                class="fa-solid fa-arrow-right mt-1"></i></p>
                    </a>
                </div>

                <div class="d-flex flex-row  mt-4 d-md-none" style="z-index: 99;">
                    <a href="blogs.php" style="text-decoration: none;">
                        <p class="view_more_btn ">View More<i class="fa-solid fa-arrow-right"></i></p>
                    </a>
                </div> 

            </div>
        </div>

    </section> 


    <section>
        <div class="container">
            <p class="welcome_text">Our Happy Client Testimonial</p>

            <div class="row">

                <div class="col-lg-6">
                    <h1 class="service_test_text">The Honest Review
                        From<br> Our Client</h1>
                    <p class="service_test_text_para">"I had an exceptional experience at Srinivasa Dental. The staff were incredibly attentive and made me feel comfortable throughout my treatment. I highly recommend this clinic for its professionalism and compassionate care."</p>
                    <a href="testimonials.php" style="text-decoration: none;"> <button class="reviews_btn mb-5"> See All Review</button></a>
                </div>

                <div class="col-lg-6">

                    <div class="card mb-3 bodu_card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-8">
                                <div class="card-body ">
                                    <img src="assets/img/services/1.png" alt=""
                                        class="img-fluid testy   d-none d-md-block">


                                    <p class="card-text  text_of_the_card">"My name is Kamala suffering from tooth pains severely and as suggested by my brother I have gone to the Srinivasa Multi Speciality Dental hospital Kakinada for the treatment. Dr. Kiran Raju garu checked and advised me for the full mouth rehabilitation due to cavities and deterioration..."</p>
                                    <h6 class="card-title name_of_the_card kamall">Mrs.Kamala Gandi</h6>
                                    <!-- <p class="card-text work_of_the_card"><small
                                                 class="text-muted">Designer</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-row justify-content-end">
                                <img src="assets/img/services/kamalagandhi.png" class="img-fluid rounded-start" alt="...">
                            </div>


                        </div>
                    </div>

                    <div class="card mb-3 bodu_card" style="max-width: 540px;">
                        <div class="row g-0">

                            <div class="col-md-8">
                                <div class="card-body ">
                                    <img src="assets/img/services/1.png" alt=""
                                        class="img-fluid testy   d-none d-md-block">


                                    <p class="card-text  text_of_the_card">" I am Ravi Babu and visited Srinivasa Multi Speciality Dental Hospital for replacement of metal crowns with zirconia crowns. The hospital ambiance is pleasant, elegant, neat and clean. Doctors and supporting staff are excellent..."</p>
                                    <h6 class="card-title name_of_the_card kamall">Mr.M Ravi Babu</h6>

                                    <!-- <p class="card-text work_of_the_card"><small
                                                 class="text-muted">Designer</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-row justify-content-end">
                                <img src="assets/img/services/ravi.png" class="img-fluid rounded-start" alt="...">
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.testimonials-slider', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                },
                slidesPerView: 1, // Default slides per view (for screens < 768px)
                breakpoints: {
                    // when window width is >= 768px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }
                }
            });
        });
    </script>



 


<!-- 
    <section class="blog_section ">
     <div class="container">
       <div class="section-title text-center">

         <h2 class="ask_heading">Blogs & articles </h2>
         <p class="mb-3  ">General and cosmetic dentistry can give you a smile you’re proud to show off. Modern cosmetic dentistry techniques make it easier than ever to achieve a bright, even smile. Visit Srinivasa Dental Clinic in Kakinada.

       </div>
     </div>

     <div class="container">
       <div class="row">

         <?php
          include './db.connection/db_connection.php';

          // Fetch latest 3 blogs with video
          $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo "<div class='row'>"; // Start row for card layout

            while ($row = $result->fetch_assoc()) {
              $blog_id = $row['id'];
              $title = $row['title'];
              $main_content = $row['main_content'];
              $main_image = $row['main_image'];
              $video = $row['video'];

              echo "<div class='col-md-4 mb-4'>"; // Create 3 equal-width columns for medium devices
              echo "<div class='card h-100'>"; // Start card

              // Display the blog title
              echo "<div class='card-body'>";


              // Display video if available
              if (!empty($video)) {
                $video_path = "./admin/uploads/videos/{$video}";
                echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
              }
              // If no video, display main image
              elseif (!empty($main_image)) {
                $main_image_path = "./admin/uploads/photos/{$main_image}";
                echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
              }
              echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
              // Display a short portion of the blog content
              echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

              // Link to full blog post
              echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

              echo "</div>"; // End card body
              echo "</div>"; // End card
              echo "</div>"; // End column
            }

            echo "</div>"; // End row
          } else {
            echo "No blog posts found.";
          }

          $conn->close();
          ?>



         <div class="mt-5 d-none d-md-block">
           <a href="blogs.php" style="text-decoration: none;">
             <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More<i
                 class="fa-solid fa-arrow-right mt-1"></i></p>
           </a>
         </div>

         <div class="d-flex flex-row justify-content-center mt-4">
           <a href="blogs.php" style="text-decoration: none;">
             <p class="view_more_btn d-md-none">View More<i class="fa-solid fa-arrow-right"></i></p>
           </a>
         </div>

       </div>
     </div>

   </section> -->








    <!-- End Testimonials Section -->



  <section  >
  <div class="container last_container   ">
        <div class="row">
            <div class="col-md-6 padding_text_madam order-2 order-md-1">
                <h1 class="madam_text">Do You Want Smile Like A Celebrity
                     </h1>
                <p class="text_mam">Scheduling an appointment at Srinivasa Dental is easy and convenient. Simply call us at +91-9290019948 or use our online booking system to choose a time that works for you.
                </p>
                <div class=" btn_div   ">
                    <a href="appointment.php">
                        <button class="read_more_btn">Book an Appointment </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <img src="assets/img/srinivasa/deep.png" class="img-fluid mam_image" alt="">
            </div>

        </div>
    </div>
 
  </section>




</main><!-- End #main -->

<?php include('./footer.php'); ?>


</body>

</html>