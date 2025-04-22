<?php
$userName=$_POST['username'];
$passwd=$_POST['password'];
$confPassword=$_POST['confPassword'];
$email=$_POST['email'];
$FirstName=$_POST['FirstName'];
$lname=$_POST['lname'];
$Phone=$_POST['Phone'];
$HomePhone=$_POST['HomePhone'];
$gender=$_POST['gender'];
$Birthday=$_POST['Birthday'];
$contact=$_POST['contact'];
$marketing=$_POST['marketing'];

$host='localhost';
$username='root';
$password='';
$database='oliveadb';

$conn=new mysqli ($host,$username,$password,$database);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

$sql="INSERT INTO users(Username,Password,ConfirmPassword,Email,FirstName,LastName,MobilePhone,HomePhone,Gender,BirthDay,Contact,Marketing) 
Values('$userName','$passwd','$confPassword','$email','$FirstName','$lname','$Phone','$HomePhone','$gender','$Birthday','$contact','$marketing')";

if($conn->query($sql)===TRUE){
    echo "Form submitted successfully";
    header("Location:login.php");
}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
?>