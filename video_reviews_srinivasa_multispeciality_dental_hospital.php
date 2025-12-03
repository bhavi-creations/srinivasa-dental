<?php include 'navbar.php'; ?>



<section>

    <div class="container">
        <h1 class="text-center py-2">Video Testimonials</h1>
        <div class="row">
            <?php
            include __DIR__ . '/db.connection/db_connection.php';

            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-md-6 col-lg-4 col-12 mb-3">
                        <div class="card shadow-sm border-0">
                            <div class="video-container">
                                <video controls>
                                    <source src="./admin/uploads/video_reviews/<?php echo htmlspecialchars($row['video_path']); ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <!-- If you want title under video, uncomment this -->
                            <!--
                        <div class="card-body p-2">
                            <h6 class="text-center text-primary mb-0">
                                <?php echo htmlspecialchars($row['title']); ?>
                            </h6>
                        </div>
                        -->
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

    <style>
        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
            background: #000;
            /* black background */
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* ensures video fits fully */
        }
    </style>

</section>




<?php include 'footer.php'; ?>