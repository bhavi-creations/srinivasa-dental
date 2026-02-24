<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Doctors</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        .doctor-carousel-section {
            background: linear-gradient(135deg, #ffee00da 0%, #f8f800b3 100%);
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            position: relative;
            overflow: hidden;
        }

        /* Animated background particles */
        .doctor-carousel-section::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -250px;
            right: -250px;
            animation: float 20s infinite ease-in-out;
        }

        .doctor-carousel-section::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            bottom: -200px;
            left: -200px;
            animation: float 15s infinite ease-in-out reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(50px, 50px) scale(1.1); }
        }

        /* Main Heading */
        .section-heading {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
            z-index: 1;
        }

        .main-title {
            font-size: 56px;
            font-weight: 900;
            color: black;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            margin-bottom: 15px;
            letter-spacing: -2px;
            animation: fadeInDown 1s ease-out;
        }

        .main-subtitle {
            font-size: 22px;
            color: rgba(0, 0, 0, 0.95);
            /* color: rgba(255, 255, 255, 0.95); */
            font-weight: 400;
            letter-spacing: 1px;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .carousel-container {
            max-width: 1200px;
            width: 100%;
            background: rgba(0, 0, 0, 0.95);
            /* background: rgba(255, 255, 255, 0.95); */
            backdrop-filter: blur(10px);
            border-radius: 30px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .carousel-wrapper {
            position: relative;
            padding: 60px 40px;
        }

        .slide {
            display: none;
            opacity: 0;
            transform: scale(0.95);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide.active {
            display: block;
            opacity: 1;
            transform: scale(1);
            animation: slideIn 0.8s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateX(0) scale(1);
            }
        }

        .slide-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .text-content {
            padding: 20px;
            animation: fadeInLeft 0.8s ease-out 0.2s both;
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .doctor-name {
            font-size: 42px;
            font-weight: 800;
            background: linear-gradient(135deg, #f3f32edc, #e2e22ee0);
            /* background: linear-gradient(135deg, #667eea, #764ba2); */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            letter-spacing: -1px;
        }

        .doctor-degree {
            font-size: 20px;
            color: #000000;
            /* color: #6366f1; */
            font-weight: 600;
            margin-bottom: 25px;
            display: inline-block;
            padding: 8px 20px;
            background: yellow;
            /* background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1)); */
            border-radius: 25px;
            border: 2px solid rgba(102, 126, 234, 0.3);
        }

        .doctor-description {
            font-size: 18px;
            line-height: 1.8;
            color: #ffffff;
            /* color: #4b5563; */
            margin-bottom: 30px;
            text-align: justify;
        }

        .image-content {
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeInRight 0.8s ease-out 0.4s both;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .image-wrapper {
            position: relative;
            width: 380px;
            height: 380px;
        }

        .image-frame {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            box-shadow: 0 20px 60px #ffff0099;
            /* box-shadow: 0 20px 60px rgba(102, 126, 234, 0.4); */
            border: 6px solid #ffffff;
            background: transparent;
            padding: 6px;
        }

        .image-frame::before {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e8e85b,#fff000,#fff000);
            /* background: linear-gradient(135deg, #667eea, #764ba2, #f093fb); */
            z-index: -1;
            animation: rotate 4s linear infinite;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        .doctor-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: transform 0.6s ease;
            background: transparent;
        }

        .image-wrapper:hover .doctor-image {
            transform: scale(1.1);
        }

        /* Navigation Dots */
        .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 40px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #d1d5db;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            padding: 0;
        }

        .dot.active {
            width: 40px;
            border-radius: 6px;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .dot:hover {
            background: #9ca3af;
            transform: scale(1.2);
        }

        /* Arrow Navigation */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            color: #667eea;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .nav-arrow:hover {
            background: #667eea;
            color: white;
            transform: translateY(-50%) scale(1.1);
        }

        .nav-arrow.prev {
            left: 20px;
        }

        .nav-arrow.next {
            right: 20px;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .main-title {
                font-size: 42px;
            }

            .main-subtitle {
                font-size: 18px;
            }

            .slide-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .text-content {
                text-align: center;
            }

            .doctor-name {
                font-size: 32px;
            }

            .doctor-degree {
                font-size: 18px;
            }

            .doctor-description {
                font-size: 16px;
                text-align: center;
            }

            .image-wrapper {
                width: 300px;
                height: 300px;
            }

            .carousel-wrapper {
                padding: 40px 20px;
            }
        }

        @media (max-width: 576px) {
            .main-title {
                font-size: 32px;
            }

            .main-subtitle {
                font-size: 16px;
            }

            .section-heading {
                margin-bottom: 30px;
            }

            .doctor-name {
                font-size: 28px;
            }

            .image-wrapper {
                width: 250px;
                height: 250px;
            }

            .nav-arrow {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="doctor-carousel-section">
        <!-- Main Heading Section -->
        <div style="width: 100%; max-width: 1200px;">
            <div class="section-heading">
                <h1 class="main-title">Meet Our Expert Doctors</h1>
                <p class="main-subtitle">Delivering World-Class Dental Care with Compassion & Expertise</p>
            </div>

            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <!-- Slide 1 -->
                    <div class="slide active">
                        <div class="slide-content">
                            <div class="text-content">
                                <h2 class="doctor-name">DR. KIRAN RAJU</h2>
                                <p class="doctor-degree">MDS - Orthodontist and Invisalign Gold</p>
                                <p class="doctor-description" style="padding: 15px;">
                                    MDS - Orthodontist and Invisalign Gold provider brought global advancements like Invisalign & iTero to Kakinada, guided by the belief: "Our people deserve the world's best too."
                                </p>
                            </div>
                            <div class="image-content">
                                <div class="image-wrapper">
                                    <div class="image-frame">
                                        <img src="assets/img/srinivasa/kiran_raju.png" class="doctor-image" alt="Dr. Kiran Raju">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide">
                        <div class="slide-content">
                            <div class="text-content">
                                <h2 class="doctor-name">DR. LAKSHMI DEEPIKA</h2>
                                <p class="doctor-degree">MDS - Implantologist & Periodontist</p>
                                <p class="doctor-description" style="padding: 15px;">
                                    Recognized for her precision in implants, gum treatments, and full-mouth rehabilitation. Her work has restored not just teeth, but the dignity of countless patients.
                                </p>
                            </div>
                            <div class="image-content">
                                <div class="image-wrapper">
                                    <div class="image-frame">
                                        <img src="assets/img/srinivasa/lakshmi_deepika.png" class="doctor-image" alt="Dr. Lakshmi Deepika">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrows -->
                    <button class="nav-arrow prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="nav-arrow next" onclick="moveSlide(1)">&#10095;</button>
                </div>

                <!-- Navigation Dots -->
                <!-- <div class="carousel-dots">
                    <button class="dot active" onclick="currentSlide(0)"></button>
                    <button class="dot" onclick="currentSlide(1)"></button>
                </div> -->
            </div>
        </div>
    </section>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let autoSlideInterval;

        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function moveSlide(direction) {
            currentIndex += direction;
            
            if (currentIndex >= slides.length) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = slides.length - 1;
            }
            
            showSlide(currentIndex);
            resetAutoSlide();
        }

        function currentSlide(index) {
            currentIndex = index;
            showSlide(currentIndex);
            resetAutoSlide();
        }

        function autoSlide() {
            currentIndex++;
            if (currentIndex >= slides.length) {
                currentIndex = 0;
            }
            showSlide(currentIndex);
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(autoSlide, 4000);
        }

        // Start auto-sliding
        autoSlideInterval = setInterval(autoSlide, 4000);

        // Pause on hover
        const carouselContainer = document.querySelector('.carousel-container');
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            resetAutoSlide();
        });
    </script>
</body>
</html>