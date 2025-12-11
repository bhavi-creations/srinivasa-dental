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
