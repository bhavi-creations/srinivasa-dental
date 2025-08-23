<?php include 'navbar.php'; ?>
<style>
    .video-wrapper {
        position: relative;
        width: 100%;
        padding-top: 177.78%;
        /* 16:9 aspect ratio -> 9/16*100 = 56.25, for reels (9:16) use 177.78 */
        background: #000;
        border-radius: 10px;
        overflow: hidden;
    }

    .video-wrapper video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* for full coverage (like Instagram reels) */
    }
</style>


<section>


    <div class="container-fluid">
        <h1 class="text-center py-3">Video Testimonials</h1>
        <div class="row g-3">
            <?php
            include __DIR__ . '/db.connection/db_connection.php';

            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="video-wrapper shadow-sm">
                            <video class="w-100 h-100" controls playsinline>
                                <source src="./admin/uploads/video_reviews/<?php echo htmlspecialchars($row['video_path']); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>No videos found</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>

</section>




<?php include 'footer.php'; ?>






