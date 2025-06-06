
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
    <title>Products -Olivea Salon </title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgb(228, 229, 230);">
  <script src="script.js"></script>
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
                <a class="nav-link active" href="Products.php">PRODUCTS</a>
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

      <!--nav bar end-->

      <!--headline-->
      <div class="bg-image" >
        <img src="Images/products.jpg" class="w-100" />
            <div  style="background-color: rgba(10, 10, 10, 0.589)">
            <h1 class="headline" style="font-size: 120px;">PRODUCTS</h1>
            </div>
      </div>
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
      <!--products list -->
      <div class="container" style="margin-top: 120px; margin-bottom: 30px;">
        
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
             
                <img class="homeimgs" src="Images/oribe.jpg" style="width:100%">
                <div class="caption">
                  <h3 class="stylists-name">Oribe</h3>
                  <p class="service">Oribe is a luxurious hair care line known for its premium ingredients and salon-quality results. Formulated with natural botanicals and advanced technology, Oribe nourishes, protects, and enhances all hair types. Experience the luxury and performance of Oribe and elevate your hair care routine at Olivea Salon.</p>
                  <div class="text-center" style="margin-bottom: 15vh; margin-top: 5vh;" >
                    <a href="https://www.oribe.com/"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
              
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              
                <img class="homeimgs" src="Images/Goldwell.jpeg" style="width:100%">
                <div class="caption">
                    <h3 class="stylists-name">Goldwell</h3>

                  <p class="service">Goldwell is a professional hair care brand trusted for its innovative formulas and exceptional results. With products that target color protection, hydration, and hair health, Goldwell provides tailored solutions for every hair type. Discover the transformative power of Goldwell at Olivea Salon for vibrant, healthy hair.</p>
                </div>
                <div class="text-center" style="margin-bottom: 16vh; margin-top: 5vh;" >
                    <a href="https://www.goldwell.com/en-us/home/"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              
                <img class="homeimgs" src="Images/Kerasilk.jpeg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <h3 class="stylists-name">Kerasilk</h3>
                    <p  class="service">Kerasilk’s hair care line known for its high-performance treatments and long-lasting results. Using advanced Silk Technology, Kerasilk deeply nourishes and transforms hair, leaving it smooth, shiny, and manageable. Experience the luxurious feel and beautiful results of Kerasilk for healthier, more radiant hair at Olivea Salon.</p>
                </div>
                <div class="text-center" style="margin-bottom: 13vh; margin-top: 5vh;" >
                    <a href="https://www.kerasilk.com/en-us/homepage/"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: 50px; margin-bottom: 30px;">
        
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
             
                <img class="homeimgs" src="Images/Milbon-Products_1.jpg" style="width:100%">
                <div class="caption">
                  <h3 class="stylists-name">Milbon</h3>
                  <p class="service">Discover the luxury of Milbon hair care products at Olivea Salon. Crafted with advanced Japanese technology, each product is designed to revitalize, protect, and enhance the natural beauty of your hair. Treat yourself to salon-quality results with the Milbon line, trusted by stylists for its exceptional performance.</p>
                </div>
                <div class="text-center" style="margin-bottom: 12.5vh; margin-top: 5vh;" >
                    <a href="https://www.milbon-usa.com/"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              
                <img class="homeimgs" src="Images/wow.jpg" style="width:100%">
                <div class="caption">
                    <h3 class="stylists-name">Color WOW</h3>
                    <p class="service">Color Wow, a revolutionary hair care line designed to protect and enhance color-treated hair. With innovative, sulfate-free formulas, Color Wow helps maintain vibrant color while adding shine and strength. Discover the power of Color Wow for healthier, more vibrant hair at Olivea Salon.</p>
                </div>
                <div class="text-center" style="margin-bottom: 15vh; margin-top: 5vh;" >
                    <a href="https://colorwowhair.com/pages/about-us"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              
                <img class="homeimgs" src="Images/Rikoko.jpeg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <h3 class="stylists-name">Rikoko</h3>
                    <p class="service">Rikoko’s hair care line combines the power of natural ingredients with high-performance results. Infused with organic oils and plant-based botanicals, Rikoko nourishes, strengthens, and protects hair, leaving it soft, shiny, and revitalized. Discover the beauty of naturally radiant hair with Rikoko at Olivea Salon.</p>
                </div>
                <div class="text-center" style="margin-bottom: 14.8vh; margin-top: 5vh;" >
                    <a href="https://www.rikoko.com/"><button type="button" class="btn btn-dark" style="width: 90%; font-size: 11px; border-width: 1ch;" >VIEW THEIR WEBSITE</button></a>
                    </div>
             
            </div>
          </div>
        </div>
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


</body>
</html>