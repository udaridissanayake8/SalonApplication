<?php
$userName=$_POST['username'];
$passwd=$_POST['password'];


include 'Includes/db.php'; 
$sql="SELECT * FROM users WHERE Username='$userName' AND Password='$passwd'";
$result=$conn->query($sql);
if($result->num_rows>0){
    session_start();
    $_SESSION['username'] = $userName;
    header("Location: index.php"); 
    exit();}
else{
    echo "Invalid username or password";
}
?>