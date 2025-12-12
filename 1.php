<div class="share-box">
    <h4>Share this blog</h4>
    <div class="share-icons">
        <i class="fa-solid fa-link" onclick="copyPageLink()" title="Copy Link"></i>
        <i class="fa-brands fa-whatsapp" onclick="shareWhatsApp()" title="Share on WhatsApp"></i>
        <i class="fa-brands fa-facebook" onclick="shareFacebook()" title="Share on Facebook"></i>
        <i class="fa-brands fa-twitter" onclick="shareTwitter()" title="Share on Twitter"></i>
    </div>

    <div id="copyMessage" class="copy-message">Link Copied!</div>
</div>

<style>
    .share-box {
        margin-top: 20px;
    }

    .share-icons i {
        font-size: 24px;
        margin-right: 15px;
        cursor: pointer;
        color: #444;
        transition: 0.3s;
    }

    .share-icons i:hover {
        color: #007bff;
    }

    .copy-message {
        display: none;
        margin-top: 10px;
        color: green;
        font-weight: bold;
    }
</style>

<script>
    function copyPageLink() {
        const pageURL = window.location.href;
        navigator.clipboard.writeText(pageURL).then(() => {
            document.getElementById("copyMessage").style.display = "block";

            setTimeout(() => {
                document.getElementById("copyMessage").style.display = "none";
            }, 2000);
        });
    }

    function shareWhatsApp() {
        const url = encodeURIComponent(window.location.href);
        window.open(`https://wa.me/?text=${url}`, "_blank");
    }

    function shareFacebook() {
        const url = encodeURIComponent(window.location.href);
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, "_blank");
    }

    function shareTwitter() {
        const url = encodeURIComponent(window.location.href);
        window.open(`https://twitter.com/intent/tweet?url=${url}`, "_blank");
    }
</script>





<!-- imgages  -->

<div class="d-none d-lg-block">

    <?php
    if (!empty($video)) {
        $video_path = "./admin/uploads/videos/{$video}";
        echo "<video class='main-video' controls
            style='width:700px; height:425px; object-fit:contain; display:block; margin:0 auto;'>
            <source src='{$video_path}' type='video/mp4'>
            Your browser does not support the video tag.
          </video>";
    } elseif (!empty($main_image)) {
        $main_image_path = "./admin/uploads/photos/{$main_image}";
        echo "<img class='main-image img-fluid blog_main_img' 
              src='{$main_image_path}' alt='Main Image'>";
    }
    ?>