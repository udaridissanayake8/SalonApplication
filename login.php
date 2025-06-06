

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- Olivea Salon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body-login">
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
                <a class="nav-link" href="Contact.php">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <!--nav bar end-->
      <!--login form-->
      <div class="container" style="padding: 110px; margin-left: 6vw;">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                <h2 class='text-white'>WELCOME</h2>
                  <div class="form-login"></br>
                    <form action="login_action.php" method="post">
                    <h4 class="login">Login to your account</h4>
                    </br>
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text" style="background-color: rgba(0, 0, 0, 0); border: 0;">
                        <img src="Images/user.png" style="width: 30px; margin-right: 5px;">
                        
                        <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" name="username"  required/>
                      </span>
                      </div>
                    </div>
                    </br></br>
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text" style="background-color: rgba(0, 0, 0, 0); border: 0;">
                        <img src="Images/door-key2.png" style="width: 30px; margin-right: 5px;">
                        
                        <input type="password" id="userPassword" class="form-control input-sm chat-input" placeholder="password" name="password"  required/>
                      </span>
                      </div>
                    </div>
                    <h5 class="frogot-clik" id="frogot-clik">Forgot Password ?</h5>
                    </br></br>
                    <div class="wrapper">
                            <span class="group-btn">
                                <button type="submit" class="btn btn-danger btn-md">Login</button>
                            </span>
                    </div>
                    <h5 >Don't have an account? <a href="Register.php"
                        class="link-danger">Register</a></h5>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
    
    <!--frogot password-->
    <div class="popup">
      <div class="popup-content">
        <img src="Images/close.png" class="closebtn">
        <h2 class="frogot" >Frogot Your Password?</h2>
        <p style="text-align: center; margin-top: 3ch; color: azure;">To reset your password, enter the email address associated with your account.</p>
        <form action="" method="post" class="frogot-form" onsubmit="event.preventDefault(); sendResetEmail();">
          <input type="email" id="email" class="form-control" style="border-radius: 5ch; border-color: aliceblue;" placeholder="email" name="email" value="" required/>
          <button type="submit"onclick="sendResetEmail()"  class="btn btn-danger btn-md" style="background-color: rgb(112, 79, 72); margin-top: 15px; box-shadow: 4px 6px 5px rgba(0, 0, 0, 0.471); border: 0cap;" >Send Email</button>


        </form>

      </div>


    </div>

    <script>
      document.getElementById("frogot-clik").addEventListener("click", function(){
        document.querySelector(".popup").style.display="flex";
      })

      document.querySelector(".closebtn").addEventListener("click", function(){
        document.querySelector(".popup").style.display="none";
      })
    </script>
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