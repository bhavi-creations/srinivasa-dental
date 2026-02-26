<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us – Srinivasa Dental</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --black:       #080808;
    --black-card:  #111111;
    --black-soft:  #1a1a1a;
    --yellow:      #F5C518;
    --yellow-lite: #FFD84D;
    --yellow-dim:  rgba(245,197,24,0.12);
    --yellow-glow: rgba(245,197,24,0.28);
    --white:       #F4F0E6;
    --white-muted: rgba(244,240,230,0.58);
  }

  body { background: var(--black); font-family: 'DM Sans', sans-serif; }

  /* ─── SECTION ─────────────────────────────── */
  .index_new_doctor_section {
    position: relative;
    padding: 100px 0 90px;
    background: var(--black);
    overflow: hidden;
  }

  /* background noise texture overlay */
  .index_new_doctor_section::before {
    content: '';
    position: absolute; inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none; opacity: 0.4;
  }

  /* ambient glow top-right */
  .index_new_doctor_section::after {
    content: '';
    position: absolute; top: -100px; right: -150px;
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(245,197,24,0.13) 0%, transparent 65%);
    border-radius: 50%; pointer-events: none;
  }

  /* bottom-left glow */
  .index_new_doctor_bg_glow {
    position: absolute; bottom: -80px; left: -100px;
    width: 440px; height: 440px;
    background: radial-gradient(circle, rgba(245,197,24,0.09) 0%, transparent 65%);
    border-radius: 50%; pointer-events: none; z-index: 0;
  }

  /* ─── CONTAINER ───────────────────────────── */
  .index_new_doctor_container {
    /* max-width: 1200px; */
    margin: 0 auto;
    padding: 0 28px;
    position: relative; z-index: 1;
  }

  /* section label */
  .index_new_doctor_top_label {
    display: inline-flex; align-items: center; gap: 9px;
    background: var(--yellow-dim);
    border: 1px solid rgba(245,197,24,0.3);
    border-radius: 100px;
    padding: 6px 20px;
    margin-bottom: 52px;
    animation: fadeDown 0.6s ease both;
  }
  .index_new_doctor_top_label .dot {
    width: 7px; height: 7px; border-radius: 50%;
    background: var(--yellow);
    animation: pulse 2s infinite;
  }
  .index_new_doctor_top_label span {
    font-size: 10.5px; font-weight: 600;
    letter-spacing: 2.8px; text-transform: uppercase;
    color: var(--yellow);
  }

  /* ─── ROW ─────────────────────────────────── */
  /* .index_new_doctor_row {
    display: grid;
    grid-template-columns: 5fr 7fr;
    gap: 70px;
    align-items: center;
  } */

  /* ─── IMAGE COLUMN ────────────────────────── */
  .index_new_doctor_img_col {
    position: relative;
    animation: fadeRight 0.85s 0.15s ease both;
  }

  /* stacked card shadows */
  .index_new_doctor_img_col::before {
    content: '';
    position: absolute;
    inset: 0;
    transform: translate(14px, 14px);
    background: var(--yellow-dim);
    border: 1px solid rgba(245,197,24,0.25);
    border-radius: 16px;
    z-index: 0;
  }

  .index_new_doctor_img_wrap {
    position: relative; z-index: 1;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 40px 90px rgba(0,0,0,0.65), 0 0 0 1px rgba(245,197,24,0.18);
  }

  .index_new_doctor_img_wrap img {
    width: 100%; height: auto; display: block;
    transition: transform 0.7s ease;
  }
  .index_new_doctor_img_wrap:hover img { transform: scale(1.03); }

  /* yellow corner bracket – bottom right */
  .index_new_doctor_bracket {
    position: absolute;
    bottom: -18px; right: -18px;
    width: 70px; height: 70px;
    border-bottom: 3px solid var(--yellow);
    border-right:  3px solid var(--yellow);
    border-radius: 0 0 10px 0;
    z-index: 2;
  }

  /* floating experience badge */
  .index_new_doctor_badge {
    position: absolute;
    top: 24px; left: -20px;
    background: #ffff00;
    /* background: var(--yellow); */
    color: var(--black);
    border-radius: 12px;
    padding: 14px 18px;
    z-index: 3;
    box-shadow: 0 10px 30px rgba(245,197,24,0.45);
    text-align: center;
    min-width: 90px;
    animation: floatBadge 3.5s ease-in-out infinite;
  }
  .index_new_doctor_badge_num {
    font-family: 'Playfair Display', serif;
    font-size: 28px; font-weight: 900;
    line-height: 1;
  }
  .index_new_doctor_badge_text {
    font-size: 9.5px; font-weight: 600;
    letter-spacing: 1.2px; text-transform: uppercase;
    line-height: 1.3; margin-top: 4px;
  }

  /* ─── CONTENT COLUMN ──────────────────────── */
  .index_new_doctor_content_col {
    animation: fadeLeft 0.85s 0.25s ease both;
  }

  .index_new_doctor_label_sm {
    font-size: 11px; font-weight: 600;
    letter-spacing: 3px; text-transform: uppercase;
    color: #fff000;
    /* color: var(--yellow); */
    margin-bottom: 14px;
    display: block;
  }

  .index_new_doctor_heading {
    font-family: 'Playfair Display', serif;
    font-size: clamp(26px, 3vw, 40px);
    font-weight: 900;
    line-height: 1.18;
    color: var(--white);
    margin-bottom: 24px;
  }
  .index_new_doctor_heading em {
    font-style: italic;
    color: #ffff00;
    /* color: var(--yellow); */
  }

  .index_new_doctor_divider {
    width: 52px; height: 3px;
    background: linear-gradient(90deg, #ffff00, transparent);
    /* background: linear-gradient(90deg, var(--yellow), transparent); */
    border-radius: 2px;
    margin-bottom: 26px;
  }

  .index_new_doctor_para {
    font-size: 15px; font-weight: 300;
    line-height: 1.9;
    color: var(--white-muted);
    margin-bottom: 32px;
  }
  .index_new_doctor_para a {
    color: #ffff00;
    /* color: var(--yellow); */
    font-weight: 500;
    text-underline-offset: 3px;
    transition: color 0.2s;
  }
  .index_new_doctor_para a:hover { color: var(--yellow-lite); }

  /* ─── CHECKLIST ───────────────────────────── */
  .index_new_doctor_checklist {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 20px;
    margin-bottom: 38px;
  }
  .index_new_doctor_check_item {
    display: flex; align-items: center; gap: 11px;
    background: var(--black-card);
    border: 1px solid rgba(245,197,24,0.12);
    border-radius: 10px;
    padding: 12px 16px;
    transition: border-color 0.25s, background 0.25s;
  }
  .index_new_doctor_check_item:hover {
    border-color: rgba(245,197,24,0.45);
    background: var(--black-soft);
  }
  .index_new_doctor_check_item .index_new_doctor_check_icon {
    width: 30px; height: 30px;
    background: var(--yellow-dim);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .index_new_doctor_check_item .index_new_doctor_check_icon i {
    color: var(--yellow);
    font-size: 13px;
  }
  .index_new_doctor_check_item span {
    font-size: 13.5px; font-weight: 500;
    color: var(--white);
  }

  /* ─── BUTTONS ─────────────────────────────── */
  .index_new_doctor_btns {
    display: flex; flex-wrap: wrap; gap: 14px;
  }

  .index_new_doctor_btn_primary {
    display: inline-flex; align-items: center; gap: 10px;
    background: #fff000;
    /* background: var(--yellow); */
    color: var(--black);
    font-family: 'DM Sans', sans-serif;
    font-size: 13.5px; font-weight: 700;
    padding: 14px 30px;
    border-radius: 100px; border: none; cursor: pointer;
    text-decoration: none;
    box-shadow: 0 8px 28px rgba(245,197,24,0.35);
    transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
  }
  .index_new_doctor_btn_primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 38px rgba(245,197,24,0.52);
    background: var(--yellow-lite);
  }
  .index_new_doctor_btn_primary i { font-size: 12px; }

  .index_new_doctor_btn_outline {
    display: inline-flex; align-items: center; gap: 10px;
    background: transparent;
    color:#fff000;
    /* color: var(--yellow); */
    font-family: 'DM Sans', sans-serif;
    font-size: 13.5px; font-weight: 600;
    padding: 13px 28px;
    border-radius: 100px;
    border: 1.5px solid rgba(245,197,24,0.55);
    cursor: pointer; text-decoration: none;
    transition: border-color 0.25s, background 0.25s, transform 0.25s;
  }
  .index_new_doctor_btn_outline:hover {
    background: var(--yellow-dim);
    border-color: var(--yellow);
    transform: translateY(-3px);
  }
  .index_new_doctor_btn_outline i { font-size: 12px; }

  /* ─── KEYFRAMES ───────────────────────────── */
  @keyframes fadeDown  { from{opacity:0;transform:translateY(-16px)} to{opacity:1;transform:translateY(0)} }
  @keyframes fadeRight { from{opacity:0;transform:translateX(-32px)} to{opacity:1;transform:translateX(0)} }
  @keyframes fadeLeft  { from{opacity:0;transform:translateX(32px)}  to{opacity:1;transform:translateX(0)} }
  @keyframes pulse     { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.4;transform:scale(.65)} }
  @keyframes floatBadge{
    0%,100% { transform: translateY(0); }
    50%     { transform: translateY(-8px); }
  }

  /* ─── RESPONSIVE ──────────────────────────── */
  @media (max-width: 860px) {
    .index_new_doctor_row {
      grid-template-columns: 1fr;
      gap: 50px;
    }
    .index_new_doctor_img_col { max-width: 480px; margin: 0 auto; }
  }
  @media (max-width: 480px) {
    .index_new_doctor_checklist { grid-template-columns: 1fr; }
    .index_new_doctor_btns { flex-direction: column; }
    .index_new_doctor_btn_primary,
    .index_new_doctor_btn_outline { justify-content: center; }
  }
