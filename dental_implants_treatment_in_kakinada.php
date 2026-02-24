 
  <?php include 'navbar.php'; ?>




  <main id="main">



  

    <img src="assets/img/services/dental-implents/dentalimplents.png" alt="" class="img-fluid">

    <div class="container service_img_cad_text">
      <p class=" service_slider_name">Dental implants</p>
      <a href="contact_srinivasa_multispeciality_dental_hospital.php">
        <button class="read_more__slider">Contact Us</button>
      </a>
    </div>



    <section class="service_section ">
      <div class="container">
        <div class="row">

          <div class="service_contain_text">

            <p class="root_treatment"> Dental implants Treatment</p>
            <p>
              Dental implants are a modern and effective way to replace missing teeth, offering a permanent and natural-looking solution. An implant consists of a titanium post surgically placed into the jawbone, acting as an artificial tooth root. Once healed, a custom-made crown is attached to the implant, restoring the appearance and function of your natural teeth. </p>
            <p>
              Unlike traditional dentures or bridges, dental implants are durable, stable, and designed to last a lifetime with proper care. They prevent bone loss, maintain facial structure, and provide a confident, comfortable smile. Whether you're missing one tooth or several, dental implants are the gold standard for restoring oral health and aesthetics.
            </p>

          </div>
        </div>
      </div>
    </section>

    <section class="section_color">
      <div class="container">
        <h4 class="root_step text-center mb-5">Advanced Dental Implants for a Healthy and Beautiful Smile
        </h4>
        <div class="row my-3">
          <div class="col-12 col-md-4  card-wrapper ">
            <div class="card">
              <img src="./assets/img/services/dental-implents/placement.png" alt="" class="img-fluid">
              <h4 class="canal_step">Step1</h4>
              <p>
                The first step involves surgically placing a titanium implant into the jawbone. This acts as an artificial tooth root and provides a stable foundation for the replacement tooth. The area is numbed to ensure comfort during the procedure.

            </div>
          </div>
          <div class="col-12 col-md-4  card-wrapper">
            <div class="card">
              <img src="./assets/img/services/dental-implents/osseointegration.png" alt="" class="img-fluid">
              <h4 class="canal_step">Step2</h4>
              <p>
                Over the next few months, the implant fuses with the jawbone in a natural process called osseointegration. This creates a strong and durable bond, ensuring long-term stability.

            </div>
          </div>
          <div class="col-12 col-md-4  card-wrapper">
            <div class="card">
              <img src="./assets/img/services/dental-implents/crown.png" alt="" class="img-fluid">
              <h4 class="canal_step">Step3</h4>
              <p>
                Once healing is complete, a custom-made dental crown is securely attached to the implant. This crown is designed to match the color, shape, and size of your natural teeth, restoring functionality and appearance.

            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- <section class="sectionForm">
      <div class="container">
        <div class="row servSect">
          <div class="col-md-7 dr_content_padding   ">
            <h5 class="poetsen_font11">
              Dental implants are artificial tooth roots placed in the jawbone to support and anchor replacement teeth or bridges.</h2>
              <h2 class="dr_welcome_text1 mt-4 mb-4">Best in Class Dental Implants Treatment in
                kakinada</h2>
              <p class="poetsen_font1">
                Dental implants are a highly effective solution for replacing missing teeth, offering a stable and natural-looking alternative to traditional dentures or bridges. The procedure involves surgically placing a titanium post into the jawbone, which serves as a replacement root for the new tooth. Over time, the implant integrates with the bone through a process called osseointegration, providing a strong foundation for the artificial tooth. Implants offer benefits such as improved chewing ability, comfort, and preservation of jawbone structure. With proper care and regular dental visits, dental implants can last for many years, making them a durable and reliable option for restoring a complete smile.

              </p>
              <div class="showthisdiv " style="display:none ">
                <p class="poetsen_font1"> Dental implants not only enhance the function and appearance of your smile but also contribute to overall oral health by preventing bone loss that often occurs with missing teeth. They offer a permanent solution, unlike removable dentures, and can support single crowns, bridges, or even full dentures, making them versatile for various needs. The implant process typically involves multiple stages, including the initial placement of the implant, a healing period, and the attachment of the final restoration. Although the procedure is considered safe, it requires a thorough evaluation to ensure the patient has adequate bone density and overall health. Post-implant care involves regular dental check-ups and good oral hygiene to ensure the longevity and success of the implants.</p>
              </div>
              <div class="d-flex flex-row justify-content-start">
                <p class="get_in_touch" style="color: #474FA0; cursor: pointer;" onclick="toggleReadMore()">
                  Read More <i class="fa-solid fa-arrow-right"></i></p>
              </div>
          </div>

          <div class="col-md-5 order-3  order-md-2 mt-5 text-center">
            <div class="custom-swiper-container">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <img src="assets/img/services/dental implants sub service page 1.png" class="img-fluid custom-img-padding"
                    alt="Dental Braces" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/services/implents.png" class="img-fluid custom-img-padding"
                    alt="Dental Image 2" loading="lazy">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/services/dental implants sub service page 3.png" class="img-fluid custom-img-padding"
                    alt="Dental Image 2" loading="lazy">
                </div>


              </div>
            
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.custom-swiper-container', {
                  loop: true,
                  effect: 'fade',
                  autoplay: {
                    delay: 2000, // 2 seconds interval
                    disableOnInteraction: false, // Continue autoplay after user interactions
                  },
                  pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                  },
                  navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                  },
                });
              });
            </script>

          </div>


        </div>
      </div>
    </section> -->


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




    <section>
      <div class="container">
        <div class="section-title text-center">

          <h2 class="apporach">Watch the Transformation </h2>


          <p class="svg_apporach_service"> <svg xmlns="http://www.w3.org/2000/svg" width="266" height="10"
              viewBox="0 0 266 10" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M6.11475 7.98364C11.7525 7.38504 26.5688 7.3551 66.7894 7.29524C129.595 7.20545 179.441 6.54699 193.295 5.58923C194.395 5.49944 106.357 4.84098 97.3157 5.31986C83.2214 6.09804 15.912 5.43958 2.36768 4.54167C-1.48249 4.30223 -0.0386618 3.46418 2.47082 3.2846C6.38973 2.9853 16.909 3.01524 45.751 3.0751C66.0331 3.10503 227.396 2.41663 245.031 1.18949C254.932 0.501097 260.948 -0.127436 263.698 0.0222149C266.001 0.141936 266.036 0.501097 264.042 1.48879C262.701 2.14726 264.214 2.53635 265.176 2.71593C266.654 3.01523 266.035 4.03286 264.179 4.84097C261.67 5.94839 257.338 5.91846 259.401 4.81104C259.848 4.5716 259.951 3.973 258.37 4.09272C253.763 4.45188 221.209 6.90615 212.374 7.32517C118.045 11.8746 25.9843 8.55231 6.49286 9.65973C-0.416819 10.0788 2.74587 8.3428 6.11475 7.98364Z"
                fill="#25B4F8" />
            </svg>
          </p>
          <h2 class="apporach">Dental Implants Treatment in Action </h2>









          <div class="container slie_net_container d-md-none">
            <div class="row slie_net_row">
              <div class="row__inner">
                <div class="tile">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/CGh29WN2jeo?si=Vl-HDG8qJp3o81oe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="container slie_net_container d-none d-md-block d-lg-none">
            <div class="row slie_net_row">
              <div class="row__inner">
                <div class="tile">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/CGh29WN2jeo?si=Vl-HDG8qJp3o81oe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <!-- <div class="tile ">
                  <div class="tile__media ">
                    <div class="video-container  ">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/0zKTSrA6Bg0?si=gyJMbDo4Mx7X3P7v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


          <div class="container slie_net_container d-none d-lg-block d-xl-none">
            <div class="row slie_net_row">
              <div class="row__inner">
                <div class="tile">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/CGh29WN2jeo?si=Vl-HDG8qJp3o81oe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <!-- <div class="tile ">
                  <div class="tile__media ">
                    <div class="video-container  ">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/0zKTSrA6Bg0?si=gyJMbDo4Mx7X3P7v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="tile__media ">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/-asbtKCvyh0?si=HB3W_Z5W3BOlSjnL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>



          <div class="container slie_net_container d-none d-xl-block ">
            <div class="row slie_net_row">
              <div class="row__inner">
                <div class="tile">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/CGh29WN2jeo?si=Vl-HDG8qJp3o81oe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <!-- <div class="tile ">
                  <div class="tile__media ">
                    <div class="video-container  ">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/0zKTSrA6Bg0?si=gyJMbDo4Mx7X3P7v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="tile__media ">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/-asbtKCvyh0?si=HB3W_Z5W3BOlSjnL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/KyI4GyczhTo?si=F0v0n60FOJLo5hKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="tile__media">
                    <div class="video-container">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/kJ8ZKMUvnO0?si=j4Hq_teDJzjMlKeW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>



          <div class="    ">
            <a href="https://www.youtube.com/@srinivasadentalkakinada/featured" target="_blank">
              <button class="read_more_btn">Watch playlist </button>
            </a>
          </div>
        </div>
      </div>
    </section>



  </main>
  <?php include('./footer.php'); ?>


</body>

</html>