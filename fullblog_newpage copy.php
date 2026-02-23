<?php
include './db.connection/db_connection.php';

// GET BLOG ID
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// if ($blog_id <= 0) {
//     echo "Invalid Blog ID";
//     exit;
// }

// ---------------------------------------------
// FETCH BLOG DATA (SERVICE INCLUDED)
// ---------------------------------------------
$stmt = $conn->prepare("
    SELECT 
        title, main_content, full_content, 
        title_image, main_image, video, 
        telugu_title, telugu_main_content, telugu_full_content,
        section1_image,
        service
    FROM blogs 
    WHERE id = ?
");
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$stmt->bind_result(
    $title,
    $main_content,
    $full_content,
    $title_image,
    $main_image,
    $video,
    $telugu_title,
    $telugu_main_content,
    $telugu_full_content,
    $section1_image,
    $service
);
$stmt->fetch();
$stmt->close();

// ---------------------------------------------
// FETCH LIKE / DISLIKE COUNTS
// ---------------------------------------------
$count_sql = "SELECT 
                SUM(reaction='like') AS likes,
                SUM(reaction='dislike') AS dislikes
              FROM blog_reactions
              WHERE blog_id = ?";

$count_stmt = $conn->prepare($count_sql);
$count_stmt->bind_param("i", $blog_id);
$count_stmt->execute();
$count_stmt->bind_result($likes_count, $dislikes_count);
$count_stmt->fetch();
$count_stmt->close();

$conn->close();
?>

<?php
include './db.connection/db_connection.php';

$blog_id = $_GET['id'] ?? 0;

// Fetch blog data
$stmt = $conn->prepare("SELECT * FROM blogs WHERE id=?");
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();
?>

<?php
include 'db.connection/db_connection.php';

$latestNewsletter = null;

$sql = "SELECT title, pdf_file FROM pdf_uploads ORDER BY uploaded_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $latestNewsletter = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="te">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Blog Overlap Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #ffcfd2;
            font-family: 'Arial', sans-serif;
        }

        .fullblog-main-container {
            background-color: white;
            max-width: 1350px;
            margin: 30px auto;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Nav & Headers */
        .fullblog-nav .nav-link {
            color: #003049;
            font-weight: bold;
            font-size: 13px;
            padding: 0 15px;
        }

        .fullblog-sidebar-title {
            border-bottom: 2px solid #333;
            display: block;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            padding-bottom: 5px;
            letter-spacing: 1px;
        }

        /* Post Styles with OVERLAP Effect */
        .fullblog-post-wrapper {
            margin-bottom: 60px;
            position: relative;
        }

        .fullblog-post-img {
            width: 100%;
            height: 300px;
            /* Meeru adigina 300-400px height */
            object-fit: cover;
            display: block;
        }

        .fullblog-content-box {
            background: white;
            padding: 25px;
            border: 2px solid #f8ede3;
            z-index: 10;
            position: relative;
        }

        /* Desktop Overlap logic */
        @media (min-width: 992px) {

            /* Image right side unnapudu content box left ki vachi image ni cover chestundi */
            .fullblog-overlap-left {
                margin-right: -80px;
                /* Eadi content ni image meedaki lagutundi */
                margin-top: 100px;
            }

            /* Image left side unnapudu content box right ki vachi image ni cover chestundi */
            .fullblog-overlap-right {
                margin-left: -80px;
                margin-top: 120px;
            }
        }

        /* Mobile View - No Overlap, single column */
        @media (max-width: 991px) {
            .fullblog-content-box {
                margin: 0;
                margin-top: -30px;
                width: 90%;
                margin-left: 5%;
            }

            .fullblog-post-img {
                height: 300px;
            }
        }

        /* Read More Hidden Text */
        .fullblog-more-text {
            display: none;
        }

        .fullblog-btn-read {
            background-color: #003049;
            color: white;
            border: none;
            padding: 6px 20px;
            font-size: 12px;
            border-radius: 0;
        }

        /* Sidebar Helpers */
        .fullblog-category-item {
            background-color: #f8ede3;
            margin-bottom: 8px;
            padding: 8px 15px;
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            font-weight: bold;
            color: #8d6e63;
        }

        .fullblog-cat-num {
            border: 1px solid #eab08d;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: inline-block;
            text-align: center;
            background: white;
            line-height: 18px;
            font-size: 11px;
        }



        /* header section stylings  */

        .fullblog-main-container {
            background-color: white;
            max-width: 1000px;
            margin: 30px auto;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* --- Profile Section Styles --- */
        .fullblog-profile-wrapper {
            position: relative;
            margin-bottom: 50px;
        }

        .fullblog-profile-img {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            border: 10px solid #f8ede3;
            z-index: 1;
            position: relative;
        }

        .fullblog-intro-content {
            z-index: 2;
            position: relative;
        }

        .fullblog-intro-text h2 {
            color: #003366;
            font-weight: 800;
            font-size: 38px;
            line-height: 1;
            margin-bottom: 5px;
        }

        .fullblog-intro-text span {
            color: #5c85ad;
            font-style: italic;
            font-size: 18px;
        }

        /* Overlap Box Style */
        .fullblog-description-box {
            background-color: #f8ede3;
            padding: 20px;
            margin-top: 15px;
            border-radius: 4px;
            width: 320px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.05);
            /* Overlap logic for Desktop */
            position: relative;
        }

        @media (min-width: 768px) {
            .fullblog-description-box {
                margin-left: -60px;
                /* Eadi box ni image meedaki jaruputundi */
                margin-top: 20px;
            }
        }

        .fullblog-social-links i {
            color: #003366;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        .fullblog-social-links i:hover {
            color: #5c85ad;
        }

        /* Mobile View Adjustments */
        @media (max-width: 767px) {
            .fullblog-description-box {
                width: 100%;
                margin-left: 0;
                text-align: center;
            }

            .fullblog-profile-img {
                width: 200px;
                height: 200px;
            }
        }
    </style>
</head>

<body>



    <div class="container fullblog-main-container">
        <header class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
            <!-- <h2 class="fw-black" style="color: #003049; font-weight: 900;">THE BLOG</h2> -->

            <img src="assets/img/srinivasa/srinivasa.png"
                class="img-fluid "
                alt="Logo" style="width:250px;  height:90px">
            <div class="input-group" style="width: 180px;">
                <input type="text" class="form-control form-control-sm border-0 bg-light" placeholder="search">
                <span class="input-group-text border-0 bg-light"><i class="fas fa-search"></i></span>
            </div>
        </header>

        <nav class="nav fullblog-nav justify-content-center mb-5 border-bottom pb-2">
            <a class="nav-link" href="index.php">home</a>
            <a class="nav-link" href="about_srinivasa_multispeciality_dental_hospital.php">about</a>
            <a class="nav-link" href="services_srinivasa_multispeciality_dental_hospital.php">service</a>
            <a class="nav-link" href="gallery_srinivasa_multispeciality_dental_hospital.php">gallery</a>
            <a class="nav-link" href="blogs_srinivasa_multispeciality_dental_hospital.php">blogs</a>
            <a class="nav-link" href="appointment_srinivasa_dental_hospital.php">Appointment</a>
        </nav>



        <?php if (!empty($service)) { ?>
            <div class="text-center mb-3">
                <span class="badge_service_name px-4 py-2">
                    <?= htmlspecialchars($service) ?>
                </span>
            </div>
        <?php } ?>




        <div class="row">
            <div class="col-lg-8">

                <div class="row align-items-center fullblog-profile-wrapper text-center text-md-start">
                    <div class="col-md-5 d-flex justify-content-center justify-content-md-end">
                        <img src="./assets/img/srinivasa/kiran_raju.png" class="fullblog-profile-img shadow-sm"
                            alt="Sarah">
                    </div>

                    <div class="col-md-7 fullblog-intro-content">
                        <div class="fullblog-intro-text">
                            <h2 class="text-uppercase">Dr,D.V.S kiran raju <br> </h2>
                            <span class="d-block mb-2">write your description</span>
                        </div>

                        <div class="fullblog-description-box">
                            <p class="small text-muted mb-3">
                                MDS - Orthodontist and Invisalign Gold provider brought global advancements like Invisalign & iTero to Kakinada, guided by the belief: "Our people deserve the world's best too
                            </p>
                            <!-- <div class="fullblog-social-links text-end">
                                <small class="fw-bold me-2 d-block mb-1" style="font-size: 11px;">Follow me on</small>
                                <i class="fab fa-twitter mx-1"></i>
                                <i class="fab fa-facebook-f mx-1"></i>
                                <i class="fab fa-linkedin-in mx-1"></i>
                                <i class="fab fa-instagram mx-1"></i>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="row fullblog-post-wrapper g-0 align-items-center">
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="fullblog-content-box fullblog-overlap-left">
                            <p class="small text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa libero, finibus
                                non sem suscipit, tincidunt varius ante.

                                <span class="fullblog-more-text" id="post1Text">
                                    <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quia alias ipsam aut ea esse pariatur maxime dolores sequi. Inventore consequatur ab magnam ex in dolorum quaerat illo ea modi.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat aliquid odio dolores suscipit alias illo, voluptatem adipisci aperiam natus veniam ex nam ipsam! Corrupti rerum voluptas ut praesentium, beatae accusantium?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione libero aut sunt eveniet officiis quaerat vero explicabo, voluptas delectus nobis labore asperiores debitis odio, aspernatur rerum error eum maxime commodi!
                                </span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="fullblog-btn-read" onclick="toggleContent('post1Text', this)">Read
                                    more</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="./assets/img/services/service_side_image2.jpg"
                            class="fullblog-post-img" alt="Beach">
                    </div>
                </div>

                <div class="row fullblog-post-wrapper g-0 align-items-center">
                    <div class="col-md-5">
                        <img src="./assets/img/services/service_side_image1.jpg"
                            class="fullblog-post-img" alt="Food">
                    </div>
                    <div class="col-md-7">
                        <div class="fullblog-content-box fullblog-overlap-right">
                            <p class="small text-muted">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.
                                <span class="fullblog-more-text" id="post2Text">
                                    <br><br>Healthy food choices leading to a better lifestyle. Overlap design matches
                                    your original image perfectly now.
                                </span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="fullblog-btn-read" onclick="toggleContent('post2Text', this)">Read
                                    more</button>
                                <!-- <div class="small text-muted">share: <i class="fab fa-twitter mx-1"></i> <i
                                        class="fab fa-facebook-f mx-1"></i></div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row fullblog-post-wrapper g-0 align-items-center">
                    <div class="col-md-7 order-2 order-md-1">
                        <div class="fullblog-content-box fullblog-overlap-left">
                            <p class="small text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa libero, finibus
                                non sem suscipit, tincidunt varius ante.
                                <span class="fullblog-more-text" id="post1Text">
                                    <br><br>Ee content meeru "Read More" click chesinappudu matrame kanipisthundi.
                                    Design motham clean ga overlap ayyi untundi.
                                </span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="fullblog-btn-read" onclick="toggleContent('post1Text', this)">Read
                                    more</button>
                                <!-- <div class="small text-muted">share: <i class="fab fa-twitter mx-1"></i> <i
                                        class="fab fa-facebook-f mx-1"></i></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="./assets/img/services/s2.png"
                            class="fullblog-post-img" alt="Beach">
                    </div>
                </div>


            </div>


            <div class="col-lg-4 ps-lg-4" style=" position: static;">
                <div class="mb-5">
                    <h6 class="fullblog-sidebar-title">NEWSLETTER</h6>

                    <?php if ($latestNewsletter && !empty($latestNewsletter['pdf_file'])) {

                        // Correct path based on your structure
                        $pdfPath = "admin/uploads/pdf/" . $latestNewsletter['pdf_file'];
                    ?>

                        <a href="<?php echo $pdfPath; ?>"
                            target="_blank"
                            style="text-decoration:none;">

                            <p class="fw-bold" style="font-size:13px; color:#eab08d;">
                                <?php echo htmlspecialchars($latestNewsletter['title']); ?>
                            </p>

                            <small style="font-size:11px; color:gray;">
                                Click to view full newsletter →
                            </small>

                        </a>

                    <?php } else { ?>
                        <p style="font-size:12px;">No newsletter available.</p>
                    <?php } ?>

                </div>






                <div class="mb-5">
                    <h6 class="fullblog-sidebar-title">Key Points</h6>
                    <div class="fullblog-category-item"> BEAUTY</div>
                    <div class="fullblog-category-item"> MUSIC</div>
                    <div class="fullblog-category-item"> LIFESTYLE</div>
                    <div class="fullblog-category-item"> YOGA</div>
                </div>

                <div class="mb-5 text-center">
                    <h6 class="fullblog-sidebar-title">TAGS</h6>
                    <span class="badge border text-muted fw-normal p-2 m-1">HEALTH</span>
                    <span class="badge border text-muted fw-normal p-2 m-1">TRAVEL</span>
                    <span class="badge border text-muted fw-normal p-2 m-1">FOOD</span>
                </div>
            </div>

        </div>
    </div>

    <script>
        function toggleContent(id, btn) {
            var textSpan = document.getElementById(id);
            if (textSpan.style.display === "inline") {
                textSpan.style.display = "none";
                btn.innerHTML = "Read more";
            } else {
                textSpan.style.display = "inline";
                btn.innerHTML = "Read less";
            }
        }
    </script>

</body>

</html>












<?php
include './db.connection/db_connection.php';

// BLOG ID fetch cheyadam
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id <= 0) {
    echo "Invalid Blog ID";
    exit;
}

