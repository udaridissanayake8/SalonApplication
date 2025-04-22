<?php
    
    $UserName=$_POST['username'];
    $Guest=$_POST['Guest'];
    
    $Employee=$_POST['Employee'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $note=$_POST['note'];

    $service1=$_POST['service1'];
    $service2=$_POST['service2'];
    $service3=$_POST['service3'];   
    $service4=$_POST['service4'];
    $service5=$_POST['service5'];
    $services=array($service1,$service2,$service3,$service4,$service5);
    $service="";
    foreach($services as $s){
        if($s!=""){
            $service.=$s.",";
        }
    }
    $service=substr($service,0,-1);
    $service=trim($service);

    $host='localhost';
    $username='root';
    $password='';
    $database='oliveadb';

    $conn=new mysqli ($host,$username,$password,$database);

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }

    $sql="INSERT INTO Bookings(UserName,Guest_Information,Service,Employee,Time,Date,Note) 
    Values('$UserName','$Guest','$service','$Employee','$time','$date','$note')";
    if($conn->query($sql)===TRUE){
        echo "Booking successfully";
        header("Location:ViewBooking.php?username=".urlencode($UserName));
        exit();
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
?>


