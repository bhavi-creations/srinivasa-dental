<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Cases - Clean Tooth Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
     

        .new_before_after_section-title {
            font-size: 32px;
            margin-bottom: 40px;
            color: #ffff00;
            text-align: center;
        }

        .new_before_after_comparison-slider {
            position: relative;
            width: 100%;
            max-width: 500px;
            height: 450px;
            overflow: hidden;
            border-radius: 12px;
            margin: 0 auto;
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
            background-color: #000;
        }

        .new_before_after_bg-img, .new_before_after_overlay-img {
            width: 500px; 
            height: 450px;
            object-fit: cover;
            display: block;
        }

        .new_before_after_img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%; 
            height: 100%;
            overflow: hidden;
            z-index: 2;
            border-right: 2px solid #ffff00;
        }

        .new_before_after_label-before,
        .new_before_after_label-after {
            position: absolute;
            top: 20px;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            padding: 6px 16px;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            z-index: 5;
            pointer-events: none;
            border-radius: 4px;
            transition: opacity 0.3s ease;
        }

        .new_before_after_label-before { left: 20px; } 
        .new_before_after_label-after { right: 20px; }

        /* --- ఇక్కడ బ్లూ డాట్‌ను తొలగించే కోడ్ --- */
        .new_before_after_slider-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            outline: none;
            margin: 0;
            cursor: ew-resize;
            z-index: 10;
            appearance: none;
            -webkit-appearance: none;
        }

        /* Chrome, Safari, Edge లో బ్లూ డాట్‌ని తీసేయడానికి */
        .new_before_after_slider-input::-webkit-slider-thumb {
            appearance: none;
            -webkit-appearance: none;
            width: 50px;
            height: 450px;
            background: transparent; /* పూర్తిగా అదృశ్యం */
            cursor: ew-resize;
        }

        /* Firefox లో బ్లూ డాట్‌ని తీసేయడానికి */
        .new_before_after_slider-input::-moz-range-thumb {
            width: 50px;
            height: 450px;
            background: transparent;
            border: none;
            cursor: ew-resize;
        }

        .new_before_after_slider-button {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            background: #ffff00;
            transform: translateX(-50%);
            z-index: 9;
            pointer-events: none;
        }

        /* Yellow Tooth Icon */
        .new_before_after_slider-button::after {
            content: '\f5c9';
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: #000; 
            border: 2px solid #ffff00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #ffff00;
            box-shadow: 0 0 15px rgba(255, 255, 0, 0.5);
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="new_before_after_section-title">Patient Cases (Before & After)</h2>

        <div class="row justify-content-center">
            
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="new_before_after_comparison-slider">
                    <img src="assets/img/images/c2.png" class="new_before_after_bg-img" alt="After">
                    <span class="new_before_after_label-after">After</span>

                    <div class="new_before_after_img-overlay">
                        <img src="assets/img/images/c1.png" class="new_before_after_overlay-img" alt="Before">
                        <span class="new_before_after_label-before">Before</span>
                    </div>

                    <div class="new_before_after_slider-button"></div>
                    <input type="range" min="0" max="100" value="50" class="new_before_after_slider-input" oninput="moveSlider(this)">
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <div class="new_before_after_comparison-slider">
                    <img src="assets/img/images/d2.png" class="new_before_after_bg-img" alt="After">
                    <span class="new_before_after_label-after">After</span>

                    <div class="new_before_after_img-overlay">
                        <img src="assets/img/images/d1.png" class="new_before_after_overlay-img" alt="Before">
                        <span class="new_before_after_label-before">Before</span>
                    </div>

                    <div class="new_before_after_slider-button"></div>
                    <input type="range" min="0" max="100" value="50" class="new_before_after_slider-input" oninput="moveSlider(this)">
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <div class="new_before_after_comparison-slider">
                    <img src="assets/img/images/e2.png" class="new_before_after_bg-img" alt="After">
                    <span class="new_before_after_label-after">After</span>

                    <div class="new_before_after_img-overlay">
                        <img src="assets/img/images/e1.png" class="new_before_after_overlay-img" alt="Before">
                        <span class="new_before_after_label-before">Before</span>
                    </div>

                    <div class="new_before_after_slider-button"></div>
                    <input type="range" min="0" max="100" value="50" class="new_before_after_slider-input" oninput="moveSlider(this)">
                </div>
            </div>

        </div>
    </div>

    <script>
        function moveSlider(input) {
            const container = input.parentElement;
            const overlay = container.querySelector('.new_before_after_img-overlay');
            const button = container.querySelector('.new_before_after_slider-button');
            const labelBefore = container.querySelector('.new_before_after_label-before');
            const labelAfter = container.querySelector('.new_before_after_label-after');

            const value = input.value;
            
            overlay.style.width = value + "%";
            button.style.left = value + "%";

            labelBefore.style.opacity = value < 10 ? "0" : "1";
            labelAfter.style.opacity = value > 90 ? "0" : "1";
        }
    </script>

</body>
</html>