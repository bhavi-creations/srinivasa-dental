<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
//-----Contact form------

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $contactname = $_POST['contactname'] ?? '';
    $contactemail = $_POST['contactemail'] ?? '';
    $contactsubject = $_POST['contactsubject'] ?? '';
    $contactnumber = $_POST['contactnumber'] ?? '';

    $contactmessage = $_POST['contactmessage'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'oncologyask@gmail.com'; // Your Gmail email address
        $mail->Password = 'bixkgpnhcjyspthj'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('oncologyask@gmail.com', 'Ask-Oncologist.com'); // Your Gmail email and name
        $mail->addAddress('oncologyask@gmail.com', 'Ask-Oncologist.com'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body = "
           
            <h1>Contact Details</h1>
            <p><strong>Name:</strong> $contactname</p>
            <p><strong>Email:</strong> $contactemail</p>
            <p><strong>Subject:</strong> $contactsubject</p>
            <p><strong>Phone:</strong> $contactnumber</p>
            <p><strong>Message:</strong>$contactmessage</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.php";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
?>