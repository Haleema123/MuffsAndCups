<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.slim.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-container">
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
                                            <input type="search" class="form-control input-search"
                                                placeholder="Search Products..">
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Products <i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{('CupCakesCategories')}}">Shirts</a></li>
                                    <li><a class="dropdown-item" href="{{('pantCategories')}}">Pants</a></li>
                                    <li><a class="dropdown-item" href="{{('shoesCategories')}}">Shoes</a></li>
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

        <!-- About Us  -->
        <div class="about-us mt-3 p-5" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="about-us-heading col-12">
                        <h3>About Us</h3>
                    </div>
                    <div class="about-us-body">
                    <center><h6>We bake just like at home.</h6></center>
                    Founded in Lahore in 2020, the philosophy of Layers Bakeshop was simple; to create connections through desserts while striking the ideal balance between flavor and feeling.
                    Since the beginning, Layers has secured an irreplaceable spot in the hearts of people.
                    <br><br>Being the quintessential representation of aesthetics and taste, a Layers dessert is consumed by the eyes well before delighting the tastebuds!
                    </div>
                </div>
            </div>
        </div>
        <!-- End of About Us  -->


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
                        <a href="">Fulfilled by CUPS & MUFFS</a> <br> <br>
                    </div>

                    <div class="col-md-3 col-sm-6" id="khareedoFooter">
                        <h5>CUPS&MUFFS.PK</h5>
                        <a href="{{('aboutus')}}">About Us </a> <br>
                        <a href="">Digital Payments </a> <br>
                        <a href="">CUPS & MUFFS Cares </a> <br>
                        <a href="">CUPS & MUFFS Blogs </a> <br>
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
                    <p>@2022 CUPS & MUFFS Pakistan</p>
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