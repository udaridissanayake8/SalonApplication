<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

include 'Includes/db.php';

$stmt = $conn->prepare("INSERT INTO Contact(Name, Email, Message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "<script>alert('Message sent successfully!');</script>";
    echo "<script>window.location.href='Contact.php';</script>";
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
