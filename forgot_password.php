<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure Composer installed PHPMailer

// DB connection
include 'Includes/db.php';

// Form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if email exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Generate secure token
        $token = bin2hex(random_bytes(32));
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Save token in DB
        $update = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE Email = ?");
        $update->bind_param("sss", $token, $expiry, $email);
        $update->execute();

        // Create reset link
        $resetLink = "http://localhost/olivea/reset_password.php?token=" . $token;

        // Send email using PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'udaridissanayake8@gmail.com'; // <-- Replace with your Gmail
            $mail->Password   = 'veqa gxbp masg wbas';   // <-- Replace with App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom('udaridissanayake8@gmail.com', 'Olivea Salon');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request - Olivea Salon';
            $mail->Body    = "
                <p>Hello,</p>
                <p>Click the link below to reset your password (expires in 1 hour):</p>
                <p><a href='$resetLink'>$resetLink</a></p>
                <p>If you didn't request this, you can safely ignore this email.</p>
            ";

            $mail->send();
            echo "<script>alert('A password reset link has been sent to your email.'); window.location.href='login.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Mailer Error: {$mail->ErrorInfo}'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found.'); window.location.href='login.php';</script>";
    }
}
?>
