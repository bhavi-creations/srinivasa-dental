<?php
include 'db_connection.php';

$id = $_GET['id'];

// Fetch existing data
$sql = "SELECT * FROM blog_likes WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['submit'])){
    $blog_id = $_POST['blog_id'];
    $user_ip = $_POST['user_ip'];

    $update_sql = "UPDATE blog_likes SET blog_id='$blog_id', user_ip='$user_ip' WHERE id=$id";

    if ($conn->query($update_sql)) {
        header("Location: view_blog_likes.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Blog Like</title>
</head>
<body>

<h2>Edit Like</h2>

<form method="POST">
    Blog ID: <input type="number" name="blog_id" value="<?php echo $row['blog_id']; ?>" required><br><br>
    User IP: <input type="text" name="user_ip" value="<?php echo $row['user_ip']; ?>" required><br><br>

    <input type="submit" name="submit" value="Update Like">
</form>

</body>
</html>
