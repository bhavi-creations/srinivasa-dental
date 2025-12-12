<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
    $blog_id = $_POST['blog_id'];
    $user_ip = $_POST['user_ip'];

    $sql = "INSERT INTO blog_likes (blog_id, user_ip) VALUES ('$blog_id', '$user_ip')";
    
    if ($conn->query($sql)) {
        header("Location: view_blog_likes.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Blog Like</title>
</head>
<body>

<h2>Add New Like</h2>

<form method="POST">
    Blog ID: <input type="number" name="blog_id" required><br><br>
    User IP: <input type="text" name="user_ip" required><br><br>

    <input type="submit" name="submit" value="Add Like">
</form>

</body>
</html>
