<?php
// Include database and mailer configuration (adjusted to correct path)
include_once __DIR__ . '/../config/db-config.php'; // Adjust path if necessary
include_once __DIR__ . '/../config/mail-config.php'; // Adjust path if necessary

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Sanitize the email input
    $email = htmlspecialchars($email);

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));

        // Insert the token into the password_resets table
        $query = "INSERT INTO password_resets (email, token) VALUES (:email, :token)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':token', $token);
        $stmt->execute();

        // Send the reset email with the token
        $resetLink = "http://yourwebsite.com/reset-password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "To reset your password, click the link below:\n\n" . $resetLink;

        // Use your mailer (like PHPMailer) to send the email
        if (mail($email, $subject, $message)) {
            echo "A password reset link has been sent to your email.";
        } else {
            echo "There was an error sending the email. Please try again.";
        }
    } else {
        echo "No account found with that email address.";
    }
}
?>
