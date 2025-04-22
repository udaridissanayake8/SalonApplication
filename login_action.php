<?php
$userName=$_POST['username'];
$passwd=$_POST['password'];


$host='localhost';
$username='root';
$password='';
$database='oliveadb';

$conn=new mysqli ($host,$username,$password,$database);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
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