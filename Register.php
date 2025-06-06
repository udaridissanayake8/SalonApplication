<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration- Olivea Salon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body-register">
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
      <!--Scroll arrow-->
      
      <div id="progress" >
        <span id="progress-value">&#x1F815;</span>
      </div>
      <!--Registration form-->
      <div class="container register-form" style="margin-bottom: 20px;">
        <form action="Register_action.php" method="post">
        <div class="form-login">
            

            <div class="form-content">
                <div class="row">
                    <h3 class="login" style="margin-bottom: 50px; font-family: 'Claire Vionce Demo';">My Profile</h3>
                   <!--username password-->
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <input type="text"  class="form-control" style="border-radius: 5ch;" placeholder="User Name *" name="username" value="" required/>

                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" style="border-radius: 5ch;" placeholder="Your Password *" value="" name="password" required/>

                      </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-radius: 5ch;" placeholder="Email *" name="email" value="" required/>

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" style="border-radius: 5ch;" placeholder="Confirm Password *" name="confPassword" value="" required/>
                        </div>
                    </div>

                    <!--profile information-->
                    <h4 class="login" style="margin-bottom: 50px;"></h4>
                    <p>Please enter your profile Information.</p>
                    <br><br>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-radius: 5ch;" placeholder="First Name *" value="" name="FirstName" required/>

                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" style="border-radius: 5ch;" placeholder="Mobile Phone *"  name="Phone" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-radius: 5ch;" placeholder="Last Name *" value="" name="lname" required/>

                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" style="border-radius: 5ch;" placeholder="Home Phone" name="HomePhone" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p>Gender :</p>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="maleGender">Male</label>
                            <input type="radio" class="form-check-input" name="gender" id="maleGender" value="male" checked  />
                            </div>
                            <div class="form-check form-check-inline">
                            <label class="form-check-label" for="femaleGender">Female</label>
                            <input type="radio" class="form-check-input" name="gender" id="femaleGender" value="female"/>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="other">Other</label>
                                <input type="radio" class="form-check-input" name="gender" id="other" value="other"/>
                                </div>
                        </div>
                    </div>
                </div>
                <!--birthday-->
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <p>Birthday</p>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="date" class="form-control" style="border-radius: 5ch;" name="Birthday" value="" required/>

                    </div>
                    
                </div>
                
                <!--contacted appoinments-->
                <br><br><br>
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <p>How would you like to be contacted regarding your appoinments?</p>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="callme">Call Me</label>
                            <input type="radio" class="form-check-input" name="contact" id="callme" value="callme" checked />
                            </div> 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="emailme">Email Me</label>
                                <input type="radio" class="form-check-input" name="contact" id="emailme" value="emailme"  />
                                </div> 
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="textme">Text Me</label>
                                    <input type="radio" class="form-check-input" name="contact" id="textme" value="textme"  />
                                    </div> 
                    </div> 
                </div>
                <br><br><br>
                <!--marketing-->
                <h4 class="login" style="margin-bottom: 50px;"></h4>
                <p>Marketing Preferences:</p>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="text">Opt-in to receive text marketing</label>
                            <input type="radio" class="form-check-input" name="marketing" id="text" value="text" checked />
                            </div> 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="email">Opt-in to receive email marketing</label>
                                <input type="radio" class="form-check-input" name="marketing" id="email" value="email"  />
                                </div> 
                                
                    </div> 
                </div>
                <br><br><br><br>
                <h4 class="login" style="margin-bottom: 50px;"></h4>

                <button type="submit" class="btnSubmit">Submit</button>
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