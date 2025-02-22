 
<?php include 'navbar.php'; ?>





  <main id="main">

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 class="contct_text">Contact</h2>
        </div>

      </div>



      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row d-flex flex-row justify-content-center">
              <!-- <div class="col-md-12">
                 <div class="info-box">
                   <i class="bx bx-map"></i>
                   <h3>Our Address</h3>
                   <p>
                     2-56-5,
                     SANTHI NAGAR,ROAD NO.1,<br>
                     100 BUILDING CENTER,<br>
                     HOUSING BOARD COLONY<br>
                     OPP. CHRISTIAN COMMUNITY HALL<br>
                     KAKINADA-533003 <br>
                     Andhra Pradesh, India
                     <br><br>
                   </p>
                 </div>
               </div> -->
              <div class="col-md-7">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3 style="font-family:Mulish;">Email Us</h3>
                  <p style="font-family:Mulish;"> srinivasadentalkakinada@gmail.com </p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3 style="font-family:Mulish;">Call Us</h3>
                  <p style="font-family:Mulish;"> +919290019948 </p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contactform .php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name" required="" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control just_font" name="contactemail" id="email" placeholder="Your Email" style="font-family:Mulish;" required="">
                </div>

                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactsubject" id="subject" placeholder="Subject" style="font-family:Mulish;">
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="contactnumber" id="number" placeholder="Phone" required="" style="font-family:Mulish;">
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="contactmessage" rows="7" placeholder="Message" required=" " style="font-family:Mulish;"></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>



        </div>

      </div>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15263.91014555985!2d82.23060610030991!3d16.975655241485622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a38280cfb8b76af%3A0x20fa1fab700c8dc2!2ssrinivasa%20dental%20clinic!3m2!1d16.9617979!2d82.2343163!5e0!3m2!1sen!2sin!4v1725952492416!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </main>
  <?php include('./footer.php'); ?>
   

</body>

</html>