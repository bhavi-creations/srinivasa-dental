 <?php
  include './db.connection/db_connection.php';


  $selected_date = date('Y-m-d');
  $slots = [
    "9:00 AM - 10:00 AM",
    "10:00 AM - 11:00 AM",
    "11:00 AM - 12:00 PM",
    "12:00 PM - 01:00 PM",
    "01:00 PM - 02:00 PM",
    "02:00 PM - 03:00 PM",
    "03:00 PM - 04:00 PM",
    "04:00 PM - 05:00 PM",
    "05:00 PM - 06:00 PM",
    "06:00 PM - 07:00 PM",
    "07:00 PM - 08:30 PM"
  ];
  ?>
 <?php include 'navbar.php'; ?>





 <main id="main">

   <section class="sectionForm  pt-5">
     <div class="container appointment_bg" >
     <!-- <div class="container appointment_bg" style="  background-color: #E7F3FE80;"> -->

       <div class="section-title">
         <h2 class=" pt-5 mb-4 contct_text">Make an Appointment</h2>
       </div>


       <div class="row">
         <div class="col-md-6 d-none d-md-block">
           <img src="assets/img/srinivasa/BOOK APOINTMENT.png" class="img-fluid">
         </div>


         <div class="col-md-6 mt-5">
           <!-- <form action="appointment_srinivasa_dental_hospital.php" method="post" role="form" class="php-email-form"
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
            </form> -->

           <form id="appointmentForm"
             method="POST"
             action="save_appointment.php"
             class="row appointment-form mx-auto">

             <div class="col-md-6 mb-4">
               <label>Name</label>
               <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
             </div>

             <div class="col-md-6 mb-4">
               <label>Email</label>
               <input type="email" name="email" class="form-control" required placeholder="Email">
             </div>

             <div class="col-md-6 mb-4">
               <label>Contact Number</label>
               <input type="text" name="phone" class="form-control" required placeholder="Number">
             </div>

             <div class="col-md-6 mb-4">
               <label>Select Date</label>
               <input type="date"
                 id="appointment_date"
                 name="appointment_date"
                 min="<?= date('Y-m-d') ?>"
                 class="form-control"
                 required>
             </div>

             <div id="slotContainer" class="col-md-12 mb-4">
               <label>Select Time Slot</label>
               <select id="time_slot" name="time_slot" class="form-control" required>
                 <option value="">-- First Select Date --</option>
               </select>
             </div>

             <div class="col-md-12 mb-4">
               <label>Message</label>
               <textarea name="message" class="form-control" placeholder="Message"></textarea>
             </div>

             <div class="col-md-12">
               <button type="submit" class="btn btn-primary btn-lg w-100">
                 Book Appointment
               </button>
             </div>

           </form>


         </div>



       </div>
     </div>
   </section>


 </main>


 <?php include('./footer.php'); ?>

 <script>
   document.getElementById('appointment_date').addEventListener('change', function() {
     const date = this.value;
     const slotSelect = document.getElementById('time_slot');
     slotSelect.innerHTML = '<option>Loading...</option>';

     fetch('get_slots.php?date=' + date)
       .then(r => r.json())
       .then(data => {

         if (data.isHoliday && data.type == 'fullday') {
           alert("Holiday: " + data.reason);
           slotSelect.innerHTML = '<option>No Slots Available</option>';
           return;
         }

         if (data.isHoliday) {
           alert("Note: " + data.reason);
         }

         let html = '<option value="">--Select Slot--</option>';

         data.slots.forEach(s => {
           let dis = s.available <= 0 ? 'disabled' : '';
           let text = s.available <= 0 ?
             `${s.time} (FULL)` :
             `${s.time} (${s.available} Slots Available)`;

           html += `<option ${dis} value="${s.time}">${text}</option>`;
         });

         slotSelect.innerHTML = html;
       })
       .catch(() => {
         slotSelect.innerHTML = '<option>Error loading slots</option>';
       });
   });
 </script>


 </body>

 </html>