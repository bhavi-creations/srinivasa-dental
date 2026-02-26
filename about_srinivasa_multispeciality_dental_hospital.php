 <?php include 'navbar.php'; ?>





 <main id="main">





   <!-- <section class="sectionForm">
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
              <p class="get_in_touch read_hide" style="color: #ffff00; cursor: pointer;" onclick="toggleReadMore()">
                Read More <i class="fa-solid fa-arrow-right"></i>
              </p>
            </div>
          </div>

          <div class="col-md-5 order-3  order-md-2 mt-5 text-center">
            <img src="assets/img/services/about.png" class="img-fluid dr_img_padding" alt="" class="servImg">
          </div>
        </div>
      </div>
    </section> -->



   <section class="about_page_custom_section px-1">
     <div class="container">
       <div class="row align-items-center g-5">

         <div class="col-lg-7">
           <span class="about_page_badge">About Us</span>
           <h2 class="about_page_title">
             Our <span class="about_page_text_yellow">History</span> &amp; Mission
           </h2>

           <div class="about_page_content_box">
             <p class="about_page_para">
               Our hospital, established in <strong style="color:#fff;">2014</strong>, is equipped with
               advanced infrastructure to provide specialized oral health care. Thousands of patients have
               benefited from our comprehensive dental services, improving their oral and overall health.
               As a team, we continue to bring smiles to families through ethical dental practices in
               Kakinada.
               <span class="about_page_dr_highlight"> Dr. D.V.S. Kiran Raju, M.D.S.</span>, specializes in
               braces.
             </p>
           </div>

           <div id="more_content">
             <div class="about_page_content_box">
               <p class="about_page_para">
                 Our dedicated clinician excels in pain management, replacement of missing teeth,
                 esthetic dentistry, and strives to offer complete care by utilizing advanced techniques.
                 We are the best dental clinic in Kakinada.
                 <span class="about_page_dr_highlight"> Dr. Sree Lakshmi Deepika</span> strongly believes
                 that 'Natural tooth is a God's gift.' As a specialist in advanced gum care and surgical
                 treatments, she is committed to saving natural teeth. Proficient in implants and laser
                 therapies, she is dedicated to providing quality dental care at Srinivasa Dental Clinic
                 in Kakinada.
               </p>
             </div>

             <!-- <div class="row g-3">
                            <div class="col-md-6">
                                <div class="about_page_doctor_chip">
                                    <i class="fas fa-user-md"></i>
                                    <span class="small fw-bold">Dr. D.V.S. Kiran Raju<br><small
                                            class="text-white-50">Orthodontist</small></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_page_doctor_chip">
                                    <i class="fas fa-user-md"></i>
                                    <span class="small fw-bold">Dr. Sree Lakshmi Deepika<br><small
                                            class="text-white-50">Gum Specialist</small></span>
                                </div>
                            </div>
                        </div> -->
           </div>

           <button class="about_page_readmore_btn" onclick="toggleAboutContent()" id="readmore_btn">
             <span>Read More</span> <i class="fas fa-chevron-down"></i>
           </button>
         </div>

         <div class="col-lg-5">
           <div class="about_page_image_wrapper">
             <div class="about_page_img_glow"></div>

             <div class="about_page_shape_tl"></div>
             <div class="about_page_dots"></div>

             <img src="assets/img/services/about.png" alt="Clinic"
               class="about_page_img">

             <div class="about_page_shape_br"></div>
           </div>

           <div class="about_page_history_card text-center">
             <h4 class="mb-0">Established 2014</h4>
             <p class="mb-0 fw-bold">10+ Years of Excellence</p>
           </div>
         </div>

       </div>
     </div>
   </section>

   <script>
     function toggleAboutContent() {
       const moreContent = document.getElementById('more_content');
       const btn = document.getElementById('readmore_btn');
       const btnText = btn.querySelector('span');
       const btnIcon = btn.querySelector('i');

       if (moreContent.style.display === "block") {
         moreContent.style.display = "none";
         btnText.innerText = "Read More";
         btnIcon.classList.replace('fa-chevron-up', 'fa-chevron-down');
       } else {
         moreContent.style.display = "block";
         moreContent.classList.add('show');
         btnText.innerText = "Read Less";
         btnIcon.classList.replace('fa-chevron-down', 'fa-chevron-up');
       }
     }
   </script>


   <?php include 'bio.php'; ?>


   <?php include 'h2.php'; ?>




   <!-- <script>
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
   </script> -->


 </main>


 <?php include('./footer.php'); ?>





 </body>

 </html>