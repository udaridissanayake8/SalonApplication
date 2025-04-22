<?php
  session_start();
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
  } else {
    $username = null;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olivea Salon</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-kenU1KFdBIeZDEn3fvXxwqU6A67w3v0n9p72JIRpKo1gF4r5LG6Ank2pJk9zKODp" 
crossorigin="anonymous"></script>

  <script src="script.js"></script>
    <!-- nav -->
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
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
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
                <a class="nav-link" href="Booking.php">BOOK APOINTMENT</a>
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

      <!--Carousel-->
      <div style="background-color: black;">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="headline">OLIVEA SALON</h1>
        
      </div>
      <div class="container" style="margin-top: -20px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
         
          <div class="carousel-inner " style="width:100%;">
            <div class="item active" style="width:100%;">
              <img src="Images/4.jpg" alt="Los Angeles" style="width:100%;">
            </div>
            
      
            <div class="item">
              <img src="Images/6.jpg" alt="Chicago" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="Images/t2100x1260 (1).webp" alt="New york" style="width:100%;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
      <!--End carousel-->
    
<!--Scroll arrow-->
      
<div id="progress" >
  <span id="progress-value">&#x1F815;</span>
</div>
      <div >
        
          <p class="about">
            Discover the epitome of hairstyling excellence at Olivea Salon, 
            proudly recognized as one of Boston’s premier hair salons. With a 
            legacy spanning 50 illustrious years on the iconic first block of Newbury 
            Street, our commitment to unparalleled service and exceptional artistry has 
            solidified our place as a trusted destination for all your haircare needs.
             At Olivea Salon, we boast an elite team of highly skilled stylists, color specialists, 
             and beauty consultants who continuously push the boundaries of creativity and innovation.

          </p>
        
          
          <div class="container" style="margin-top: 100px;">
            <h1 class="text-center" style="font-family: 'Gendisa Demo';">Follow Us on Instagram</h1> 
            <div class="row">
              <div class="thumb">
              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="imgstyle">
                    <img class="homeimgs" src="Images/Avanti_social_1.webp"  style="width:100%">
                  </div> 
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="imgstyle">
                    <img class="homeimgs" src="Images/Avanti_social_2.webp"  style="width:100%">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                  <div class="imgstyle">
                    <img class="homeimgs" src="Images/Avanti_social_4.webp"  style="width:100%">
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>
      
      <!-- <button type="button" class="btn btn-success active">Active Button</button> -->
      <div class="text-center" style="margin-bottom: 15vh; margin-top: 5vh;" >
      <a href="https://www.instagram.com/udari__kalpana/profilecard/?igsh=MWVoZ2t6MnM4ZWpkdw=="><button type="button" class="btn btn-dark" ><img class= "instagram-icon" src="Images/instagram icon.png">INSTAGRAM</button></a>
      </div>

      <!--Footer-->
      <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
        <footer >
          <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
              <div class="col-12">
                   <div class="row row-2">
                       <div class="col-sm-3 text-md-center" style="font-family: Claire Vionce Demo;"><a href="index.php" style="color: aliceblue;"><h2><b>  OLIVEA</b></h2></a></div>
                       <div class="col-sm-3  my-sm-0 mt-5"><ul class="list-unstyled"><li class="mt-0"><b>LOCATION</b></li><li class="mt-0"><img src="Images/placeholder.png" width="25">20 Newbury Street, 4th Floor
                        Boston</li><li class="mt-0"><img src="Images/phone-call.png" width="18">  (617) 267-4027</li><li class="mt-0"><img src="Images/mail (1).png" width="20"> oliveasalonboston@gmail.com</li></ul></div>
                       <div class="col-sm-3  my-sm-0 mt-5"><ul class="list-unstyled"><li class="mt-0"><b>HOURS</b></li><li>Sunday: 10am-6pm</li><li>Monday: 10am-7pm</li><li>Tuesday-Thursday: 9am-8pm</li><li>Friday: 9am-7pm</li><li>Saturday: 9am-5pm</li></ul></div>

                   </div>  
              </div>
          </div>
          <div class="row justify-content-center mt-0 pt-0 row-1 mb-0  px-sm-3 px-2">
               <div class="col-12">
                   <div class="row my-4 row-1 no-gutters">
                       <div class="col-sm-3 col-auto text-left" style="font-size: 12px;"><small>©2024 Olivea Salon Boston. All rights reserved. Website built by Stranded.</small></div>
                       <div class="col  my-auto text-md-left  text-right " style="margin-right: 5vw;"> 
                        <small>
                           <span>
                          <a href="https://www.instagram.com/udari__kalpana/profilecard/?igsh=MWVoZ2t6MnM4ZWpkdw==">
                          <img src="Images/instagram.png" class="img-fluid "  width="30" style="margin-right: 10px;">
                          </a>
                          </span> 
                          <span>
                          <a href="https://www.facebook.com/profile.php?id=100010838733394">
                            <img src="Images/fb2.png" class="img-fluid "  width="30" style="margin-right: 10px;">
                          </a>
                          </span>
                          <span>
                            <a href="https://www.facebook.com/profile.php?id=100010838733394">
                            <img src="Images/twitter2.png" class="img-fluid "  width="30" style="margin-right: 10px;">
                          </a>
                          </span>
                          <span>
                            <a href="https://youtube.com/@starlight_melodies?si=5R0pDA14iy1JD0PS">
                            <img src="Images/youtube.png" class="img-fluid "  width="30">
                            </a>
                          </span>
                        </small>  </div> 
                   </div>
               </div>
           </div>
       </footer>
      </div>

<!--Loader-->

<div class="loader">
</div>

</body>
</html>