<!DOCTYPE html>
<html lang="te">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srinivasa Dental Hospital - Core Vision</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> -->

    <style>
        :root {
            /* Default Healthcare Color Palette */
            --primary-blue: #004a99;
            /* Deep Professional Blue */
            --light-blue: #e8f1fb;
            --medical-green: #7ab51d;
            /* Trustworthy Green */
            --bg-light: #f8fafc;
            --white: #ffffff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }


        a {
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: black;
            color: var(--text-dark);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Soft Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 0% 0%, rgba(0, 74, 153, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 100% 100%, rgba(122, 181, 29, 0.05) 0%, transparent 50%);
            z-index: -1;
        }

        .container-fluid {
            max-width: 1200px;
            padding: 40px 20px;
        }

        /* ─── HEADER ─── */
        .brand-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .logo-box {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background: yellow;
            /* background: var(--white); */
            padding: 12px 28px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
            border-bottom: 4px solid #ffff00;
            /* border-bottom: 4px solid var(--primary-blue); */
        }

        .logo-icon {
            font-size: 2.2rem;
            color: var(--primary-blue);
        }

        .brand-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 2.2rem;
            margin: 0;
            color: black;
            /* color: var(--primary-blue); */
        }

        .tagline {
            font-size: 1.1rem;
            color: white;
            /* color: var(--text-muted); */
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* ─── VISION & MISSION ─── */
        .vm-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .vm-card {
            /* background: var(--white); */
            border: 2px solid yellow;
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 74, 153, 0.05);
            transition: all 0.3s ease;
            border-left: 6px solid #ffff00;
            /* border-left: 6px solid #ffffff; */
        }

        .vm-card.mission {
            border-left-color: #ffff00;
            /* border-left-color: #ffffff; */
        }

        .vm-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 45px rgba(0, 74, 153, 0.1);
        }

        .vm-icon {
            font-size: 2.5rem;
            color: yellow;
            /* color: var(--primary-blue); */
            margin-bottom: 15px;
            display: inline-block;
        }

        .mission .vm-icon {
            color: yellow;
        }

        .vm-title {
            font-weight: 800;
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: yellow;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .vm-text {
            color: white;
            /* color: var(--text-muted); */
            font-size: 1.05rem;
            line-height: 1.7;
            margin: 0;
        }

        /* ─── GOALS SECTION ─── */
        .goals-section {
            background: yellow;
            /* background: var(--white); */
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.03);
            margin-bottom: 40px;
        }

        .section-title {
            text-align: center;
            color: black;
            /* color: var(--primary-blue); */
            margin-bottom: 45px;
            font-weight: 800;
            font-size: 1.8rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: black;
            /* background: var(--medical-green); */
            margin: 10px auto;
            border-radius: 2px;
        }

        .goals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .goal-card {
            background: black;
            /* background: var(--bg-light); */
            border-radius: 18px;
            padding: 25px;

            display: flex;
            align-items: center;
            gap: 20px;
            transition: 0.3s;
            border: 2px solid #4c7af7c1;
            /* border: 1px solid transparent;  */
        }

        @media (max-width:768px) {
            .goal-card {
                margin-left: -50px;
            }
        }

        /* .goal-card:hover {
            background: var(--white);
            border-color: var(--light-blue);
            box-shadow: 0 10px 20px rgba(0, 74, 153, 0.05);
        } */

        .goal-number {
            font-weight: 800;
            font-size: 1.8rem;
            color: yellow;
            /* color: var(--medical-green); */
            /* opacity: 0.4; */
        }

        .goal-content h5 {
            color: yellow;
            /* color: var(--primary-blue); */
            font-weight: 700;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .goal-content p {
            color: white;
            /* color: var(--text-muted); */
            font-size: 0.9rem;
            margin: 0;
        }

        /* ─── STATS SECTION ─── */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .stat-card {
            background: black;
            border:2px solid yellow;
            /* background: var(--primary-blue); */
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            color: var(--white);
            transition: 0.3s;
        }

        .stat-card:nth-child(even) {
            background: black;
            border: 2px solid yellow;
        }

        .stat-number {
            color:yellow;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 5px;
            display: block;
        }

        .stat-label {
               color:yellow;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 992px) {
            .vm-section {
                grid-template-columns: 1fr;
            }

            .brand-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">

        <header class="brand-header">
            <div class="logo-box">
                <!-- <i class="bi bi-heart-pulse-fill logo-icon"></i> -->
                <h1 class="brand-title">Srinivasa Dental</h1>
            </div>
            <p class="tagline">
                To provide world-class dentistry locally with a warm, respectful experience and treat every patient like our own family.
            </p>
        </header>

        <section class="vm-section">
            <div class="vm-card">
                <i class="bi bi-eye-fill vm-icon"></i>
                <h3 class="vm-title">Our Vision</h3>
                <p class="vm-text">"To set a new standard in dental care by combining heartfelt hospitality, technology & trust."</p>
            </div>
            <div class="vm-card mission">
                <i class="bi bi-bullseye vm-icon"></i>
                <h3 class="vm-title">Our Mission</h3>
                <!-- <p class="vm-text">"To deliver 1 lakh+ Happy Smiles through Trust and Painless treatments in Kakinada by 2030."</p> -->
                <p class="vm-text">To be the most reliable & innovative dental care provider in kakinada & to deliver 1 lakh+ happy smiles through trust,painless dental treatments in the next coming 5 years</p>
            </div>
        </section>

        <section class="goals-section">
            <h2 class="section-title">Core Goals (2025 - 2030)</h2>
            <div class="goals-grid">
                <div class="goal-card">
                    <div class="goal-number">01</div>
                    <div class="goal-content">
                        <h5>Patient Experience</h5>
                        <p> Creat a 'WOW EXPERIENCE' from entry to exit for every patient</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="goal-number">02</div>
                    <div class="goal-content">
                        <h5>Technology integration</h5>
                        <p>100% digital Workflow with AI, intraoral scanners,ipads,abd smile design</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="goal-number">03</div>
                    <div class="goal-content">
                        <h5>Aligner Excellence</h5>
                        <p>Achieve 500+ Invisalign/Aligner Smile transformation in 5 years</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="goal-number">04</div>
                    <div class="goal-content">
                        <h5>Educational Leadership</h5>
                        <p>Conduct Monthly oral Health awareness drives</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="goal-number">05</div>
                    <div class="goal-content">
                        <h5>infrastructure</h5>
                        <p>Expand to a 10-Chair premium dental center by 2028.</p>
                    </div>
                </div>
                <div class="goal-card">
                    <div class="goal-number">06</div>
                    <div class="goal-content">
                        <h5>Patient Loyality</h5>
                        <p>Launch Srinivasa Smile club-subscription Model</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats-section">
            <div class="stat-card">
                <span class="stat-number">1L+</span>
                <span class="stat-label">Happy Smiles</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">500+</span>
                <span class="stat-label">Aligner Cases</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">10</span>
                <span class="stat-label">Chairs by 2028</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">12</span>
                <span class="stat-label">Annual Drives</span>
            </div>
        </section>

    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>