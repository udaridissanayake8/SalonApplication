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
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Contact- Olivea Salon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body style="background-color: rgb(49, 47, 47);">
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
                <a class="nav-link" href="Products.php">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Booking.php">BOOK APOINTMENT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Contact.php">CONTACT</a>
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
        <img src="Images/contact3.jpg" class="w-100" style="margin-top: -150px;" />
            <div  style="background-color: rgba(10, 10, 10, 0.589)">
            <h1 class="headline" style="font-size: 120px; margin-top: -250px;">CONTACT</h1>
            </div>
      </div>
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
       <!--Contact Form-->
    <div class="container mt-5" style="color: rgb(66, 185, 166);">
      <h3 style="margin-top: 15vh;">Contact Us</h3>
      <!-- Success Alert Here -->
  
      <form action="Contact_action.php" method="post">
          <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control"name="name" id="name" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
          </div>
          <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-light" style=" border: 0cap; border-radius: 5ch; width: 15vw; background-color: rgb(59, 186, 153); box-shadow: 0 0 0 2px rgba(28, 27, 27, 0.584), 0 5px 8px 3px ;">Submit</button>
      </form>
  </div>


<!--Contact Form end-->

      <div class="contact">
        
        <h3>SALON ADDRESS</h3>
        <p><img src="Images/home.gif" class="conicon">20 Newbury Street, 4th Floor Boston, MA 02116</p>

        <h3 style="margin-top: 50px;">APPOINTMENTS</h3>
        <p><img src="Images/phone.gif" class="conicon">Phone: (617) 267-4027</p>
        <p><img src="Images/email.gif" class="conicon">Email: oliveasalonboston@gmail.com</p>

        <p><a href="bookAppoinment.html" class="link-underline-dark" style="color: rgb(59, 170, 153);">Book Onine</a></p>
        <h3 style="margin-top: 50px;">SALON HOURS</h3>
        
        <img src="Images/clock.gif" class="conicon">
        <ul>
        <li>Sunday: 10am-6pm</li>
        <li>Monday: 10am-7pm</li>
        <li>Tuesday-Thursday: 9am-8pm</li>
        <li>Friday: 9am-7pm</li>
        <li>Saturday: 9am-5pm</li>
      </ul>

        <h3 style="margin-top: 50px;">OUR POLICIES</h3>
        <p>All clients: Kindly provide 24 hours notice if you need to reschedule or cancel an appointment. Changes made within the 24-hour window will be charged 50% of the service fee. No-shows will be charged in full.</p>
        <h3 style="margin-top: 50px;">BOOKING</h3>
        <p>Online booking is open to current clients. First-time clients are encouraged to create a profile to book online. You would need to follow up with a phone call to complete the booking process, as we conduct a brief questionnaire and take the credit card information to secure the appointment. (credit card information is not kept on file after the initial appointment)</p>
        <h3 style="margin-top: 50px;">APPOINTMENTS</h3>
        <p>At this time, we are by appointment only.  Please arrive early for your appointment if possible. While we try to accommodate late clients, please keep in mind your appointment cannot be guaranteed if you are running more than 15 minutes behind. We require a credit card to hold an appointment so we can uphold our no-show & cancellation/ reschedule policy.</p>
        <h3 style="margin-top: 50px;">CHILDREN’S POLICY</h3>
        <p>At Olivea Salon, we aim to offer its clients a relaxing, complete salon experience. The salon can be an extremely lively active place with many people and equipment in motion.

            Children under 10 are strongly encouraged not to visit the salon.</p>
    
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


    <script>
      window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === '1') {
            document.getElementById('success-alert').classList.remove('d-none');
            window.history.replaceState({}, document.title, window.location.pathname);
        }
      };
    </script>
    
</body>
</html>