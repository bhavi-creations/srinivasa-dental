<?php
include 'db.connection/db_connection.php';

if (isset($_GET['comment_id'])) {
    $comment_id = intval($_GET['comment_id']);
    $sql = "SELECT user_name, comment FROM blog_comments WHERE parent_id=$comment_id ORDER BY created_at ASC";
    $res = $conn->query($sql);

    $replies_html = '';
    if ($res && $res->num_rows > 0) {
        while ($r = $res->fetch_assoc()) {
            $name = htmlspecialchars($r['user_name']);
            $text = htmlspecialchars($r['comment']);
            $replies_html .= "<div class='reply-item p-2 mt-1 border-start border-3 border-info'>
                                <strong>$name:</strong> $text
                              </div>";
        }
    } else {
        $replies_html = "<p>No replies yet.</p>";
    }

    echo $replies_html;
}
?>
