<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'oliveadb';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
