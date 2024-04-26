<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Live Search</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery.slim.min.js"></script>
  <link rel="stylesheet" href="css/style.css">

  <!-- Owl-Crousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <script src="js/owl.carousel.min.js"></script>


  <!-- Animate-CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>
<body>
 <!--Navbar  -->
 <header>
      <!-- Topbar  -->
      <div class="topbar">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-5">
              <div class="top-left deals">
                <span class="badge bg-danger text-white">Hot Deals</span>
                <a href="">Buy 1 get 1 free</a>
              </div>
            </div>
            <div class="col-md-7 top-right">
              <ul class="right-Element">
                <li>
                  <a href="{{('storeLocation')}}">
                    <i class="fas fa-map-marker-alt"></i> Store Location
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa-solid fa-download"></i> Download App
                  </a>
                </li>
              </ul>
              <div class="myAccount-nav">
                <span>
                  <i class="fas fa-user-cog"></i> My Account
                </span>
                <ul class="myAccount-dropdown">
                  <li>
                    <a href="{{('userDashboard')}}">Profile</a>
                  </li>
                  <li>
                    <a href="{{('login')}}">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Bottom Navbar  -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="visibility: hidden;">Hidden.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Products <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{('CupCakesCategories')}}">Cup Cakes</a></li>
                  <li><a class="dropdown-item" href="">Cakes</a></li>
                  <li><a class="dropdown-item" href="">Cookies</a></li>
                
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{('contactUs')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{('aboutus')}}">About Us</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End of bottom Navbar  -->
</header>
    <div class="container mt-3 pd-3">

        <center><h2>Live Search</h2></center>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="input-group">
                    <input type="search" id="search" name="search" class="form-control rounded" placeholder="Search" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div><br>
            <div class="col-md-12" >
                <center><div class="card mycard m-2 p-2" style="width: 22rem;"></div></center>
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
          <a href="">Fulfilled by MUFFS & CUPS</a> <br> <br>
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
              <img src="imgs/logo.jpg" style="height:100px">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>


    <script>
        $(document).ready(function () {
            $('#search').on('keyup', function(){
                var value = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/Search",
                    data: {'search':value},
                    success: function (data) {
                        $('.mycard').html(data);
                    }
                });
            });
        });
    </script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>