// BLOG DATA Fetching
$stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();
$stmt->close();

// Newsletter Fetching
$latestNewsletter = null;
$news_sql = "SELECT title, pdf_file FROM pdf_uploads ORDER BY uploaded_at DESC LIMIT 1";
$news_result = $conn->query($news_sql);
if ($news_result && $news_result->num_rows > 0) {
    $latestNewsletter = $news_result->fetch_assoc();
}

// Helper Function: 10 Words mathrame chupinchadaniki
function getFirst10Words($text) {
    $words = explode(' ', strip_tags($text));
    if (count($words) > 10) {
        return implode(' ', array_slice($words, 0, 10)) . '...';
    }
    return $text;
}
?>

<!DOCTYPE html>
<html lang="te">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Srinivasa Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #ffcfd2; font-family: 'Arial', sans-serif; }
        .fullblog-main-container { background-color: white; max-width: 1300px; margin: 30px auto; padding: 40px; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .fullblog-nav .nav-link { color: #003049; font-weight: bold; font-size: 13px; padding: 0 15px; text-transform: uppercase; }
        
        /* Profile Section (Static) */
        .fullblog-profile-img { border-radius: 50%; width: 220px; height: 220px; object-fit: cover; border: 8px solid #f8ede3; }
        .fullblog-description-box { background-color: #f8ede3; padding: 20px; border-radius: 4px; position: relative; z-index: 5; margin-left: -50px; margin-top: 20px; }

        /* Blog Section (Dynamic) */
        .fullblog-post-wrapper { margin-bottom: 80px; position: relative; }
        .fullblog-post-img { width: 100%; height: 350px; object-fit: cover; display: block; }
        .fullblog-content-box { background: white; padding: 30px; border: 2px solid #f8ede3; z-index: 10; position: relative; }
        
        @media (min-width: 992px) {
            .fullblog-overlap-left { margin-right: -80px; margin-top: 60px; }
        }

        .fullblog-more-text { display: none; }
        .fullblog-btn-read { background-color: #003049; color: white; border: none; padding: 8px 25px; font-size: 12px; cursor: pointer; }
        .fullblog-sidebar-title { border-bottom: 2px solid #333; text-align: center; margin-bottom: 20px; font-weight: bold; padding-bottom: 5px; }
        .fullblog-category-item { background-color: #f8ede3; margin-bottom: 8px; padding: 8px 15px; font-size: 13px; font-weight: bold; color: #8d6e63; }
    </style>
</head>
<body>

<div class="container fullblog-main-container">
    <header class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <img src="assets/img/srinivasa/srinivasa.png" style="width:250px; height:90px" alt="Logo">
        <div class="input-group" style="width: 180px;">
            <input type="text" class="form-control form-control-sm border-0 bg-light" placeholder="search">
            <span class="input-group-text border-0 bg-light"><i class="fas fa-search"></i></span>
        </div>
    </header>

    <nav class="nav fullblog-nav justify-content-center mb-5 border-bottom pb-2">
        <a class="nav-link" href="index.php">home</a>
        <a class="nav-link" href="#">about</a>
        <a class="nav-link" href="#">service</a>
        <a class="nav-link" href="#">blogs</a>
    </nav>

    <div class="row">
        <div class="col-lg-8">
            
            <div class="row align-items-center mb-5 text-center text-md-start">
                <div class="col-md-5 d-flex justify-content-center">
                    <img src="./assets/img/srinivasa/kiran_raju.png" class="fullblog-profile-img shadow-sm" alt="Dr. Kiran">
                </div>
                <div class="col-md-7">
                    <h2 class="text-uppercase fw-bold" style="color: #003366;">Dr. D.V.S Kiran Raju</h2>
                    <span class="text-muted italic">MDS - Orthodontist</span>
                    <div class="fullblog-description-box shadow-sm">
                        <p class="small text-muted mb-0">
                            Invisalign Gold provider brought global advancements like Invisalign & iTero to Kakinada, guided by the belief: "Our people deserve the world's best too."
                        </p>
                    </div>
                </div>
            </div>

            <hr class="mb-5">

            <div class="row fullblog-post-wrapper g-0 align-items-center">
                <div class="col-md-7 order-2 order-md-1">
                    <div class="fullblog-content-box fullblog-overlap-left shadow-sm">
                        <h4 class="fw-bold mb-3" style="color:#003049;"><?php echo $blog['title']; ?></h4>
                        
                        <p class="small text-muted">
                            <span id="short-text">
                                <?php echo getFirst10Words($blog['main_content']); ?>
                            </span>

                            <span id="full-text" class="fullblog-more-text">
                                <?php echo $blog['main_content']; ?>
                                <br><br>
                                <?php echo $blog['full_content']; ?>
                            </span>
                        </p>

                        <div class="mt-3">
                            <button class="fullblog-btn-read" id="readBtn" onclick="toggleReadMore()">Read more</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 order-1 order-md-2">
                    <?php if(!empty($blog['video'])): ?>
                        <video class="fullblog-post-img shadow" controls>
                            <source src="./admin/uploads/videos/<?php echo $blog['video']; ?>" type="video/mp4">
                        </video>
                    <?php else: ?>
                        <img src="./admin/uploads/photos/<?php echo $blog['main_image']; ?>" class="fullblog-post-img shadow" alt="Blog Image">
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <div class="col-lg-4 ps-lg-4">
            <div class="mb-5">
                <h6 class="fullblog-sidebar-title">NEWSLETTER</h6>
                <?php if ($latestNewsletter): ?>
                    <a href="admin/uploads/pdf/<?php echo $latestNewsletter['pdf_file']; ?>" target="_blank" style="text-decoration:none;">
                        <p class="fw-bold mb-0" style="font-size:13px; color:#eab08d;"><?php echo $latestNewsletter['title']; ?></p>
                        <small style="font-size:11px; color:gray;">Click to view full newsletter →</small>
                    </a>
                <?php endif; ?>
            </div>

            <div class="mb-5">
                <h6 class="fullblog-sidebar-title">KEY POINTS</h6>
                <?php 
                if(!empty($blog['keypoints'])){
                    $points = explode(',', $blog['keypoints']);
                    foreach($points as $p) echo '<div class="fullblog-category-item">'.trim($p).'</div>';
                }
                ?>
            </div>

            <div class="mb-5 text-center">
                <h6 class="fullblog-sidebar-title">TAGS</h6>
                <?php 
                if(!empty($blog['hashtags'])){
                    $tags = explode(',', $blog['hashtags']);
                    foreach($tags as $t) echo '<span class="badge border text-muted fw-normal p-2 m-1">#'.trim($t).'</span>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleReadMore() {
        var shortText = document.getElementById("short-text");
        var fullText = document.getElementById("full-text");
        var btn = document.getElementById("readBtn");

        if (fullText.style.display === "none" || fullText.style.display === "") {
            fullText.style.display = "inline";
            shortText.style.display = "none";
            btn.innerHTML = "Read less";
        } else {
            fullText.style.display = "none";
            shortText.style.display = "inline";
            btn.innerHTML = "Read more";
        }
    }
</script>

</body>
</html>