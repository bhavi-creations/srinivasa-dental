<?php
include './db.connection/db_connection.php';

// Get service from URL
$service = $_GET['service'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
<title>Services & Blogs</title>
<style>
body{font-family:Arial;background:#f5f5f5;padding:20px;}
.service-box{
    border:1px solid #ddd;
    padding:15px;
    margin:10px;
    display:inline-block;
    background:#fff;
    cursor:pointer;
}
.service-box a{
    text-decoration:none;
    font-weight:bold;
    color:#000;
}
.blog-card{
    border:1px solid #ddd;
    padding:15px;
    margin:15px 0;
    background:#fff;
}
.blog-card img{
    width:100%;
    max-height:200px;
    object-fit:cover;
}
.back-btn{
    display:inline-block;
    margin-bottom:20px;
    padding:10px 15px;
    background:#000;
    color:#fff;
    text-decoration:none;
}
</style>
</head>
<body>

<?php
// =====================
// 1️⃣ SHOW SERVICES LIST
// =====================
if($service == ''){

    echo "<h2>Our Services</h2>";

    $services = $conn->query("SELECT * FROM services ORDER BY id DESC");

    while($row = $services->fetch_assoc()){
        echo '
        <div class="service-box">
            <a href="?service='.urlencode($row['service_name']).'">
                '.$row['service_name'].'
            </a>
        </div>
        ';
    }

}
// =====================
// 2️⃣ SHOW BLOGS BY SERVICE
// =====================
else{

    echo '<a class="back-btn" href="services_and_blogs.php">← Back to Services</a>';
    echo "<h2>$service Related Blogs</h2>";

    $stmt = $conn->prepare("SELECT * FROM blogs WHERE service=? ORDER BY id DESC");
    $stmt->bind_param("s", $service);
    $stmt->execute();
    $blogs = $stmt->get_result();

    if($blogs->num_rows == 0){
        echo "<p>No blogs found for this service.</p>";
    }

    while($blog = $blogs->fetch_assoc()){
        echo '
        <div class="blog-card">
            <h3>'.$blog['title'].'</h3>
            <img src="uploads/'.$blog['main_image'].'">
            <p>'.substr($blog['main_content'],0,150).'...</p>
            <a href="blog_view.php?id='.$blog['id'].'">Read More</a>
        </div>
        ';
    }
}
?>

