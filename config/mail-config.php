<?php
// mail-config.php - Email configuration (you can configure PHPMailer or SMTP here)

function sendMail($to, $subject, $message) {
    // Basic mail function example (change this to use PHPMailer or other services)
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    
    return mail($to, $subject, $message, $headers);
}
?>