<?php
include './db.connection/db_connection.php'; // DB connection

// Determine blog type filter from GET
$blog_type = isset($_GET['type']) ? $_GET['type'] : 'all'; // default All

if ($blog_type == 'telugu') {
  // Fetch only Telugu Blogs
  $sql = "SELECT * FROM telugu_blogs ORDER BY id DESC";
  $result = $conn->query($sql);
} elseif ($blog_type == 'english') {
  // Fetch only English Blogs
  $sql = "SELECT id, title, main_content, main_image, created_at FROM blogs ORDER BY created_at DESC";
  $result = $conn->query($sql);
} else {
  // Fetch ALL blogs (English + Telugu)
  $sql_english = "SELECT id, title, main_content, main_image, created_at, 'english' AS type FROM blogs ORDER BY created_at DESC";
  $sql_telugu  = "SELECT id, title, main_content, main_image, created_at, 'telugu' AS type FROM telugu_blogs ORDER BY id DESC";

  $all_blogs = [];
  $res_en = $conn->query($sql_english);
  while ($row = $res_en->fetch_assoc()) $all_blogs[] = $row;

  // Sort merged array by created_at/id DESC
  usort($all_blogs, function ($a, $b) {
    return strtotime($b['created_at'] ?? date('Y-m-d H:i:s', $b['id'])) - strtotime($a['created_at'] ?? date('Y-m-d H:i:s', $a['id']));
  });
}
?>




<?php include 'navbar.php'; ?>


<main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-4">
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service="><button class="redirect_blog_srivice">All</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Dental Braces"><button class="redirect_blog_srivice">Dental Braces</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Clear Aligners"><button class="redirect_blog_srivice">Clear Aligners</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Crown Bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Teeth Filling"><button class="redirect_blog_srivice">Teeth Filling</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Dentures"><button class="redirect_blog_srivice">Dentures</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Teeth Scaling"><button class="redirect_blog_srivice">Teeth Scaling</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Teeth Cleaning"><button class="redirect_blog_srivice">Teeth Cleaning</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
      <a href="blogs_srinivasa_multispeciality_dental_hospital.php?service=Full Mouth Restoration"><button class="redirect_blog_srivice">Full Mouth Restoration</button></a>

    </div>
  </div>

  <!-- Blogs Section -->
  <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid row">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


              $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";


              echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='service_detsils.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='service_detsils.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='service_detsils.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
            }
          } else {
            echo "<p>No blog posts found.</p>";
          }
          ?>
        </div>


        <div class="grid row">
          <?php
          // include "/db.connection/db_connection.php";
          include './db.connection/db_connection.php';

          // Fetch Telugu Blogs
          $sql = "SELECT * FROM telugu_blogs ORDER BY id DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

              // Image Path
              $image_path = !empty($row['main_image'])
                ? "admin/uploads/{$row['main_image']}"
                : "default_image.png";

              echo "
            <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                <div class='post-box card_bg_div_box'>
                    <figure>
                        <a href='telugu_blog.php?id={$row['id']}'>
                            <img src='{$image_path}' alt='Telugu Blog Image' class='img-fluid blog_box_image'>
                        </a>
                    </figure>

                    <div class='box-content'>
                        <h5 class='box-title'>
                            <a class='box-title' href='telugu_blog.php?id={$row['id']}'>
                                " . htmlspecialchars($row['title']) . "
                            </a>
                        </h5>

                        <p class='post-desc mt-5' style='text-align: justify;'>
                            " . substr(strip_tags($row['main_content']), 0, 90) . "...
                        </p>

                        <a href='telugu_blog.php?id={$row['id']}'>
                            <button class='blog_main_btn'>Read More..</button>
                        </a>
                    </div>
                </div>
            </div>
            ";
            }
          } else {
            echo "<p>No Telugu blog posts found.</p>";
          }
          ?>
        </div>

      </div>
    </div>
  </div>
</main>



<!-- ======= Footer ======= -->
<?php include('./footer.php'); ?>



</body>

</html> <?php
        // Close the statement and connection
        $stmt->close();
        $conn->close();
        ?>