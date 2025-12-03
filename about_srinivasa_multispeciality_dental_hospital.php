 
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


    <?php include 'bio.php'; ?>


    

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