<?php
// Database connection
include './db.connection/db_connection.php';

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {
    // Fetch blog data including Telugu fields
    $stmt = $conn->prepare("SELECT title, main_content, full_content, title_image, main_image, video, telugu_title, telugu_main_content, telugu_full_content FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $title_image, $main_image, $video, $telugu_title, $telugu_main_content, $telugu_full_content);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid blog ID.";
    exit;
}

$conn->close();


?>




<?php include 'navbar.php'; ?>

<main>
    <div class="container blog-detailed blog-detailed-sidebar" style="padding-bottom: 0px;padding-top: 50px; ">
        <div>
            <!-- Blog Content -->
            <div class=" offset-lg-0  ">
                <div class="blog-content">

                    <div class="d-flex justify-content-center mb-3 align-items-center">
                        <button id="english-btn" class="btn btn-sm me-2 language-btn" style="background-color: #ffc107; color: #000; border: none;">English</button>
                        <button id="telugu-btn" class="btn btn-sm me-3 language-btn" style="background-color: #28a745; color: #fff; border: none;">తెలుగు</button>


                    </div>




                    <!-- Video / Image -->
                    <?php
                    // Show ONLY section1_image just like list page
                    if (!empty($section1_image)) {
                        $section1_image_path = "./admin/uploads/photos/{$section1_image}";
                        echo "
        <img class='main-image img-fluid blog_main_img' 
        src='{$section1_image_path}' 
        style='width:100%; max-width:700px; height:auto; object-fit:contain; display:block; margin:0 auto;' 
        alt='Blog Image'>
    ";
                    } else {
                        echo "<p style='text-align:center;'>No image available</p>";
                    }
                    ?>





                </div>
                <!-- Blog Title -->
                <h4 class="blog-title tittle ls-n-20 mt-5" style="color: #283779; font-weight:800">
                    <div id="title-en"><?php echo htmlspecialchars($title); ?></div>
                    <div id="title-te" style="display:none;"><?php echo htmlspecialchars($telugu_title); ?></div>
                </h4>

                <!-- Main Content -->
                <div class="main-content" style="text-align: justify;">
                    <div id="main-en"><?php echo $main_content; ?></div>
                    <div id="main-te" style="display:none;"><?php echo $telugu_main_content; ?></div>
                </div>


                <!-- Full Content -->
                <div class="full-content">
                    <div id="full-en"><?php echo $full_content; ?></div>
                    <div id="full-te" style="display:none;"><?php echo $telugu_full_content; ?></div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->

    </div>
    <div class="d-flex justify-content-center mt-4">
        <button id="like-btn" class="btn btn-outline-success me-3">
            👍 Like (<span id="like-count"><?php echo $likes_count ?? 0; ?></span>)
        </button>

        <button id="dislike-btn" class="btn btn-outline-danger">
            👎 Dislike (<span id="dislike-count"><?php echo $dislikes_count ?? 0; ?></span>)
        </button>
    </div>

    </div>
    <div class="container">
        <div class="blogs_side my-5">
            <div class="side-bar">
                <h1 class="d-flex justify-content-center my-3">LATEST BLOGS</h1>
                <div class="swiper blog-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        // DB connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT id, title, main_image FROM blogs ORDER BY created_at DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $sidebar_image_path = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                $title_short = strlen($row['title']) > 50 ? substr($row['title'], 0, 50) . '...' : $row['title'];

                                echo "
                            <div class='swiper-slide d-flex justify-content-center'>
                                <div class='custom-card background_sidebar text-center' 
                                    style='width:100%; max-width:400px; height:350px; display:flex; flex-direction:column; justify-content:flex-start; align-items:center; padding:10px; border-radius:8px; box-shadow:0px 2px 10px rgba(0,0,0,0.1);'>
                                    <div style='flex:1; display:flex; align-items:center; justify-content:center; width:100%; overflow:hidden;'>
                                        <img src='{$sidebar_image_path}' class='img-fluid' style='width:100%; height:100%; object-fit:cover;' alt='Blog Image'>
                                    </div>
                                    <a href='fullblog.php?id={$row['id']}'>
                                        <p class='blog-card-text mt-2'>{$title_short}</p>
                                    </a>
                                </div>
                            </div>";
                            }
                        } else {
                            echo "<p>No blog posts found.</p>";
                        }
                        $conn->close();
                        ?>
                    </div>

                    <!-- Navigation -->
                    <!-- <div class="swiper-button-next blog-swiper-button-next"></div>
                    <div class="swiper-button-prev blog-swiper-button-prev"></div> -->

                    <!-- Pagination -->
                    <!-- <div class="swiper-pagination blog-swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </div>


</main>

<?php include('./footer.php'); ?>



<script>
    // Initialize Swiper
    var blogSwiper = new Swiper(".blog-swiper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".blog-swiper-button-next",
            prevEl: ".blog-swiper-button-prev",
        },
        pagination: {
            el: ".blog-swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            520: {
                slidesPerView: 2
            },
            950: {
                slidesPerView: 3
            },
        },
    });
</script>

<script>
    // Share button logic
    document.getElementById('share-btn').addEventListener('click', function() {
        const pageUrl = window.location.href;
        const copyMessage = document.getElementById('copy-message');
        if (navigator.clipboard) {
            navigator.clipboard.writeText(pageUrl).then(() => {
                copyMessage.textContent = 'Copied to clipboard!';
                copyMessage.style.display = 'inline';
                setTimeout(() => {
                    copyMessage.style.display = 'none';
                }, 3000);
            }).catch(err => {
                console.error(err);
            });
        } else {
            const tempInput = document.createElement('input');
            tempInput.value = pageUrl;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            copyMessage.textContent = 'Copied to clipboard! (Fallback)';
            copyMessage.style.display = 'inline';
            setTimeout(() => {
                copyMessage.style.display = 'none';
            }, 3000);
            document.body.removeChild(tempInput);
        }
    });

    // Language toggle
    const englishBtn = document.getElementById('english-btn');
    const teluguBtn = document.getElementById('telugu-btn');

    englishBtn.addEventListener('click', function() {
        document.getElementById('title-en').style.display = 'block';
        document.getElementById('main-en').style.display = 'block';
        document.getElementById('full-en').style.display = 'block';
        document.getElementById('title-te').style.display = 'none';
        document.getElementById('main-te').style.display = 'none';
        document.getElementById('full-te').style.display = 'none';
    });

    teluguBtn.addEventListener('click', function() {
        document.getElementById('title-en').style.display = 'none';
        document.getElementById('main-en').style.display = 'none';
        document.getElementById('full-en').style.display = 'none';
        document.getElementById('title-te').style.display = 'block';
        document.getElementById('main-te').style.display = 'block';
        document.getElementById('full-te').style.display = 'block';
    });
</script>






</body>

</html>