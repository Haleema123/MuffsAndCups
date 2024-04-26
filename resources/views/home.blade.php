<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MUFFS & CUPS</title>

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

  <style>
    
  </style>

</head>

<body>

  <div class="mainContainer">

    <!-- Go to top Button  -->
    <button type="button" class="btn btn-floating btn-lg" style="background-color: #ff6801;" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
    <!-- End of Go back to the top Button  -->


    <!--Navbar  -->
    <header>
      <!-- Topbar  -->
      <div class="topbar">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-3">
              <div class="top-left deals">
                <span class="badge bg-danger text-white">Hot Deals</span>
                <a href="">Buy 1 get 1 free</a>
              </div>

            </div>
            <div class="col-md-2">
              <div class="top-left deals">
                <a href="/Search">CLICK FOR LIVE SEARCH</a>
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
              <div class="middle-header-right">
                <div class="sign-register">
                  <i class="fa-solid fa-user"></i>
                  <p><a href="{{('signup')}}">Register</a><br>
                    or <a href="{{('login')}}">Sign In</a></p>
                </div>
                <div class="wishlist-widget">
                  <a href="{{('wishlist')}}">
                    <i class="fa-regular fa-heart"></i>
                  </a>
                </div>
                <div class="my-cart-widget">
                  <button class="btn position-relative">
                    <a href="{{('cart')}}">
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
    <!--End of Navbar  -->


    <!-- Slider  -->
    <div class="slider" style="background-color:white">
      <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/slide1.jpg" class="d-block w-100" style="height:550px; padding: 0 1.1% 0 1.1%">
          </div>
          <div class="carousel-item">
            <img src="imgs/slide2.jpg" class="d-block w-100" style="height:550px;">
          </div>
          <div class="carousel-item">
            <img src="imgs/slide3.jpg" class="d-block w-100" style="height:550px;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- End of Slider  -->


    <!-- Main Body  -->
    <div class="container-fluid bg-white pb-3">
      <div class="row">
        <div class="Sweatshirts-text mt-3 col-lg-6 col-md-12">
          <h3>CUPCAKES</h3>
          <P style="margin-bottom: -6px;">Cupcakes are sweet and even sweeter when shared.</P>
          <p>A perfect, Mitha.</p>
          <a name="" id="" class="btn btn-primary" href="#" role="button">Discover the Selection</a>
        </div>

        <div class="Sweatshirts-photo mt-3 col-lg-6 col-md-12">
          <img src="imgs/media_query.jpg">
        </div>

        <div class="summer-2022 mt-3">
          <div class="row">
            <div class="summer-2022-photo col-lg-6">
              <img src="imgs/carmello.jpeg" style="width: 100%; height: auto; border: none;">
            </div>

            <div class="summer-2022-text col-lg-6 col-md-12 p-0">
              <h3>CAKES</h3>
              <p>A cake is a sweet food made by baking a mixture of flour, eggs, sugar, and fat...</p>
              <a name="" id="" class="btn btn-primary" href="#" role="button">Explore the Selection</a>
            </div>
          </div>
        </div>

      </div>
      <div class="container">
        <hr>
      </div>

    </div>

    <div class="container-fluid bg-white categories-main">
      <h2 class="text-center pb-2">CATEGORIES</h2>

      <!-- Categories  -->
      <div class="container categories-container">
        <div class="row" style="row-gap: 15px;">
          <div class="shirts col-lg-6 col-md-6 col-12 prdCard">
            <img src="imgs/1.jpg" style="width: 100%; height: auto; border: none;">
            <div class="overlay">
              <h4>Cup Cakes</h4>
              <a name="" id="" class="btn category-btn" href="{{('CupCakesCategories')}}" role="button">Discover Cups</a>
            </div>
          </div>

          <div class="hats col-lg-6 col-md-6 col-12 prdCard">
            <img src="imgs/cake2.jpeg" style="width: 100%; height: auto; border: none;">
            <div class="overlay">
              <h4>Cakes</h4>
              <a name="" id="" class="btn category-btn" href="" role="button">Discover Cakes</a>
            </div>
          </div>

          <div class="pants col-lg-6 prdCard">
            <img src="imgs/cookies.jpg" style="width: 100%; border: none;" height="auto">
            <div class="overlay">
              <h4>Cookies</h4>
              <a name="" id="" class="btn category-btn" href="" role="button">Explore Cookies</a>
            </div>
          </div>

          <div class="shoes col-lg-6 m-0 prdCard">
            <img src="imgs/creamy.jfif" style="width: 100%; height: auto; border: none;">
            <div class="overlay">
              <h4>Vanilla Cup Cakes</h4>
              <a name="" id="" class="btn category-btn" href="" role="button">Vanilla</a>
            </div>
          </div>

        </div>
      </div>
      <!-- End of Categories  -->

      <!-- HighLights Carousel  -->
      <section id="collection" class="section-padding bg-white">
        <div class="container">
          <h2 class="section-title my-4 text-center">HighLights</h2>
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <!-- OWL HERE -->
              <div class="owl-carousel owl-theme w1">
                <div class="item" style="width:100%">
                  <div class="card" style="width: 18rem;">
                    <img src="imgs/item7.jpg" class="card-img-top" style="height:215px">
                    <div class="card-body">

                      <div class="card-title" style="margin: 0;">
                        <h5 class="card-title">BlueBerry</h5>
                      </div>

                      <div class="star-rating d-block">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <h5 class="prices">Rs. 400</h5>

                      <div class="add-to-cart-btn">
                        <a href=""><button class="btn btn-primary">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item" style="width:100%">
                  <div class="card" style="width: 18rem;">
                    <img src="imgs/item11.png" class="card-img-top">
                    <div class="card-body">

                      <div class="card-title" style="margin: 0;">
                        <h5 class="card-title">Strawberry</h5>
                      </div>

                      <div class="star-rating d-block">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <h5 class="prices">Rs. 350</h5>

                      <div class="add-to-cart-btn">
                        <a href=""><button class="btn btn-primary">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item" style="width:100%">
                  <div class="card" style="width: 18rem;">
                    <img src="imgs/item22.jpg" class="card-img-top">
                    <div class="card-body">

                      <div class="card-title" style="margin: 0;">
                        <h5 class="card-title">Chocolate</h5>
                      </div>

                      <div class="star-rating d-block">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <h5 class="prices">Rs. 400</h5>

                      <div class="add-to-cart-btn">
                        <a href=""><button class="btn btn-primary">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item" style="width:100%">
                  <div class="card" style="width: 18rem;">
                    <img src="imgs/item12.jpg" class="card-img-top">
                    <div class="card-body">

                      <div class="card-title" style="margin: 0;">
                        <h5 class="card-title">Coffee</h5>
                      </div>

                      <div class="star-rating d-block">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <h5 class="prices">Rs. 400</h5>

                      <div class="add-to-cart-btn">
                        <a href=""><button class="btn btn-primary">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="item" style="width:100%">
                  <div class="card" style="width: 18rem;">
                    <img src="imgs/choclicious.jpg" class="card-img-top"style="height:215px">
                    <div class="card-body">

                      <div class="card-title" style="margin: 0;">
                        <h5 class="card-title">Chocolate</h5>
                      </div>

                      <div class="star-rating d-block">
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star checked"></i>
                        <i class="fa fa-star"></i>
                      </div>

                      <h5 class="prices">Rs. 500</h5>

                      <div class="add-to-cart-btn">
                        <a href=""><button class="btn btn-primary">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- owl till here -->
            </div>
          </div>
        </div>
      </section>
      <!-- End of HighLights Carousel  -->
    </div>
    <!-- End of Main Body  -->

  </div>
  <!-- End of mainContainer  -->


  <!-- Get Trends Notification  -->
  <div class="container mt-5" id="get-trends-notification">
    <hr class="">
    <div class="get-trends-firts my-5">
      <div class="row">
        <h3 class="text-center">Get the Latest Trends First</h3>
        <div class="row">
          <p class="text-center">Get all the latest information on sales, discounts and weekly <br> product launches.
            Sign up for newsletter today.</p>
        </div>
        <div class="row">
          <form action="">
            <div class="input-email col-md-6 offset-md-3">
              <input type="text" class="form-control mb-3 email-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
            </div>
        </div>
        <div class="row">
          <div class="subscribe text-center ">
            <button class="btn subscribe-btn " style="width: 20%;">Subscribe</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End of Get Trends Notification -->


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




  <script src="js/main.js"></script>

  <!-- Fonts-Awesome  -->
  <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"></script>

</body>

</html>