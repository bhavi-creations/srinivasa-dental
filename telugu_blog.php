<?php
include './db.connection/db_connection.php';

// Get blog ID
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($blog_id > 0) {

    // Fetch Telugu Blog
    $stmt = $conn->prepare("SELECT title, main_content, full_content, main_image, video, section1_content, section1_image 
                            FROM telugu_blogs 
                            WHERE id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $stmt->bind_result($title, $main_content, $full_content, $main_image, $video, $section1_content, $section1_image);
    $stmt->fetch();
    $stmt->close();
} else {
    echo "Invalid Blog ID.";
    exit;
}

$conn->close();
?>

<?php include 'navbar.php'; ?>

<main>

    <div class="container blog-detailed blog-detailed-sidebar" style="padding-bottom: 0px; padding-top: 50px;">
        <div class="">

            <!-- MAIN CONTENT AREA -->
            <div class=" offset-lg-0  offset-sm-2  offset-1">

                <div class="blog-content">

                    <h4 class="blog-title tittle ls-n-20  d-flex justify-content-center"
                        style="color: #283779; font-weight:800">
                        <?= htmlspecialchars($title); ?>
                    </h4>

                    <!-- MAIN CONTENT -->
                    <p class="main-content" style="text-align: justify;">
                        <?= $main_content; ?>
                    </p>

                    <!-- MAIN IMAGE / VIDEO -->
                    <?php
                    if (!empty($video)) {
                        // Web-accessible video path  
                        $video_path = "./uploads/videos/{$video}";
                        echo "
                            <video class='main-video img-fluid' controls>
                                <source src='{$video_path}' type='video/mp4 '>
                                Your browser does not support the video tag.
                            </video>";
                    } elseif (!empty($main_image)) {
                        // Web-accessible image path
                        $main_image_path = "./uploads/photos/{$main_image}";
                        echo "
                            <img class='main-image img-fluid blog_main_img' 
                                 src='{$main_image_path}' alt='Main Image'>";
                    }
                    ?>

                    <!-- SECTION 1 CONTENT -->
                    <?php if (!empty($section1_content)) { ?>
                        <div class="mt-4" style="text-align: justify;">
                            <?= $section1_content; ?>
                        </div>
                    <?php } ?>

                    <!-- SECTION 1 IMAGE -->
                  



                    <?php if (!empty($section1_image)) {
                        $section1_image_path = "./uploads/photos/{$section1_image}";
                    ?>
                        <div style="text-align: center; margin-top: 20px;">
                            <img src="<?= $section1_image_path ?>" class="img-fluid" style="border-radius:10px; display: inline-block; width: 500px;">
                        </div>
                    <?php } ?>


                    <!-- FULL CONTENT -->
                    <div class="full-content mt-4">
                        <?= $full_content; ?>
                    </div>

                </div>
            </div>

            <!-- SIDEBAR (LATEST TELUGU BLOGS) -->


        </div>
        <div class=" offset-lg-0 col-sm-8 offset-sm-2  offset-1">

            <div class="side-bar">
                <div class="row scrollable-row"
                    style="max-height: 700px; overflow-y: auto; overflow-x:hidden">

                    <?php
                    include './db.connection/db_connection.php';

                    $sql = "SELECT id, title, main_image 
                FROM telugu_blogs 
                ORDER BY id DESC";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                            $side_image = !empty($row['main_image'])
                                ? "./uploads/photos/{$row['main_image']}"
                                : "./uploads/photos/default_image.png";

                            $short_title = strlen($row['title']) > 50
                                ? substr($row['title'], 0, 50) . "..."
                                : $row['title'];

                            echo "
                    <div class='col-5 background_sidebar mb-3'>
                        <figure>
                            <img src='{$side_image}' 
                                 class='w-100 height-auto mt-3' 
                                 alt='Blog Image'>
                        </figure>
                    </div>

                    <div class='col-7 background_sidebar d-flex flex-column justify-content-center mb-3'>
                        <a href='telugu_blog.php?id={$row['id']}'>
                            <p class='blog-card-text'>{$short_title}</p>
                        </a>
                    </div>";
                        }
                    } else {
                        echo "<p>No Telugu Blogs Found.</p>";
                    }

                    $conn->close();
                    ?>

                </div>
            </div>

        </div>
    </div>

</main>

<?php include('./footer.php'); ?>