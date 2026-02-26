<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body {
            background-color: #000000;
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            /* padding: 80px 0; */
        }

        .new_service_section_title {
            color: #ffff00;
            text-align: center;
            font-weight: 800;
            margin-bottom: 110px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
        }

        .new_service_section_title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #ffff00;
            border-radius: 2px;
        }

        .new_service_card {
            background-color: #111111;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            position: relative;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 100px;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid #333333;
        }

        /* --- ICONS STYLE --- */
        .service_main_icon {
            font-size: 50px;
            color: #ffff00;
            position: absolute;
            top: 40px;
            transition: all 0.4s ease;
        }

        .new_service_card:hover .service_main_icon {
            opacity: 0;
            /* ఇమేజ్ వచ్చినప్పుడు ఐకాన్ మాయం అవుతుంది */
            transform: scale(0.5);
        }

        /* --- HOVER EFFECTS --- */
        .new_service_card:hover {
            border-color: #ffff00;
            background-color: #080808;
            box-shadow: 0 10px 30px rgba(255, 255, 0, 0.15);
        }

        .new_service_badge {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #ffff00;
            font-weight: 800;
            opacity: 0.2;
            font-size: 20px;
        }

        .new_service_text {
            font-weight: 700;
            font-size: 20px;
            color: #ffff00;
            margin-bottom: 10px;
        }

        .card-text {
            color: #cccccc;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 0;
        }

        /* --- POP-OUT IMAGE --- */
        .new_service_hover_img {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, 0) scale(0.7);
            width: 85%;
            height: 180px;
            object-fit: cover;
            border-radius: 15px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease-in-out;
            z-index: 10;
            border: 3px solid #ffff00;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.8);
        }

        .new_service_card:hover .new_service_hover_img {
            opacity: 1;
            visibility: visible;
            top: -40px;
            transform: translate(-50%, 0) scale(1.05);
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="new_service_section_title mt-5">Services</h2>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="root_canal_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">01</span>
                        <!-- <i class="fa-solid fa-tooth service_main_icon"></i> -->
                        <img src="assets/img/services/one.jpg" class="img-fluid" style="opacity: 0.1;">
                        <img src="assets/img/services/one.jpg" class="new_service_hover_img" alt="Root Canal">
                        <div class="new_service_text mt-3">Root Canal</div>
                        <p class="card-text">A root canal is a dental procedure that removes infected tissue from inside
                            a
                            tooth to relieve pain and save the tooth</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="dental_braces_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">02</span>
                        <!-- <i class="fa-solid fa-teeth service_main_icon"></i> -->
                        <img src="assets/img/services/two.jpg" class="img-fluid" style="opacity: 0.1;">
                        <img src="assets/img/services/two.jpg" class="new_service_hover_img" alt="Dental Braces">
                        <div class="new_service_text mt-3">Dental Braces</div>
                        <p class="card-text">Dental braces are orthodontic devices used to align and straighten teeth,
                            improving dental health and appearance.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="dental_implants_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">03</span>
                        <img src="assets/img/services/3.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-screwdriver service_main_icon"></i> -->
                        <img src="assets/img/services/3.jpg" class="new_service_hover_img" alt="Dental Implants">
                        <div class="new_service_text mt-3">Dental Implants</div>
                        <p class="card-text">Dental implants are artificial tooth roots placed in the jawbone to support
                            and
                            anchor replacement teeth or bridges.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="dentalcrown_bridge_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">04</span>
                        <img src="assets/img/services/4.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-crown service_main_icon"></i> -->
                        <img src="assets/img/services/4.jpg" class="new_service_hover_img" alt="Crowns">
                        <div class="new_service_text mt-3">Tooth Crowns & Bridges</div>
                        <p class="card-text">Tooth crowns and bridges are restorative dental solutions used to restore
                            damaged teeth and replace missing ones, improving both function and appearance.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="teeth_filling_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">05</span>
                        <img src="assets/img/services/5.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-fill-drip service_main_icon"></i> -->
                        <img src="assets/img/services/5.jpg" class="new_service_hover_img" alt="Teeth Filling">
                        <div class="new_service_text mt-3">Teeth Filling</div>
                        <p class="card-text">A teeth filling is a dental procedure to restore the function and integrity
                            of
                            a damaged tooth by filling cavities with materials like composite resin or amalgam.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="dentaldentures_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">06</span>
                        <img src="assets/img/services/6.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-teeth-open service_main_icon"></i> -->
                        <img src="assets/img/services/6.jpg" class="new_service_hover_img" alt="Dentures">
                        <div class="new_service_text mt-3">Dentures</div>
                        <p class="card-text">Dentures are removable prosthetic devices designed to replace missing teeth
                            and
                            restore function and appearance to the mouth.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="teeth_scaling_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">07</span>
                        <img src="assets/img/services/7.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-hand-sparkles service_main_icon"></i> -->
                        <img src="assets/img/services/7.jpg" class="new_service_hover_img" alt="Teeth Scaling">
                        <div class="new_service_text mt-3">Teeth Scaling</div>
                        <p class="card-text">Teeth scaling is a dental procedure that removes plaque and tartar buildup
                            from
                            the tooth surfaces and below the gum line to maintain oral health.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="tooth_extraction_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">08</span>
                        <img src="assets/img/services/8.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-kit-medical service_main_icon"></i> -->
                        <img src="assets/img/services/8.jpg" class="new_service_hover_img" alt="Tooth Extraction">
                        <div class="new_service_text mt-3">Tooth Extraction</div>
                        <p class="card-text">Tooth extraction is the removal of a tooth from its socket in the jawbone,
                            often due to decay, damage, or crowding.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="invisalignaligners_clearaligners_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">09</span>
                        <!-- <i class="fa-solid fa-shield-halved service_main_icon"></i> -->
                        <img src="assets/img/services/clearaligners.png" class="img-fluid" style="opacity: 0.1;">
                        <img src="assets/img/services/clearaligners.png" class="new_service_hover_img"
                            alt="Clear Aligners">
                        <div class="new_service_text mt-3">Clear Aligners</div>
                        <p class="card-text">Clear aligners are transparent, custom trays that straighten teeth by
                            gradually
                            shifting them into proper alignment</p>
                    </div>
                </a>
            </div>



            <div class="col-lg-3 col-md-6">
                <a href="teeth_whitning_treatment_in_kakinada.php">

                    <div class="new_service_card">
                        <span class="new_service_badge">10</span>
                        <img src="assets/img/services/10.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-wand-magic-sparkles service_main_icon"></i> -->
                        <img src="assets/img/services/10.jpg" class="new_service_hover_img" alt="Teeth Whitening">
                        <div class="new_service_text mt-3">Teeth Whitening</div>
                        <p class="card-text">Teeth whitening is a cosmetic procedure that lightens the color of teeth to
                            enhance their brightness and improve your smile's appearance.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="smile_makeover_treatment_in_kakinada.php">
                    <div class="new_service_card">
                        <span class="new_service_badge">11</span>
                        <img src="assets/img/services/11.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-face-smile-beam service_main_icon"></i> -->
                        <img src="assets/img/services/11.jpg" class="new_service_hover_img" alt="Smile Makeover">
                        <div class="new_service_text mt-3">Smile Makeover</div>
                        <p class="card-text">A smile makeover is a comprehensive cosmetic dental treatment designed to
                            enhance the overall appearance of your smile through a combination of procedures.</p>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="fullmouthrestrotion_treatment_in_kakinada.php">
                    <div class="new_service_card">
                        <span class="new_service_badge">12</span>
                        <img src="assets/img/services/12.jpg" class="img-fluid" style="opacity: 0.1;">
                        <!-- <i class="fa-solid fa-notes-medical service_main_icon"></i> -->
                        <!-- <img src="assets/img/full mouth_123.png" alt="" class="img-fluid"> -->
                        <img src="assets/img/services/12.jpg" class="new_service_hover_img"
                            alt="Full Mouth Restoration">
                        <div class="new_service_text mt-3">Full Mouth Restoration</div>
                        <p class="card-text">Full mouth restoration is a comprehensive dental treatment that repairs and
                            rebuilds the entire mouth to restore function, health, and aesthetics.</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

</body>

</html>