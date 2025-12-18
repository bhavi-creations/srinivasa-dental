<?php
include './db.connection/db_connection.php';

// GET BLOG ID
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id <= 0) {
    echo "Invalid Blog ID";
    exit;
}

// ---------------------------------------------
// FETCH BLOG DATA
// ---------------------------------------------
$stmt = $conn->prepare("
    SELECT 
        title, main_content, full_content, 
        title_image, main_image, video, 
        telugu_title, telugu_main_content, telugu_full_content,
        section1_image
    FROM blogs 
    WHERE id = ?
");
$stmt->bind_param("i", $blog_id);
$stmt->execute();
$stmt->bind_result(
    $title, $main_content, $full_content,
    $title_image, $main_image, $video,
    $telugu_title, $telugu_main_content, $telugu_full_content,
    $section1_image
);
$stmt->fetch();
$stmt->close();

// ---------------------------------------------
// FETCH LIKE / DISLIKE COUNTS (IMPORTANT)
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



<!-- english to telugu auto translate -->


<script type="text/javascript">
 function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {pageLanguage: 'en', includedLanguages: 'te,en'},
    'google_translate_element'
  );
}
</script>

 <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 <!-- end  english to telugu auto translate -->

<?php include 'navbar.php'; ?>

<main>
    <div class="container blog-detailed" style="padding-top: 50px;">

        <!-- Language buttons -->
        <div class="d-flex justify-content-center mb-3">
            <button id="english-btn" class="btn btn-sm me-2" style="background:#ffc107;">English</button>
            <button id="telugu-btn" class="btn btn-sm" style="background:#28a745; color:#fff;">తెలుగు</button>
        </div>

        <!-- Image -->
        <div class="text-center mb-4">
            <?php if (!empty($section1_image)): ?>
                <img src="./admin/uploads/photos/<?php echo $section1_image; ?>"
                     class="img-fluid"
                     style="max-width:700px; margin:0 auto; display:block;">
            <?php else: ?>
                <p>No Image Available</p>
            <?php endif; ?>
        </div>

        <!-- Title -->
        <h4 class="blog-title text-center" style="color:#283779; font-weight:800;">
            <span id="title-en"><?php echo $title; ?></span>
            <span id="title-te" style="display:none;"><?php echo $telugu_title; ?></span>
        </h4>

        <!-- Contents -->
        <div class="main-content mt-3" style="text-align:justify;">
            <div id="main-en"><?php echo $main_content; ?></div>
            <div id="main-te" style="display:none;"><?php echo $telugu_main_content; ?></div>
        </div>

        <div class="full-content mt-3">
            <div id="full-en"><?php echo $full_content; ?></div>
            <div id="full-te" style="display:none;"><?php echo $telugu_full_content; ?></div>
        </div>

        <!-- LIKE / DISLIKE -->
        <div class="d-flex justify-content-center mt-4">
            <button id="like-btn" class="btn btn-outline-success me-3">
                👍 Like (<span id="like-count"><?php echo $likes_count ?? 0; ?></span>)
            </button>

            <button id="dislike-btn" class="btn btn-outline-danger">
                👎 Dislike (<span id="dislike-count"><?php echo $dislikes_count ?? 0; ?></span>)
            </button>
        </div>

    </div>
</main>

<?php include 'footer.php'; ?>

<!-- LANGUAGE SWITCH SCRIPT -->
<script>
document.getElementById("english-btn").onclick = function() {
    document.getElementById("title-en").style.display = "block";
    document.getElementById("main-en").style.display = "block";
    document.getElementById("full-en").style.display = "block";

    document.getElementById("title-te").style.display = "none";
    document.getElementById("main-te").style.display = "none";
    document.getElementById("full-te").style.display = "none";
};

document.getElementById("telugu-btn").onclick = function() {
    document.getElementById("title-en").style.display = "none";
    document.getElementById("main-en").style.display = "none";
    document.getElementById("full-en").style.display = "none";

    document.getElementById("title-te").style.display = "block";
    document.getElementById("main-te").style.display = "block";
    document.getElementById("full-te").style.display = "block";
};
</script>

<!-- LIKE / DISLIKE SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    const blogId = <?php echo json_encode($blog_id); ?>;
    const likeBtn = document.getElementById("like-btn");
    const dislikeBtn = document.getElementById("dislike-btn");

    let hasVoted = localStorage.getItem("blog_vote_" + blogId);

    if (hasVoted) {
        likeBtn.disabled = true;
        dislikeBtn.disabled = true;
    }

    function vote(type) {

        if (hasVoted) return;

        fetch("update_vote.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `blog_id=${blogId}&vote_type=${type}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {

                document.getElementById("like-count").textContent = data.new_likes;
                document.getElementById("dislike-count").textContent = data.new_dislikes;

                localStorage.setItem("blog_vote_" + blogId, type);
                likeBtn.disabled = true;
                dislikeBtn.disabled = true;

            } else {
                alert("Vote Failed");
            }
        })
        .catch(() => alert("Error while voting"));
    }

    likeBtn.onclick = () => vote("like");
    dislikeBtn.onclick = () => vote("dislike");

});
</script>

</body>
</html>
