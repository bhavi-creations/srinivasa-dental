<?php
// Database connection
include './db.connection/db_connection.php';

// 1️⃣ Fetch ALL blogs (latest first)
$sql = "SELECT id, title, service, main_content, full_content, main_image, video, logo, logo_link 
        FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);

$blogs = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
}

// Count total blogs
$total_blogs = count($blogs);

// Split equally (left/right sidebar)
$left_count = ceil($total_blogs / 2);
$right_count = $total_blogs - $left_count;

// Function to limit words in title
function get_words($text, $limit)
{
    $words = explode(" ", strip_tags($text));
    return implode(" ", array_slice($words, 0, $limit));
}

// 2️⃣ Fetch single blog for service_details.php
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$blog = null;
if ($blog_id > 0) {
    $stmt = $conn->prepare("SELECT id, title, service, main_content, full_content, main_image, video, logo, logo_link 
                            FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();
    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srinivasa-Dental</title>

    <!-- libraries CSS -->
    <!-- <link rel="stylesheet" href="assets2/icon/flaticon_digicom.css"> -->
    <link rel="stylesheet" href="assets2/icon/flaticon_err.css">
    <link rel="stylesheet" href="assets2/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/vendor/splide/splide.min.css">
    <link rel="stylesheet" href="assets2/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets2/vendor/animate-wow/animate.min.css">
    <link rel="stylesheet" href="assets2/vendor/slim-select/slimselect.css">

    <!-- custom CSS -->
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- SIDEBAR SECTION START -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index.html">
                    <img src="assets2/img/logo.svg" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

        <!-- sidebar content -->
        <div>
            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">About Us</span>
                <p class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim odio eveniet ex dicta
                    beatae, repellat voluptatibus ratione alias modi maxime, quaerat sed iste nihil molestiae numquam
                    unde fuga qui velit!</p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Location</span>
                <p class="descr"><i class="flaticon-pin"></i><span>123 Main Street, New York, NY 10012</span></p>
            </div>

            <div class="ul-sidebar-txt-block">
                <span class="title ul-sidebar-footer-title">Contact Us</span>
                <p class="descr"><i class="flaticon-call"></i><a href="tel:1234567890">123-456-7890</a></p>
            </div>
        </div>

        <!-- sidebar footer -->
        <div class="ul-sidebar-footer">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="#"><i class="flaticon-facebook"></i></a>
                <a href="#"><i class="flaticon-twitter"></i></a>
                <a href="#"><i class="flaticon-instagram"></i></a>
                <a href="#"><i class="flaticon-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- SIDEBAR SECTION END -->


    <!-- SEARCH MODAL SECTION START -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- SEARCH MODAL SECTION END -->





    <main>



        <section class="ul-service-details ul-section-spacing full_blogs_section d-none d-lg-block">
            <div class="container-fluid">
                <div class="row g-xl-5 g-4 mx-3">

                    <!-- Left Sidebar (First Half Blogs) -->
                    <div class="col-lg-3 col-md-5">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <!-- Show only 2 blogs at a time, scroll for rest -->
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">Latest Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, 0, $left_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "./admin/uploads/photos/{$row['main_image']}"
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' style='width:30px; height:30px; object-fit:cover; border-radius:5px;' alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Middle Content -->
                    <div class="col-lg-6 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="scrollable-content text-center">
                            <?php
                            // Determine the link (if empty, use #)
                            $redirect_link = !empty($blog['logo_link']) ? htmlspecialchars($blog['logo_link']) : '#';
                            ?>

                            <!-- Logo -->
                            <?php if (!empty($blog['logo'])): ?>
                                <a href="<?php echo $redirect_link; ?>" target="_blank">
                                    <img src="./admin/uploads/logos/<?php echo htmlspecialchars($blog['logo']); ?>"
                                        class="img-fluid mb-3"
                                        alt="Blog Logo"
                                        style="max-height:150px; width:auto;">
                                </a>
                            <?php else: ?>
                                <a href="<?php echo $redirect_link; ?>" target="_blank">
                                    <img src="assets/img/default-logo.png"
                                        class="img-fluid mb-3"
                                        alt="Default Logo"
                                        style="max-height:150px; width:auto;">
                                </a>
                            <?php endif; ?>

                            <!-- Title -->
                            <?php if (!empty($blog['title'])): ?>
                                <p>
                                    <a href="<?php echo $redirect_link; ?>" target="_blank" style="text-decoration:none; color:inherit;">
                                        <?php echo htmlspecialchars($blog['title']); ?>
                                    </a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>


                    <!-- Right Sidebar (Second Half Blogs) -->
                    <div class="col-lg-3 col-md-3">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">More Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, $left_count, $right_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "./admin/uploads/photos/{$row['main_image']}"
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' style='width:30px; height:30px; object-fit:cover; border-radius:5px;' alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="ul-service-details ul-section-spacing full_blogs_section d-block d-lg-none">
            <div class="container-fluid">
                <div class="row g-xl-5 g-4 mx-3">



                    <!-- Middle Content -->
                    <div class="col-lg-6  d-flex justify-content-center align-items-center ">
                        <div class="scrollable-content text-center blogs_logo">
                            <?php
                            // Determine the link (if empty, use #)
                            $redirect_link = !empty($blog['logo_link']) ? htmlspecialchars($blog['logo_link']) : '#';
                            ?>

                            <!-- Logo -->
                            <?php if (!empty($blog['logo'])): ?>
                                <a href="<?php echo $redirect_link; ?>" target="_blank">
                                    <img src="./admin/uploads/logos/<?php echo htmlspecialchars($blog['logo']); ?>"
                                        class="img-fluid mb-3"
                                        alt="Blog Logo"
                                        style="max-height:150px; width:auto;">
                                </a>
                            <?php else: ?>
                                <a href="<?php echo $redirect_link; ?>" target="_blank">
                                    <img src="assets/img/default-logo.png"
                                        class="img-fluid mb-3"
                                        alt="Default Logo"
                                        style="max-height:150px; width:auto;">
                                </a>
                            <?php endif; ?>

                            <!-- Title -->
                            <?php if (!empty($blog['title'])): ?>
                                <h5>
                                    <a href="<?php echo $redirect_link; ?>" target="_blank" style="text-decoration:none; color:inherit;">
                                        <?php echo htmlspecialchars($blog['title']); ?>
                                    </a>
                                </h5>
                            <?php endif; ?>
                        </div>
                    </div>




                    <!-- Left Sidebar (First Half Blogs) -->
                    <div class="col-lg-3 col-md-6 blogs_left_blogs">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <!-- Show only 2 blogs at a time, scroll for rest -->
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">Latest Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, 0, $left_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "./admin/uploads/photos/{$row['main_image']}"
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' style='width:50px; height:50px; object-fit:cover; border-radius:5px;' alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                    <!-- Right Sidebar (Second Half Blogs) -->
                    <div class="col-lg-3 col-md-6 blogs_right_blogs">
                        <div class="ul-service-details-sidebar fixed-sidebar">
                            <div class="ul-service-details-sidebar-widget" style="max-height:200px; overflow-y:auto;">
                                <h4 class="text-center mb-3">More Blogs</h4>
                                <?php
                                if (!empty($blogs)) {
                                    foreach (array_slice($blogs, $left_count, $right_count) as $row) {
                                        $image_path = !empty($row['main_image'])
                                            ? "./admin/uploads/photos/{$row['main_image']}"
                                            : "https://mailrelay.com/wp-content/uploads/2018/03/que-es-un-blog-1.png";
                                        echo "
                                    <a href='fullblog.php?id={$row['id']}' class='d-flex align-items-center mb-3 text-decoration-none'>
                                        <img src='{$image_path}' class='me-2' style='width:50px; height:50px; object-fit:cover; border-radius:5px;' alt='Blog Image'>
                                        <h6 class='mb-0 text-dark'>" . get_words($row['title'], 6) . "...</h6>
                                    </a>
                                ";
                                    }
                                } else {
                                    echo "<p>No blogs found.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>











        <section class="ul-service-details  second_section_blogs">
            <div class="container-fluid">
                <div class="row g-xl-5 g-4 mx-3">

                    <div class="col-lg-3 col-md-2">

                        <img src="./assets/img/services/service_side_image1.jpg" alt="" style="height:280px; width: 330px;">


                        <div class="card" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
                            <h3 class="mani">Contact Us</h3>
                            <p>For Digital Marketing Agency</p>
                            <strong>
                                <a href="tel:+919290019948" style="text-decoration:none; color:#007bff;">
                                    +91 9290019948
                                </a>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 middle_content">
                        <?php if ($blog): ?>
                            <div style="max-height: 380px; overflow-y: auto; padding-right:10px;">
                                <!-- Logo -->
                                <!-- <?php if (!empty($blog['logo'])): ?>
                                    <div class="text-center mb-3">
                                        <a href="<?php echo !empty($blog['logo_link']) ? htmlspecialchars($blog['logo_link']) : '#'; ?>" target="_blank">
                                            <img src="uploads/logos/<?php echo htmlspecialchars($blog['logo']); ?>"
                                                style="max-height:100px; width:auto;" alt="Blog Logo">
                                        </a>
                                    </div>
                                <?php endif; ?> -->

                                <!-- Service Name -->
                                <?php if (!empty($blog['service'])): ?>
                                    <h2 class="ul-service-details-title text-center"><?php echo htmlspecialchars($blog['service']); ?></h2>
                                <?php endif; ?>




                                <!-- Main Content -->
                                <?php if (!empty($blog['main_content'])): ?>
                                    <p class="ul-service-details-descr">
                                        <?php echo nl2br(strip_tags($blog['main_content'])); ?>
                                    </p>
                                <?php endif; ?>





                                <div class="row mb-3 mx-2">
                                    <?php if (!empty($blog['main_image'])): ?>
                                        <div class="col-12 col-md-6 mb-3 mb-md-0 text-center">
                                            <img src="./admin/uploads/photos/<?php echo htmlspecialchars($blog['main_image']); ?>"
                                                alt="Main Image" class="img-fluid" style="max-height:200px; width:auto;">
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($blog['video'])): ?>
                                        <div class="col-12 col-md-6 text-center">
                                            <video src="./admin/uploads/videos/<?php echo htmlspecialchars($blog['video']); ?>"
                                                controls style="max-width:100%; height:auto;"></video>
                                        </div>
                                    <?php endif; ?>
                                </div>










                                <!-- Full Content -->
                                <?php if (!empty($blog['full_content'])): ?>
                                    <div class="ul-service-details-full-content mt-3">
                                        <?php echo nl2br(strip_tags($blog['full_content'])); ?>
                                    </div>
                                <?php endif; ?>




                                <button class="prs-btn mt-3" onclick="openModal()">Click to Review</button>


                                <div id="reviewModal" class="prs-modal">
                                    <div class="prs-modal-content">
                                        <button class="prs-form-close-btn" onclick="closeModal()">×</button>
                                        <h3 style="margin-bottom:15px;">Write a Review</h3>
                                        <input type="text" id="name" placeholder="Your Name">
                                        <input type="email" id="email" placeholder="Your Email">

                                        <div class="prs-star-rating" id="starRating">
                                            <span class="prs-star" data-value="1">&#9733;</span>
                                            <span class="prs-star" data-value="2">&#9733;</span>
                                            <span class="prs-star" data-value="3">&#9733;</span>
                                            <span class="prs-star" data-value="4">&#9733;</span>
                                            <span class="prs-star" data-value="5">&#9733;</span>
                                        </div>

                                        <textarea id="review" placeholder="Your Review"></textarea>
                                        <button class="prs-btn" onclick="submitReview()">Submit</button>
                                    </div>
                                </div>

                                <div class="prs-reviews" id="reviewsContainer" style="margin-top:15px;"></div>

                                <script>
                                    let selectedRating = 0;

                                    // Modal Functions
                                    function openModal() {
                                        document.getElementById("reviewModal").style.display = "flex";
                                    }

                                    function closeModal() {
                                        document.getElementById("reviewModal").style.display = "none";
                                    }

                                    // Star Rating
                                    document.querySelectorAll(".prs-star").forEach(star => {
                                        star.addEventListener("click", function() {
                                            selectedRating = this.dataset.value;
                                            document.querySelectorAll(".prs-star").forEach(s => s.classList.remove("selected"));
                                            for (let i = 0; i < selectedRating; i++) {
                                                document.querySelectorAll(".prs-star")[i].classList.add("selected");
                                            }
                                        });
                                    });

                                    // Load Reviews
                                    function loadReviews() {
                                        let container = document.getElementById("reviewsContainer");
                                        container.innerHTML = "";
                                        let reviews = JSON.parse(localStorage.getItem("reviews")) || [];

                                        if (reviews.length === 0) {
                                            container.innerHTML = "<p>No reviews yet. Be the first to review!</p>";
                                            return;
                                        }

                                        reviews.forEach((rev, index) => {
                                            let replyCount = rev.replies ? rev.replies.length : 0;
                                            let card = document.createElement("div");
                                            card.className = "prs-review-card";
                                            card.innerHTML = `
                <h4>${rev.name}</h4>
                <div class="prs-stars">${"★".repeat(rev.rating)}${"☆".repeat(5 - rev.rating)}</div>
                <p>${rev.review}</p>
                <button class="prs-btn" style="background:#28a745;" onclick="replyForm(this, ${index})">Reply</button>
                <div class="prs-reply-box"></div>
                <button class="prs-btn" style="background:#6c757d;margin-top:8px;" onclick="toggleReplies(${index})">
                  View Replies (${replyCount})
                </button>
                <div class="prs-reply-list" id="replies-${index}" style="display:none; margin-top:8px;">
                  ${(rev.replies || []).map((r, ridx) => `
                      <div class='prs-reply'>
                        <strong>${r.name}:</strong> ${r.text}
                        <button class="prs-btn" style="background:#17a2b8;margin-left:10px;" onclick="replyToReplyForm(${index}, ${ridx})">Reply</button>
                        <div id="nested-reply-box-${index}-${ridx}" style="margin-left:20px;"></div>
                        ${(r.replies || []).map(nr => `
                            <div class='prs-reply' style="margin-left:20px;">
                                <strong>${nr.name}:</strong> ${nr.text}
                            </div>
                        `).join("")}
                      </div>
                  `).join("")}
                </div>
            `;
                                            container.appendChild(card);
                                        });
                                    }

                                    // Show All Reviews (button click)
                                    function showAllReviews() {
                                        document.getElementById("reviewsContainer").style.display = "block";
                                        loadReviews();
                                    }

                                    // Submit Review
                                    function submitReview() {
                                        let name = document.getElementById("name").value;
                                        let email = document.getElementById("email").value;
                                        let review = document.getElementById("review").value;

                                        if (!name || !email || !review || selectedRating == 0) {
                                            alert("Please fill all fields and select rating!");
                                            return;
                                        }

                                        let reviews = JSON.parse(localStorage.getItem("reviews")) || [];
                                        reviews.push({
                                            name,
                                            email,
                                            review,
                                            rating: selectedRating,
                                            replies: []
                                        });
                                        localStorage.setItem("reviews", JSON.stringify(reviews));

                                        closeModal();
                                        document.getElementById("name").value = "";
                                        document.getElementById("email").value = "";
                                        document.getElementById("review").value = "";
                                        selectedRating = 0;
                                        document.querySelectorAll(".prs-star").forEach(s => s.classList.remove("selected"));

                                        loadReviews();
                                    }

                                    // Delete Review
                                    function deleteReview(index) {
                                        let reviews = JSON.parse(localStorage.getItem("reviews")) || [];
                                        reviews.splice(index, 1);
                                        localStorage.setItem("reviews", JSON.stringify(reviews));
                                        loadReviews();
                                    }

                                    // Reply Form
                                    function replyForm(button, index) {
                                        let replyBox = button.nextElementSibling;
                                        replyBox.innerHTML = `
            <input type="text" placeholder="Your Name" style="width:80%;margin-top:5px;padding:6px;">
            <input type="text" placeholder="Write reply..." style="width:80%;margin-top:5px;padding:6px;">
            <button class="prs-btn" style="background:#6c757d;margin-top:5px;" onclick="submitReply(this, ${index})">Send</button>
        `;
                                    }

                                    // Submit Reply
                                    function submitReply(button, index) {
                                        let inputs = button.parentElement.querySelectorAll("input");
                                        let replyName = inputs[0].value.trim();
                                        let replyText = inputs[1].value.trim();

                                        if (!replyName || !replyText) {
                                            alert("Please enter name and reply!");
                                            return;
                                        }

                                        let reviews = JSON.parse(localStorage.getItem("reviews")) || [];
                                        reviews[index].replies = reviews[index].replies || [];
                                        reviews[index].replies.push({
                                            name: replyName,
                                            text: replyText,
                                            replies: []
                                        });
                                        localStorage.setItem("reviews", JSON.stringify(reviews));

                                        loadReviews();
                                    }

                                    // Reply-to-Reply Form
                                    function replyToReplyForm(reviewIndex, replyIndex) {
                                        let box = document.getElementById(`nested-reply-box-${reviewIndex}-${replyIndex}`);
                                        box.innerHTML = `
            <input type="text" placeholder="Your Name" style="width:70%;margin-top:5px;padding:6px;">
            <input type="text" placeholder="Write reply..." style="width:70%;margin-top:5px;padding:6px;">
            <button class="prs-btn" style="background:#17a2b8;margin-top:5px;" onclick="submitNestedReply(${reviewIndex}, ${replyIndex}, this)">Send</button>
        `;
                                    }

                                    // Submit Nested Reply
                                    function submitNestedReply(reviewIndex, replyIndex, button) {
                                        let inputs = button.parentElement.querySelectorAll("input");
                                        let replyName = inputs[0].value.trim();
                                        let replyText = inputs[1].value.trim();

                                        if (!replyName || !replyText) {
                                            alert("Please enter name and reply!");
                                            return;
                                        }

                                        let reviews = JSON.parse(localStorage.getItem("reviews")) || [];
                                        reviews[reviewIndex].replies[replyIndex].replies = reviews[reviewIndex].replies[replyIndex].replies || [];
                                        reviews[reviewIndex].replies[replyIndex].replies.push({
                                            name: replyName,
                                            text: replyText
                                        });
                                        localStorage.setItem("reviews", JSON.stringify(reviews));

                                        loadReviews();
                                    }

                                    // Toggle Replies
                                    function toggleReplies(index) {
                                        let repliesDiv = document.getElementById(`replies-${index}`);
                                        repliesDiv.style.display = repliesDiv.style.display === "none" ? "block" : "none";
                                    }

                                    // Load on page refresh
                                    document.addEventListener("DOMContentLoaded", loadReviews);






                                    // Reply Form (toggle)
                                    function replyForm(button, index) {
                                        let replyBox = button.nextElementSibling;
                                        if (replyBox.innerHTML.trim() !== "") {
                                            // already open → close
                                            replyBox.innerHTML = "";
                                            return;
                                        }
                                        replyBox.innerHTML = `
        <input type="text" placeholder="Your Name" style="width:80%;margin-top:5px;padding:6px;">
        <input type="text" placeholder="Write reply..." style="width:80%;margin-top:5px;padding:6px;">
        <button class="prs-btn" style="background:#6c757d;margin-top:5px;" onclick="submitReply(this, ${index})">Send</button>
    `;
                                    }

                                    // Reply-to-Reply Form (toggle)
                                    function replyToReplyForm(reviewIndex, replyIndex) {
                                        let box = document.getElementById(`nested-reply-box-${reviewIndex}-${replyIndex}`);
                                        if (box.innerHTML.trim() !== "") {
                                            // already open → close
                                            box.innerHTML = "";
                                            return;
                                        }
                                        box.innerHTML = `
        <input type="text" placeholder="Your Name" style="width:70%;margin-top:5px;padding:6px;">
        <input type="text" placeholder="Write reply..." style="width:70%;margin-top:5px;padding:6px;">
        <button class="prs-btn" style="background:#17a2b8;margin-top:5px;" onclick="submitNestedReply(${reviewIndex}, ${replyIndex}, this)">Send</button>
    `;
                                    }
                                </script>









                            </div>
                        <?php else: ?>
                            <p>No blog details found.</p>
                        <?php endif; ?>











                    </div>


                    <div class="col-lg-3 col-md-2">
                        <!--<div class="ul-service-details-sidebar">
                             <div class="ul-service-details-sidebar-widget">
                                <span class="ul-service-details-sidebar-widget-title">Our Services</span>
                                <ul class="ul-service-details-sidebar-links">
                                    <li><a href="service-details.html" class="active">General Health Consultation <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Chronic Disease Management <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Online Video Consultation <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Preventive Health Checkups <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Women's & Men's Health <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                    <li><a href="service-details.html">Family Health Services <i
                                                class="flaticon-arrow-up-right"></i></a></li>
                                </ul>
                            </div> -->


                        <!-- <div class="ul-service-details-sidebar-widget ul-service-details-sidebar-cta">
                                <span class="ul-service-details-sidebar-widget-title">Have Additional Questions?</span>
                                <div class="ul-service-details-sidebar-cta-content">
                                    <p class="contact-info">3rd Avenue, 83 Manhattan, London, UK</p>
                                    <span class="contact-info number"><a href="tel:+1890123456">+1890 123 456</a></span>
                                    <p class="contact-info"><a href="mailto:support@example.com">support@example.com</a>
                                    </p>
                                    <a href="contact.html" class="ul-btn">Contact Us <i
                                            class="flaticon-arrow-up-right"></i></a>
                                </div> -->
                        <!-- </div> -->
                        <img src="./assets/img/services/service_side_image2.jpg" alt="" style="height: 280px; width: 330px;">
                        <div class="card" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
                            <h3 class="mani">Contact Us</h3>
                            <p>For Digital Marketing Agency</p>
                            <strong>
                                <a href="tel:+919290019948" style="text-decoration:none; color:#007bff;">
                                    +91 9290019948
                                </a>
                            </strong>
                        </div>




                    </div>
                </div>
            </div>
            </div>
        </section>

    </main>



    <!-- libraries JS -->
    <script src="assets2/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets2/vendor/splide/splide.min.js"></script>
    <script src="assets2/vendor/splide/splide-extension-auto-scroll.min.js"></script>
    <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets2/vendor/animate-wow/wow.min.js"></script>
    <script src="assets2/vendor/fslightbox/fslightbox.js"></script>
    <script src="assets2/vendor/slim-select/slimselect.min.js"></script>


    <!-- custom JS -->
    <script src="assets2/js/main.js"></script>
    <script src="assets2/js/tab.js"></script>
    <script src="assets2/js/accordion.js"></script>
    <script src="assets2/js/progressbar.js"></script>

</body>