<?php
   if(isset($_GET['username'])){
        $UserName = $_GET['username'];
    
   
    $host='localhost';
    $username='root';
    $password='';
    $database='oliveadb';

    $conn=new mysqli ($host,$username,$password,$database);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
  }
    $sql="SELECT * FROM Bookings WHERE UserName='$UserName'";
    $result=$conn->query($sql);

    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    if($result->num_rows>0){
        $bookings = array();
        while($row=$result->fetch_assoc()){
            $bookings[] = $row;
        }
    }else{
        $bookings = array();
    }
    $conn->close();

?>
<?php
  session_start();
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
  } else {
    $username = null;
  }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking- Olivea Salon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    </head>
    <body>
      <!--nav bar-->
      <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: black !important;"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="Images/Olivea logo.png" class="img1">
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Stylists.php">STYLISTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">SERVICES</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="Products.php">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Booking.php">BOOK APOINTMENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">CONTACT</a>
              </li>
            </ul>
          </div>
          <?php if ($username): ?>
  <style>
    .welcome-msg {
      background: linear-gradient(135deg, rgba(255, 105, 180, 0.8), rgba(205, 0, 78, 0.8));
      border: 2px solid rgb(205, 0, 78);
      padding: 8px 20px;
      border-radius: 50px;
      color: white;
      font-weight: 600;
      font-family: 'Segoe UI', sans-serif;
      font-size: 18px;
      box-shadow: 0 4px 15px rgba(205, 0, 78, 0.4);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      animation: fadeSlide 1s ease-in-out;
      transition: all 0.3s ease-in-out;
      max-width: 250px;
    }

    .welcome-msg:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 20px rgba(205, 0, 78, 0.5);
    }

    .welcome-msg .icon {
      width: 25px;
      height: 25px;
      background: url('path_to_welcome_icon.png') no-repeat center center;
      background-size: contain;
    }

    @keyframes fadeSlide {
      0% {
        opacity: 0;
        transform: translateY(-10px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>

  <div style="display: flex; align-items: center; gap: 15px; margin-right: 30px;">
    <div class="welcome-msg">
      <span class="icon"></span>
      <span>Welcome, <strong><?php echo htmlspecialchars($username); ?></strong></span>
    </div>
    <a href="logout.php">
      <button type="button" class="btn btn-light" style="width: 100px;">Logout</button>
    </a>
  </div>
<?php else: ?>
  <a href="login.php">
    <button type="button" class="btn btn-light" style="width: 100px; margin-right: 30px;">Login</button>
  </a>
<?php endif; ?>


          <script>
          if (<?php echo json_encode($username); ?>) {
            document.getElementById("login-btn").innerHTML = "Logout";
            
          } else {
            document.getElementById("login-btn").innerHTML = "Login";
           
          }
          </script>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <!--nav bar end-->
      <div class="bg-image" >
        <img src="Images/contact 3.jpg" class="w-100" style="margin-top: -50px;" />
            <div  style="background-color: rgba(10, 10, 10, 0.589)">
              <div style="margin-top: -680px; ">
              <h1 style="margin-left:120px; font-family: 'candara';color:#ed0b96;">BOOKING SUCCESSFUL!</h1>
              <ul style="list-style-type: none;margin-top: 20px;font-size:20px;font-weight:bold;">
                <li style=" font-family: 'candara';";>Thank you for booking with us!</li>
                <li style=" font-family: 'candara';";>Your booking details are as follows:</li>
              </ul>
              <ul style="font-size:18px; margin-left: 20px;">
                <li style=" font-family: 'candara';";>Username: <?php echo $UserName; ?></li>
                <li style=" font-family: 'candara';";>Guest Information: <?php echo $bookings[0]['Guest_Information']; ?></li>
                <li style=" font-family: 'candara';";>Service: <?php echo $bookings[0]['Service']; ?></li>
                <li style=" font-family: 'candara';";>Employee: <?php echo $bookings[0]['Employee']; ?></li>
                <li style=" font-family: 'candara';";>Time: <?php echo $bookings[0]['Time']; ?></li>
                <li style=" font-family: 'candara';";>Date: <?php echo $bookings[0]['Date']; ?></li>
                <li style=" font-family: 'candara';";>Note: <?php echo $bookings[0]['Note']; ?></li>
              </ul>
              </div>
            </div>
      </div>
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
      
    </body>
</html>      
