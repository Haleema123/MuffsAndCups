<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Details</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery.slim.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="mainContainer">
    <!-- Navbar  -->
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

      <!-- Middle Header  -->
      <div class="header-middle">
        <div class="container-xl">
          <div class="row">
            <div class="col-md-2 col-lg-2 col-4">
              <div class="logo d-flex justify-content-center align-items-center">
                <!-- <a href="/.html">Khareedo</a>   -->
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
                        <!-- <button class="btn btn-secondary" type="button">Search</button> -->
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Our Products <i class="fa-solid fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{('CupCakesCategories')}}">Cup Cakes</a></li>
                  <li><a class="dropdown-item" href="">Cakes</a></li>
                  <li><a class="dropdown-item" href="">Cookies</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{('contactUS')}}">Contact Us</a>
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
    <!-- End of Navbar  -->


    <!-- Breadcrumb  -->
    <div class="bread-crumb rounded-2">
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb ps-2 py-2 my-2">
            <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Categories</a></li>
            <li class="breadcrumb-item"><a href="{{('CupCakesCategories')}}">Cup Cakes</a></li>
            <li class="breadcrumb-item">
              <a href="{{('productDetails')}}">Product Details</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Cup Cake
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End of Breadcrumb  -->

    <!-- Product-Info  -->
    <div class="product-info bg-white">
      <div class="container">
        <div class="row">
          <div class="product-image col-xl-5 col-lg-4 col-md-6">
            <img src="imgs/3.jpg"
              style="width: 100%; border: none; height: auto;" />
          </div>

          <div class="product-description-and-all-info mt-2 col-xl-7 col-lg-7 col-md-6">
            <div class="product-description-details">
              <h3 class="text-center" style="font-family: 'Poppins', sans-serif">
                Cup Cake
              </h3>
              <div class="product-prize">
                <h4 class="prices text-center">Rs. 328.00</h4>
              </div>

              <div class="star-rating-and-share-favorites d-flex align-items-center justify-content-center ">
                <div class="star-rating d-inline-block">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>

                  <p class="d-inline ps-4" style="color: blue">29 Reviews</p>
                </div>

                <div class="share-product d-inline-block ms-5">
                  <a href=""><i class="fa-solid fa-share h5"></i></a>
                </div>

                <div class="favorites ms-2">
                  <a href=""><i class="fa-solid fa-heart h5"></i></a>
                </div>
                <hr>
              </div>

              <hr>

              <h6 class="mt-1">Flavor: <span class="text-muted">Vanilla</span></h6>

              <div class="product-quantity my-3">
                <h6 class="d-inline">Quantity:</h6>
                <input type="number" min="1" max="10" value="1" class="py-1" style="width: 55px;" />
              </div>

              <div class="product-size">
                <h6 class="d-inline"> <label for="size"></label> Size:</h6>

                <select id="size" class="py-1" style="width: 55px; margin-left: 29px;">
                  <option value="Small">S</option>
                  <option value="Medium">M</option>
                  <option value="Large">L</option>
                </select>

              </div>
              <div class="product-buttons my-2 text-center">
                <a name="" id="" class="btn add-to-shopping-cart-btn" href="#" role="button">Add to Shopping Bag</a>
                <a name="" id="" class="btn add-to-wishlist-btn" href="#" role="button"> <i
                    class="fa-regular fa-heart"></i>
                  Add to Wishlist
                </a>
              </div>

              <!-- accordian  -->
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                      aria-controls="panelsStayOpen-collapseOne">
                      Details
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">

                      <h5>Product Details</h5>
                      <ul>
                        <li>a sweet baked food made from a dough or thick batter.</li>
                        <li>Soft and Sweet</li>
                        <li>It contains flour and sugar and often shortening, eggs, and a raising agent (such as baking powder)</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                      aria-controls="panelsStayOpen-collapseTwo">
                      FAQs
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <p>a sweet baked food made from a dough or thick batter usually containing flour and sugar and often shortening, eggs, and a raising agent (such as baking powder) </p>
                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Accordian  -->

            </div>
          </div>
        </div>

        <div class="p-2">
        </div>

      </div>
    </div>
    <!-- End of Product-Info  -->

    <!-- Similar Products  -->
    <div class="similar-products">
      <h4 class="text-center mb-3"><span>Similar Products</span></h4>
      <div class="container">
        <section class="recommendation">
          <div class="row">

            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/background.jpeg" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Butter Cup Cake</h6>
                <h6 class="prices text-center">Rs. 350</h6>
              </div>
            </div>

            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/home1.jpg" alt="" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Lemon Cake</h6>
                <h6 class="prices text-center">Rs. 550</h6>
              </div>
            </div>

            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/creamy.jfif" alt="" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Vanilla Cup Cake</h6>
                <h6 class="prices text-center">Rs. 550</h6>
              </div>
            </div>
            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/media_query.jpg" alt="" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Banana Cake</h6>
                <h6 class="prices text-center">Rs. 550</h6>
              </div>
            </div>
            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/item11.png" alt="" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Coffee CUp Cake</h6>
                <h6 class="prices text-center">Rs. 550</h6>
              </div>
            </div>
            <div class="shirt-container col-lg-2 col-md-3 col-sm-4 col-6">
              <div class="recommend-image">
                <a href="{{('productDetails')}}"><img src="imgs/item1.jpg" alt="" style="height:150px"></a>
              </div>
              <div class="recommend-desciption bg-white py-2">
                <h6 class="text-center">Red Velvet Cup Cake</h6>
                <h6 class="prices text-center">Rs. 550</h6>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- End of Similar Products  -->

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
                <img src="imgs/logo.jpg">
              </a>
            </div>
          </div>
        </div>
  
        <hr>
  
        <div class="copyright mb-3 text-muted">
          <p>@2022 MUFFS&CUPS Pakistan</p>
        </div>
      </div>
    </div>
    <!-- End of Footer  -->
  </div>




  <!-- Fonts-Awesome  -->
  <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <!-- Google Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:,wght@1,200&display=swap" rel="stylesheet" />
</body>

</html>