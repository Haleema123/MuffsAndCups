<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>

  <link rel="stylesheet" href="css/style.css">

  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery.slim.min.js"></script>

</head>
<body>

  <div class="main-container" style="background-color: #F2F2F2;">
    <!-- Navbar  -->
    <header>

      <!-- Middle Header  -->
      <div class="header-middle">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-2 col-lg-2 col-4">
              <div class="logo d-flex justify-content-center align-items-center">
                <a href="{{('/')}}"><img class="ms-5" src="imgs/logo.jpg" width="75px"></a>
              </div>
            </div>

            <div class="col-md-4 col-lg-5 col-6 search-order">
              <div class="header-search">
                <form action="">
                  <div class="input-group">
                    <div class="input-group mb-3">
                      <input type="search" class="form-control input-search" placeholder="Search Products..">
                      <div class="input-group-append">
                        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 ">
              <div class="middle-header-right" style="padding-top: 14px;">
                <div class="wishlist-widget">
                  <a href="{{('wishlist')}}">
                    <i class="fa-regular fa-heart"></i>
                  </a>
                </div>
                <div class="my-cart-widget">
                  <button class="btn position-relative">
                    <a href="/cart">
                      <i class="fa-solid fa-cart-shopping "></i>
                    </a>
                    <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                      2</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>
    <!-- End of Navbar  -->


    <div class="container">
      <div class="container">
        <div class="row">
          <div class="image-and-login mt-3 d-flex">
            <div class="left-image col-6">
              <img src="" class="Login-Image">
            </div>
            <div class="right-content col-6">
                <div class="container">
                  <div class="row">
                    <div class="login-form p-5">

                      <div class="login-text">
                        <h2>Sign Up</h2>
                        <p style="font-size: 13px;">Get Access to your Orders, Wishlist and Recommendations</p>
                      </div>

                      <div class="login-with-google text-center">
                        <button type="button" class="btn login-with-google-btn"> <img src="imgs/google.png" width="25px" alt=""> <span>
                          Sign In with Google
                        </span></button>
                      </div>

                      <div class="sign-In-with-email mt-3 mb-4">
                        <div class="separator">Or Sign Up with Email</div>
                      </div>

                      <form method="POST"  enctype="multipart/form-data" >
                      @csrf
                        <div class="input-form">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" name='name' id="username" placeholder="min-8 characters" onkeyup="return validateUsername();" minlength="8" required>
                            </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" name='email' id="email" placeholder="mail@webiste.com" onkeyup="return validateEmail();"   required>
                          </div>
                          <div class="mb-1">
                            <label for="password" class="form-label">Password*</label>
                            <input type="password" class="form-control" name='password' id="password" placeholder="John123" onkeyup="return validatePassword();" pattern="^(?=^.{8,15}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"='true' required>
                          </div>
                        </div>

                        <div class="login-btn pt-4">
                          <input type="Submit" class="form-control" id="formGroupExampleInput1" value="Sign Up">
                        </div>
                      </form>

                      <p class="mt-3 ps-2" id="not-register">Already have an Account? <span><a href="/login">Sign In</a></span></p>

                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer  -->
    <div class="whole-footer">
      <div class="container-fluid footer1 mt-3" id="foot">
  
        <div class="row pt-4">
          <div class="col-md-3 offset-md-1 col-sm-6" id="customerCare">
            <h5>Customer Care</h5>
            <a href="">Help Center </a> <br>
            <a href="">How to Buy</a> <br>
            <a href="">Returns and Funds </a> <br>
            <a href="">Our Setup </a> <br>
            <a href="{{('contactUs')}}">Contact Us </a> <br>
            <a href="">Our Pick Up points </a> <br>
            <a href="">Purchase Protection</a> <br>
            <a href="">Fulfilled by Khareedo (FBD)</a> <br> <br>
          </div>
  
          <div class="col-md-3 col-sm-6" id="khareedoFooter">
            <h5>MUFFS&CUPS.PK</h5>
            <a href="{{('aboutus')}}">About Us </a> <br>
            <a href="">Digital Payments </a> <br>
            <a href="">MUFFS & CUPS Cares </a> <br>
            <a href="">MUFFS & CUPS Blogs </a> <br>
            <a href="">Terms and Condition</a> <br>
            <a href="">Privacy Policy</a> <br>
            <a href="">NTN Number : 4012118-6</a> <br>
            <a href="">STRN Number : 1700401211818</a> <br><br>
  
          </div>
  
          <div class="col-md-5 mb-2" id="download app">
            <h5>Download APP</h5>
  
            <p>Scan QR code to get the Mobile App</p>
            <img src="imgs/QRcode.jpg" alt="">
  
          </div>
        </div>
      </div>
  
      <div class="container-fluid footer2">
        <div class="row mt-3 offset-md-1" id="paymentAndSocial">
          <div class="col-md-4 col-sm-6 mb-3" id="payment">
            <h4>Payment</h4>
            <div class="paymentImgs">
              <img class="pyImg" src="imgs/cashOnDelivery.jpeg" alt="">
              <img class="pyImg" src="imgs/visaCard.png" alt="">
              <img class="pyImg" src="imgs/masterCard.png" alt="">
              <img class="pyImg" src="imgs/easypaisa.jpg" alt="">
            </div>
          </div>
  
          <div class="col-md-4 col-sm-6 mb-3" id="followUs">
            <h4>Follow Us</h4>
            <div class="socialIcons">
              <i class="fa-brands fa-facebook-square me-2 sIcons"></i>
              <i class="fa-brands fa-twitter-square me-2 sIcons"></i>
              <i class="fa-brands fa-google-plus-square me-2 sIcons"></i>
              <i class="fa-brands fa-instagram-square me-2 sIcons"></i>
              <i class="fa-brands fa-linkedin me-2 sIcons"></i>
            </div>
          </div>
  
          <div class="col-md-4 mb-1" id="verifiedBy">
            <div class="verfied-by">
              <a href="{{('/')}}">
                <img src="imgs/logo.jpg">
              </a>
            </div>
          </div>
        </div>
  
        <hr>
  
        <div class="copyright mb-3 text-muted">
          <p>@2022 MUFFS & CUPS Pakistan</p>
        </div>
      </div>
    </div>
    <!-- End of Footer  -->

  </div>



  <!-- Fonts-Awesome  -->
  <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"></script>

  <!-- Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:,wght@1,200&display=swap" rel="stylesheet">

</body>

</html>