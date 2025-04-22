
<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username']; // Safe to assign now
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking- Olivea Salon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body-booking">
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
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
      <!--Registration form-->
      <div class="container register-form" >
        <form action="Booking_action.php" method="post">
        <div class="form-login">
            

            <div class="form-content">
                <div class="row">
                    <h2 class="login" style="margin-bottom: 50px; font-family: 'Claire Vionce Demo';">Book Appointment</h2>
                    <p>Enter Username</p>
                    <div class="form-group">
                      <input class="form-control" type="text" style="border-radius: 5ch;width: 50%;" name="username" placeholder="User name" />
                      <h4 class="login" style="margin-bottom: 50px;"></h4>

                    </div>
                   <!--Guest Information-->
                   <h4 style="font-family: 'Claire Vionce Demo';">Guest Information</h4>
                   <p>Who are you booking an appointment for?</p>
                   <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me only" id="me">
                    <label class="form-check-label" for="me">
                        Me only
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me +1 Guest" id="Me+1Guest" >
                    <label class="form-check-label" for="Me+1Guest">
                        Me +1 Guest
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me +2 Guest" id="Me+2Guest">
                    <label class="form-check-label" for="Me+2Guest">
                        Me +2 Guest
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me +3 Guest" id="Me+3Guest" >
                    <label class="form-check-label" for="Me+3Guest">
                        Me +3 Guest
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me +4 Guest" id="Me+4Guest">
                    <label class="form-check-label" for="Me+4Guest">
                        Me +4 Guest
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Guest" value="Me +5 Guest" id="Me+5Guest" >
                    <label class="form-check-label" for="Me+5Guest">
                        Me +5 Guest
                    </label>
                  </div>
                    <!--Service-->
                    
                    <h4 class="login" style="margin-bottom: 50px;"></h4>
                    <h4 style="font-family: 'Claire Vionce Demo';">Service</h4>

                    <p>Select Services </p>
                    <br><br>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-control" style="border-radius: 5ch;">
                                <input class="form-check-input" type="checkbox" name="service1" value="Color" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Color
                                </label>
                              </div>
                        </div>
                        <div class="form-group">
                              <div class="form-control" style="border-radius: 5ch;">
                                <input class="form-check-input" type="checkbox" name="service2" value=" Consultation" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Consultation
                                </label>
                              </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-control" style="border-radius: 5ch;">
                                <input class="form-check-input" type="checkbox" name="service3" value="Eyebrow shaping" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Eyebrow shaping
                                </label>
                              </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control" style="border-radius: 5ch;">
                                <input class="form-check-input" type="checkbox" name="service4" value="Hair cut" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Hair cut
                                </label>
                              </div>                        
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-control" style="border-radius: 5ch;">
                                <input class="form-check-input" type="checkbox" name="service5" value="Styling" id="flexCheckChecked" >
                                <label class="form-check-label" for="flexCheckChecked">
                                    Styling
                                </label>
                              </div>
                        </div>
                        
                    </div>
                </div>
                <!--Employee Selection-->
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <h4 style="font-family: 'Claire Vionce Demo';">Employee Selection</h4>

                <p>Select Employee</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Any Employee" id="AnyEmployee">
                    <label class="form-check-label" for="AnyEmployee">
                        Any Employee
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Lindsay Toutain" id="LindsayToutain" >
                    <label class="form-check-label" for="LindsayToutain">
                        Lindsay Toutain
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Ethan Silver" id="EthanSilver">
                    <label class="form-check-label" for="EthanSilver">
                        Ethan Silver
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="J Correa" id="JCorrea" >
                    <label class="form-check-label" for="JCorrea">
                        J Correa
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Ryan O Sullivan" id="Ryan">
                    <label class="form-check-label" for="Ryan">
                        Ryan O Sullivan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Hannah Brown" id="Hannah" >
                    <label class="form-check-label" for="Hannah">
                        Hannah Brown
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Employee" value="Molly Tapper" id="Molly" >
                    <label class="form-check-label" for="Molly">
                        Molly Tapper
                    </label>
                  </div>
                
                <!--Date & Time-->
                <br><br><br>
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <h4 style="font-family: 'Claire Vionce Demo';">Date and Time</h4>

                <dl>
                    <dt>SALON HOURS</dt>
                    <dd>Sunday: 10am-6pm</dd>
                    <dd>Monday: 10am-7pm</dd>
                        <dd>Tuesday-Thursday: 9am-8pm</dd>
                        <dd>Friday: 9am-7pm</dd>
                        <dd>Saturday: 9am-5pm</dd>
                </dl> 
                        
                        
                    
                               
            <div class="col-md-6">
                    <div class="form-group">
                        <p>Time</p>
                        <input type="time" class="form-control" style="border-radius: 5ch;" name="time" value="" required/>
                        
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <p>Date</p>
                        <input type="date" class="form-control" style="border-radius: 5ch;" name="date" value=""  required/>
                        
                    </div> 
                </div>
                <br><br><br>
                <!--Note-->
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <p>Notes area should not be used to request additional service(s)</p>
                <div class="form-group">
                    <input type="text" class="form-control" style="border-radius: 5ch;" placeholder="Appoinment note " value="" name="note" />

                </div>
                
                <h4 class="login" style="margin-bottom: 50px;"></h4>

                <button type="submit" class="btnSubmit">Book Appoinment</button>
            </div>
        </div>
      </form>
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