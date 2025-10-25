
  <style>
    /* Preloader Full Screen Background */
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
     
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    /* Preloader Image */
    #preloader img {
      width: 150px; /* Change image size */
      animation: pulse 1.5s infinite;
    }

    /* Simple image animation */
    /* @keyframes pulse {
      0% { transform: scale(1); opacity: 0.8; }
      50% { transform: scale(1.1); opacity: 1; }
      100% { transform: scale(1); opacity: 0.8; }
    } */

    /* Hide preloader after load */
    #preloader.hidden {
      opacity: 0;
      visibility: hidden;
    }

    /* Example content */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #fff;
    }
  </style>


  <!-- 🔹 Preloader Section -->
  <div id="preloader">
    <img src="assets/img/srinivasa/image 1.png" alt="Loading...">
  </div>

  <!-- 🔹 Your Website Content -->


  <!-- 🔹 JavaScript to Hide Preloader -->
  <script>
    window.addEventListener("load", function() {
      const preloader = document.getElementById("preloader");
      preloader.classList.add("hidden");
    });
  </script>


