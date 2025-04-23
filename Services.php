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
    <title>Services -Olivea Salon </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
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
                <a class="nav-link active" href="Services.php">SERVICES</a>
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

      <!--nav bar end-->

      <!--headline-->
      <div class="bg-image" >
        <img src="Images/Services2.jpg" class="w-100" style="margin-top: -50px;" />
            <div  style="background-color: rgba(10, 10, 10, 0.589)">
            <h1 class="headline" style="margin-top: -220px;">SERVICES</h1>
            </div>
      </div>
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
      <!--services list 1-->
      <div class="container" style="margin-top: 120px; margin-bottom: 30px;">
        
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
             
                <div class="image-hover-container">
                    <img src="Images/color2.jpg" class="default-img"  style="width:100%"/>
                    <img src="Images/color.jpg" class="hover-img" style="width:100%; height:100%;"/>
                </div>
                <div class="caption">
                  <h3 class="stylists-name">Master Coloring</h3>
                  <p>$85 – $350</p>
                  <p class="service" style="margin-bottom: 30px;">Our expert hair coloring services are crafted to deliver vibrant, customized shades with precision and care, ensuring each color enhances your natural beauty and complements your unique style. Whether you’re seeking bold, striking tones or subtle, seamless blends, our approach ensures flawless, personalized results every time.</p>
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              
            <div class="image-hover-container">
                    <img src="Images/hair cut.jpg" class="default-img"  style="width:100%"/>
                    <img src="Images/haircut2.jpeg" class="hover-img" style="width:100%; height:100%;"/>
                </div>                <div class="caption">
                    <h3 class="stylists-name">Precision Haircutting</h3>

                  <p>$90 – $175</p>
                  <p class="service">Our professional haircutting services are tailored to provide customized, precision styles that reflect your unique personality and enhance your natural features. Whether you’re after a sharp, modern look or a soft, understated shape, we craft each cut with meticulous attention to detail. Our goal is to deliver a fresh, flattering result that suits your lifestyle and keeps you looking effortlessly put-together.</p>
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
            <div class="image-hover-container">
                    <img src="Images/Luxe_Products_Avanti_Boston.webp" class="default-img"  style="width:100%"/>
                    <img src="Images/hair care.jpg" class="hover-img" style="width:100%; height:100%;"/>
                </div>
                <div class="caption">
                    <h3 class="stylists-name">Luxe Hair Essentials</h3>

                  <p class="service" style="margin-bottom: 80px;">Experience the ultimate in hair care with our premium selection of shampoos, conditioners, and styling products, crafted to enhance and nourish all hair types. Elevate your hair routine with science-backed formulations that ensure visibly healthier and more vibrant results.</p>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: 50px; margin-bottom: 30px;">
        
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
             
            <div class="image-hover-container">
                    <img src="Images/bride2.jpg" class="default-img"  style="width:100%"/>
                    <img src="Images/bride1.jpg" class="hover-img" style="width:100%; height:100%;"/>
                </div>                
                <div class="caption">
                  <h3 class="stylists-name">Bridal Hair and Makeup</h3>
                  <p class="service" style="margin-bottom: 30px;">Our bridal hair and makeup services are designed to make your special day even more radiant, with looks crafted to reflect your style and natural beauty. From timeless elegance to modern chic, we offer personalized, detailed styling and flawless makeup applications that last through every smile and celebration. Let our team ensure you feel as beautiful and confident as you deserve on your wedding day.  </p>
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
            <div class="image-hover-container">
                    <img src="Images/staight.jpeg" class="default-img"  style="width:100%"/>
                    <img src="Images/Hair_extensions.jpg" class="hover-img" style="width:100%; height:100%;"/>
                </div>  
                <div class="caption">
                    <h3 class="stylists-name">Hair Straightening Services</h3>

                  <p class="service" style="margin-bottom: 30px;">Our hair straightening services provide sleek, polished looks with options tailored to your specific hair type and desired results. From our smooth, long-lasting keratin treatments to the shine-boosting Brazilian Blowout, we focus on enhancing your hair’s natural beauty while maintaining its health. Experience silky, manageable hair that stays smooth, even in the most humid conditions, for weeks on end.  </p>
                </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
            <div class="image-hover-container">
                    <img src="Images/extention1.jpg" class="default-img" style="width:100%; height:100%;"/>
                    <img src="Images/long_curly_hair.jpg" class="hover-img"  style="width:100%"/>
                </div>  
                <div class="caption">
                    <h3 class="stylists-name">Hair Extensions</h3>
                    <p class="service">Our hair extension services bring volume, length, and texture to your hair, carefully matched to blend seamlessly and look entirely natural. Whether you’re looking to add subtle fullness or dramatic length, we provide customized extension solutions that complement your individual style. Each application is handled with expert care to ensure comfortable, beautiful results that flow and move just like your own hair.</p>
                </div>
             
            </div>
          </div>
        </div>
      </div>

      <figure class="figure" style="margin-bottom: 28px;" >
        <img  src="Images/8.jpg" class="figure-img img-fluid rounded"  >
        <div style="margin-top: -300px;">
        <h1 class="headline2">Schedule a Complimentary Consultation</h1>
        <div class="text-center" style="margin-bottom: 15vh; margin-top: 5vh;" >
          <a href="Booking.php"><button type="button" class="btn btn-light" style="box-shadow: 5px 5px 5px;">BOOK NOW</button></a>
          </div>
        </div>
      </figure>

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