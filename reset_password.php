<?php
$host='localhost';
$username='root';
$password='';
$database='oliveadb';

$conn=new mysqli ($host,$username,$password,$database);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
if (!isset($_GET['token'])) {
    die("Invalid request.");
}

$token = $_GET['token'];
$newPassword = "";
$confirmPassword = "";
$error = "";
$success = "";

// Check if token exists in DB
$sql = "SELECT * FROM users WHERE reset_token = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Invalid or expired token.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    if (empty($newPassword) || empty($confirmPassword)) {
        $error = "Both fields are required.";
    } elseif ($newPassword !== $confirmPassword) {
        $error = "Passwords do not match.";
    } elseif (strlen($newPassword) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        // Password is valid - update DB
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $update = "UPDATE users SET password = ?, reset_token = NULL WHERE reset_token = ?";
        $stmt = $conn->prepare($update);
        $stmt->bind_param("ss", $hashedPassword, $token);
        if ($stmt->execute()) {
            $success = "Your password has been successfully reset. You can now <a href='login.php'>login</a>.";
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password | Olivea Salon</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional styling -->
    <link rel="icon" href="Images/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #f7f7f7;">
    <div class="container" style="max-width: 500px; margin-top: 100px;">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Reset Password</h3>

                <?php if ($error): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php elseif ($success): ?>
                    <div class="alert alert-success"><?php echo $success; ?></div>
                <?php else: ?>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" name="new_password" id="new_password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Reset Password</button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
