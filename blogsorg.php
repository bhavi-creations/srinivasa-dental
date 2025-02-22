<?php
include './db.connection/db_connection.php';
// Fetch blog data
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>
 
<?php include 'navbar.php'; ?>


    <main>
        <!-- ======= Blogs Section ======= -->
        <section id="blogs">
            <div class="container">
                <div class="section-title">
                    <h2>Blogs</h2>
                </div>

                <div class="row" id="blogRow">
                    <?php
                    $counter = 0;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($counter === 0) {
                                echo '
                                    <div class="col-md-9  order-1 order-md-1" id="selectedblog">
                                    <div id="selectedBlogId" style="display: none">' . $counter . '</div>
                                    <h2 class="mb-3  tittle_text">' . $row['title'] . '</h2>
                                    <video class="custom-video" muted  autoplay    controls style="width: 100%; height: auto;">
                                    <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video>
                                    <p>Published On  ';
                    ?>




                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));
                                echo '</p>
                                    
                                    <div class="row d-flex my-3">';



                                echo '<div>';
                                ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif; ?>
                                <?php echo '</div>';

                                echo '
                                        </div>';
                                echo $row['content'];
                                echo '
                                            <div style="display: none" id="lastchild">
                                                    <video onclick="swapDivs(`' . $counter . '`)"
                                                        class="custom-video" controls muted autoplay style="width: 100%; height: auto;">
                                                        <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>
                                            </div>';
                                echo '</div>';





                                if ($result->num_rows > 1) {
                                    echo '<div class="col-md-3  order-2 order-md-2 scrollable-div">';
                                }
                            } else {
                                echo '<div id="sidebardiv' . $counter . '""><video
                                            class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <h6 class="mb-3" onclick="swapDivs(`' . $counter . '`)">' . $row['title'] . '</h6>';
                                echo '<div class="col-md-9  order-2 order-md-1" id="lastchild" style="display: none">
                                        <h2 class="mb-3" >' . $row['title'] . '</h2>
                                        <video class="custom-video" autoplay muted controls style="width: 100%; height: auto;" onclick="swapDivs(`' . $counter . '`)">
                                            <source src="admin/public/uploads/videos/' . $row['video'] . '" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p>Published On ';
                                ?>
                                <?php echo date("Y-m-d H:i:s", strtotime($row['time']));

                                echo '</p>
                                         <div class="row d-flex my-3">
                                         <div class="row">
                                         <div class="col-9"></div>
                                         <button onclick="hideDiv()" class="btn btn-primary col-3 readmore_btn" id="read">Read More</button>
                                         
                                           </div>
                                         ';


                                echo '<div id="images" style="display:none;">'; ?>
                                <?php if (!empty($row['photos'])) : ?>
                                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                        <div class="swiper-wrapper row">
                                            <!-- Added 'row' class for Bootstrap grid -->

                                            <?php foreach (json_decode($row['photos']) as $photo) : ?>
                                                <div class="testimonial-item col-6 col-md-4 col-lg-3">
                                                    <!-- Added Bootstrap grid classes -->
                                                    <img src="admin/public/uploads/photos/<?php echo htmlspecialchars($photo); ?>" alt="Blog Photo" class="img-fluid my-2">
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p>No photos available.</p>
                                <?php endif;
                                echo $row['content'];
                                ?>
                    <?php echo '</div>';




                                echo '
                                        </div>';
                                echo '</div></div>';
                            }
                            $counter++;
                        }
                        if ($result->num_rows > 1) {
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>


        <script>
            state = 1;

            function hideDiv() {

                if (state == 0) {
                    var div = document.getElementById('images');
                    document.getElementById('read').innerHTML = "Read More";
                    div.style.display = 'none';
                    state = 1;
                } else {
                    var div = document.getElementById('images');
                    div.style.display = 'block';
                    document.getElementById('read').innerHTML = "Read less";
                    state = 0;
                }

            }


            function swapDivs(currentDivId) {
                var currentDiv = document.getElementById('sidebardiv' + currentDivId);
                currentDiv.setAttribute('id', 'sidebardiv' + document.getElementById('selectedBlogId').innerText);
                console.log(document.getElementById('selectedBlogId').innerText);
                let selectedBlog = document.getElementById('selectedblog');
                let currentDivLastChild = currentDiv.querySelector('#lastchild');
                let selectedDivLastChild = selectedBlog.querySelector('#lastchild');
                var currentDivNewDiv = document.createElement('div');
                currentDivNewDiv.innerHTML = selectedBlog.querySelector('#lastchild').innerHTML;
                let currentDivNewDivLastChild = document.createElement('div');
                currentDivNewDivLastChild.id = 'lastchild';
                currentDivNewDivLastChild.style.display = 'none';
                selectedBlog.removeChild(selectedDivLastChild);
                selectedBlog.removeChild(document.getElementById('selectedBlogId'));
                currentDivNewDivLastChild.innerHTML = selectedBlog.innerHTML;
                currentDivNewDiv.appendChild(currentDivNewDivLastChild);
                let selectedBlogNewDiv = document.createElement('div');
                selectedBlogNewDiv.innerHTML = currentDiv.querySelector('#lastchild').innerHTML;
                let selectedBlogIDNewDiv = document.createElement('div');
                selectedBlogIDNewDiv.id = 'selectedBlogId';
                selectedBlogIDNewDiv.innerText = currentDivId;
                let selectedBlogNewDivLastChild = document.createElement('div');
                selectedBlogNewDivLastChild.id = 'lastchild';
                selectedBlogNewDivLastChild.style.display = 'none';
                currentDiv.removeChild(currentDivLastChild);
                selectedBlogNewDivLastChild.innerHTML = currentDiv.innerHTML;
                selectedBlogNewDiv.appendChild(selectedBlogIDNewDiv);
                selectedBlogNewDiv.appendChild(selectedBlogNewDivLastChild);
                currentDiv.innerHTML = currentDivNewDiv.innerHTML;
                selectedBlog.innerHTML = selectedBlogNewDiv.innerHTML;

                // Manage volume
                let currentDivVideo = currentDiv.querySelector('video');
                let selectedBlogVideo = selectedBlog.querySelector('video');
                if (currentDivVideo) currentDivVideo.muted = true; // Mute the sidebar video
                if (selectedBlogVideo) selectedBlogVideo.muted = false; // Unmute the main video

                // Scroll to main video section
                selectedBlog.scrollIntoView({
                    behavior: 'smooth'
                });




            }
        </script>

    </main>
    <!-- ======= Footer ======= -->
    <?php include('./footer.php'); ?>
   

</body>

</html>