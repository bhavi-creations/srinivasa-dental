<?php include 'navbar.php'; ?>

<style>
    .card-container {
        position: relative;
        width: 100%;
        /* max-width: 320px; */
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        background-color: #fff;
        transition: transform 0.3s ease;
    }


    /* .card-container{
        display: flex;
        justify-content: center;
    } */
    .card-container:hover {
        transform: scale(1.03);
    }

    .image-wrapper {
        position: relative;
        overflow: hidden;
    }

    .image-wrapper img {
        width: 100%;
        display: block;
        transition: transform 0.5s ease;
    }

    .card-container:hover .image-wrapper img {
        transform: scale(1.1);
    }

    .overlay-background {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        /* Transparent black */
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .card-container:hover .overlay-background {
        opacity: 1;
    }

    .content-overlay {
        position: absolute;
        bottom: 20px;
        left: 20px;
        width: calc(100% - 40px);
        color: #fff;
        padding: 10px;
        z-index: 2;
        transition: transform 0.3s ease;
    }

    .card-container:hover .content-overlay {
        transform: translateY(-20px);
    }

    .read-more,
    .content-overlay hr {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-container:hover .read-more,
    .card-container:hover .content-overlay hr {
        opacity: 1;
        transform: translateY(0);
    }

    .read-more {
        display: block;
        margin-top: 10px;
        color: #a5d7f9;
        font-weight: bold;
        text-decoration: none;
    }

    .content-overlay hr {
        border: 1px solid #a5d7f9;
        margin: 10px 0;
    }

    .smile_stories_section {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.5;
        margin: 0;
    }
</style>

<section>


    <div class="container">
        <p style="letter-spacing: 6px; font-size: 25px ; color:#a5d7f9; font-weight: 900; " class="text-center">Srinivasa Dental Hospital </p>
        <h1 class="text-center">Smile Stories</h1>
        <div class="row">



            <div class="col-md-4 col-12 pb-5">
                <div class="card-container">
                    <div class="image-wrapper">
                        <img src="assets/img/services/crowns/11.png" alt="Smile Story Image" class="img-fluid">




                        <div class="overlay-background"></div>
                        <div class="content-overlay">
                            <a href="vimala_smile.php" style="text-decoration: none;">
                                <p class="smile_stories_section">
                                    Vimala’s Smile Revival: Subtle Changes, Big Confidence
                                </p>
                            </a>
                            <hr>
                            <a href="vimala_smile.php" class="read-more">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>






            <!-- <div class="col-md-4 col-12 pb-5">
                <div class="card-container">

                    <img src="assets/img/services/crowns/22.png" alt="" class="img-fluid ">




                    <div class="overlay-background"></div>
                    <div class="content-overlay">
                        <a href="vimala_smile.php" style="text-decoration: none;">
                            <p class="smile_stories_section">
                                Vimala’s Smile Revival: Subtle Changes, Big Confidence
                            </p>
                        </a>
                        <hr>
                        <a href="vimala_smile.php" class="read-more">Read More →</a>
                    </div>
                </div>
            </div> -->

   <div class="col-md-4 col-12 pb-5">
            <div class="card-container">
                <div class="image-wrapper">
                    <img src="assets/img/services/crowns/22.png" alt="Smile Story Image" class="img-fluid">
                    <div class="overlay-background"></div>
                    <div class="content-overlay">
                        <a href="harshitha_smile.php" style="text-decoration: none;">
                            <p class="smile_stories_section">
                                Harshitha’s Smile Journey: From Trauma to Transformation.
                            </p>
                        </a>
                        <hr>
                        <a href="harshitha_smile.php" class="read-more">Read More →</a>
                    </div>
                </div>
            </div>
        </div>

        </div>

     




    </div>
    </div>
</section>






<?php include 'footer.php'; ?>