</style>
</head>
<body>

<!-- ════════════════════════════════════════════
     ABOUT US SECTION — index_new_doctor_section
════════════════════════════════════════════ -->
<section id="about" class="about index_new_doctor_section">
  <div class="index_new_doctor_bg_glow"></div>

  <div class="container index_new_doctor_container">

    <!-- top label -->
    <!-- <div class="index_new_doctor_top_label">
      <span class="dot"></span>
      <span>Who We Are</span>
    </div> -->

    <div class="row index_new_doctor_row">

      <!-- IMAGE COLUMN -->
      <div class="col-12 col-md-4 col-lg-5 index_new_doctor_img_col" data-aos="fade-right">
        <div class="index_new_doctor_img_wrap">
          <img src="assets/img/srinivasa/groupimg.png" alt="Srinivasa Dental Team" class="img-fluid">
        </div>
        <div class="index_new_doctor_bracket"></div>
        <div class="index_new_doctor_badge">
          <div class="index_new_doctor_badge_num">10+</div>
          <div class="index_new_doctor_badge_text">Years of<br>Trust</div>
        </div>
      </div>

      <!-- CONTENT COLUMN -->
      <div class="col-12 col-md-8 col-lg-7 content_padding index_new_doctor_content_col" data-aos="fade-left">

        <span class="index_new_doctor_label_sm welcome_text">About Us</span>

        <h2 class="index_new_doctor_heading welcome_text_oncology">
          Hear Why We <em>Love</em><br>What We Do
        </h2>

        <div class="index_new_doctor_divider"></div>

        <p class="index_new_doctor_para poetsen_font">
          Your dental team, led by
          <a href="https://drdvskiranrajukakinada.blogspot.com/2025/11/dr-dvs-kiran-raju-chief-dentist.html" target="_blank">Dr. Kiran Raju</a>,
          is dedicated to making our practice patient-centered. We want each patient to feel like a member of the
          Srinivasa Dentistry family, confidently putting their trust in our team. Check our testimonials to see
          why we are passionate about our patients' experience.<br><br>
          We will help you choose a custom care plan designed to help you accomplish the smile of your dreams.
          Find more about dentists in Kakinada at our What Patients Say section.
        </p>

        <!-- checklist -->
        <div class="index_new_doctor_checklist">
          <div class="index_new_doctor_check_item tetx_color_about">
            <div class="index_new_doctor_check_icon">
              <i class="check_mark fa-solid fa-circle-check"></i>
            </div>
            <span>Modern Equipment</span>
          </div>
          <div class="index_new_doctor_check_item tetx_color_about">
            <div class="index_new_doctor_check_icon">
              <i class="check_mark fa-solid fa-circle-check"></i>
            </div>
            <span>Always Monitored</span>
          </div>
          <div class="index_new_doctor_check_item tetx_color_about">
            <div class="index_new_doctor_check_icon">
              <i class="check_mark fa-solid fa-circle-check"></i>
            </div>
            <span>Comfortable Clinic</span>
          </div>
          <div class="index_new_doctor_check_item tetx_color_about">
            <div class="index_new_doctor_check_icon">
              <i class="check_mark fa-solid fa-circle-check"></i>
            </div>
            <span>Online Appointment</span>
          </div>
        </div>

        <!-- buttons -->
        <div class="d-flex flex-content index_new_doctor_btns">
          <a href="about_srinivasa_multispeciality_dental_hospital.php" class="index_new_doctor_btn_primary read_more_btn">
            <i class="fa-solid fa-arrow-right"></i>
            Read More
          </a>
          <a href="appointment_srinivasa_dental_hospital.php" class="index_new_doctor_btn_outline app_more_btn">
            <i class="fa-regular fa-calendar-check"></i>
            Make an Appointment
          </a>
        </div>

      </div>
    </div><!-- /row -->

  </div>
</section>

</body>
</html>