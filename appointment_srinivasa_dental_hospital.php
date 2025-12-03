 
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
            <form action="appointment_srinivasa_dental_hospital.php" method="post" role="form" class="php-email-form"
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