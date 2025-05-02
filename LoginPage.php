<html lang="en">

<?php
  include "db.php";
  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e9df725216.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>The Project StreetWear Co</title>
    <link rel="stylesheet" href="LoginCSS.css">
    <script>
        $(document).ready(function() {
            $(".signup-show").click(function() {
                $(".login-form").hide();
                $(".registration-form").show();
            });
    
            $(".login-show").click(function() {
                $(".registration-form").hide();
                $(".login-form").show();
            });
    
            $(".toggle-follow-us").click(function() {
                $(".follow-us-content").toggle();
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img alt="logo" src="itc.png" height="85px" width="90px" id="logoid">
        </a>
        <label class="navbar-brand-a" href="#" id="logotitle">The PROJECT Co.</label>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="LandPage.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Jquery.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LoginPage.php">Login</a>
                </li>
                <li class="nav-item">
                    <input type="search" class="form-control" placeholder="Search Here" id="search" name="fname">
                </li>
            </ul>
        </div>
    </nav>

    <div class="login-container">
        <div class="row justify-content-center align-items-center inner-row">
            <div class="col-lg-5 col-md-6">
                <img src="logo.png" alt="Description of Image" class="img-fluid">
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="form-box login-form p-md-5 p-3">
                    <div class="form-title">
                        <center><h2 class="fw-bold mb-3">Login</h2></center>
                    </div>
                    <form action="registration.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-control-sm" placeholder="Email" id="loginEmail" name="email" required>
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-sm" placeholder="Password" id="loginPassword" name="password" required>
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="mt-3">
                            <button type="submit" value="Sign In" name="logIn" class="btn primaryBg text-white">Login</button>
                        </div>
                    </form>
                    <br>
                    <div class="mt-3">
                        <span>Don't have an account?</span>
                        <button class="p-0 border-0 bg-transparent primaryColor signup-show">Sign Up Now!</button>
                    </div>
                    <hr>
                    <div class="socials" >
                        <button class="toggle-follow-us btn">Follow Us</button>
                        <div class="follow-us-content">
                            <br>
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i> @/The Project Co.</li>
                                <li><i class="fa-brands fa-twitter"></i> @/theprojco</li>
                                <li><i class="fa-brands fa-instagram"></i> @/theProjco.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="form-box registration-form p-md-5 p-3">
                    <div class="form-title">
                        <center><h2 class="fw-bold mb-3">Sign Up</h2></center>
                    </div>
                    <form action="registration.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="First Name" id="firstName" name="first_name" required>
                            <label for="firstName">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Last Name" id="lastName" name="last_name" required>
                            <label for="lastName">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-control-sm" placeholder="Email" id="signupEmail" name="email" required>
                            <label for="signupEmail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-control-sm" placeholder="Password" id="signupPassword" name="password" required>
                            <label for="signupPassword">Password</label>
                        </div>
                        <div class="mt-3">
                            <button type="submit" value="Sign Up" name="signUp" class="btn primaryBg text-white">Sign Up</button>
                        </div>
                    </form>
                    <div class="mt-3">
                        <span>Already have an account?</span>
                        <button class="p-0 border-0 bg-transparent primaryColor login-show">Login Here!</button>
                    </div>
                    <hr>
                    <div class="socials">
                        <button class="toggle-follow-us btn">Follow Us</button>
                        <div class="follow-us-content">
                            <br>
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i> @/The Project Co.</li>
                                <li><i class="fa-brands fa-twitter"></i> @/theprojco</li>
                                <li><i class="fa-brands fa-instagram"></i> @/theProjco.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><hr><br>

<footer class="page-footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
          <h4 class="text-uppercase font-weight-bold">Additional Information</h4><br>
          <p>Founded by Mendoza Mikhail Pitstock in 2023, The Project transcends mere clothing; it embodies a cultural experience. Streetwear, a fashion trend originated in streets, is known for its laid-back, comfortable, 
            and distinctive aesthetic that gives consideration to the attitudes and lifestyle (Blogs Crew, 2023)</p>
          <p>People express themselves in different, unique ways which includes their clothing, hairstyle, body customization (e.g., tattoos), and jewelry , and adopting what is more commonly referred to as fashion (Ross, 2020), 
            and the fashion embodies a contemporary perspective and a set of trends to embrace. Notably , a compelling observation is that, for a significant portion of participants, fashion is predominantly associated with younger generations (Shukurova, 2018).</p>
      </div>
      
      
      <div class="col-lg-4 col-md-4 col-sm-12" id="contact-details">
          <h4 class="text-uppercase font-weight-bold">Contact Us!</h4><br>
          <div class="details">
            <div>
                <li><i class="fa-solid fa-map"></i>
                    <p>#938 Aurora Boulevard. Cubao, Quezon City</p>
                </li>
                
                    <li>
                      <i class="fa-solid fa-envelope"></i>
                      <i> <a href="mailto:info@projectstreetwear.com">info@projectstreetwear.com</a></i>
                  </li>
                </li>
                <li>
                  <i class="fa-brands fa-instagram"></i>
                  <a href="https://www.instagram.com/theprojectstreetwear" target="_blank" rel="noopener noreferrer">@theprojectstreetwear</a>
              </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>09602010983 / 09785678293</p>
                </li>
            </div>
        </div>
      </div>

  </div>
  <div class="footer-copyright text-center">© 2024 The Project Co. All rights reserved.</div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
