<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.slim.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div class="main-container">
        <!--Navbar  -->
        <header>
            <!-- Middle Header  -->
            <div class="header-middle">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 position-relative">
                            <div class="logo">
                                <a href="/"><img class="ms-5" src="imgs/logo.jpg" width="75px"></a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5 search-order">
                            <div class="header-search">
                                <form action="">
                                    <div class="input-group">
                                        <div class="input-group mb-3">
                                            <input type="search" class="form-control input-search"
                                                placeholder="Search Products.." />
                                            <div class="input-group-append">
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-4">
                            <div class="middle-header-right">
                                <div class="sign-register">
                                    <i class="fa-solid fa-user"></i>
                                    <p>
                                        <a href="signup">Register</a><br />
                                        or <a href="login">Sign In</a>
                                    </p>
                                </div>
                                <div class="wishlist-widget">
                                    <a href="wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </div>
                                <div class="my-cart-widget">
                                    <button class="btn position-relative">
                                        <a href="cart">
                                            <i class="fa-solid fa-cart-shopping"></i>

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
        <!--End of Navbar  -->


        <div class="dashboard-container">
            <div class="container-fluid mt-3" style="background-color: white">
                <div class="row">
                    <!-- Aside Links  -->
                    <aside class="aside-Dashboard col-lg-2" style="height: 100vh; background-color: black">
                        <ul>
                            <li>
                                <a href="userDashboard">Information</a>
                            </li>
                            <li>
                                <a href="inProcess">In Process</a>
                            </li>
                            <li>
                                <a href="receivedProducts">Received Products</a>
                            </li>
                            <li>
                                <a href="login">Logout</a>
                            </li>
                        </ul>
                    </aside>
                    <!-- End of Aside Links  -->

                    <section class="col-lg-7 p-5">
                        <h2 class="mb-4">Reveived Orders</h2>

                        <div class="wishlist-container mt-3">
                            <div class="block" style="background-color: white;">
                                <table class="wishlist">
                                    <thead class="wishlist__head">
                                        <tr class="wishlist__row">
                                            <th class="wishlist__column wishlist__column--image">Image</th>
                                            <th class="wishlist__column wishlist__column--product">Product</th>
                                            <th class="wishlist__column wishlist__column--price">Price</th>
                                            <th class="wishlist__column wishlist__column--price">Received Date</th>
                                        </tr>
                                    </thead>

                                    <tbody class="wishlist__body">
                                        <tr class="wishlist__row">
                                            <td class="wishlist__column wishlist__column--image">
                                                <a href="productDetails.html">
                                                    <img src="imgs/item11.png" >
                                                </a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--product"><a
                                                    href="productDetails.html" class="wishlist__product-name">Banana Cup Cake</a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--price">500.00</td>
                                            <td class="wishlist__column wishlist__column--price current_date">01 Jan, 2023</td>

                                        </tr>

                                        <tr class="wishlist__row">
                                            <td class="wishlist__column wishlist__column--image">
                                                <a href="#"><img src="imgs/item22.jpg" alt=""></a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--product">
                                                <a href="#" class="wishlist__product-name">Caramel Cup Cake</a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--price">520.00</td>
                                            <td class="wishlist__column wishlist__column--price current_date">01 Jan,2023</td>

                                        </tr>

                                        <tr class="wishlist__row">
                                            <td class="wishlist__column wishlist__column--image">
                                                <a href="#"><img src="imgs/creamy.jfif" alt=""></a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--product">
                                                <a href="{{('pantsCategories')}}" class="wishlist__product-name">Butter Cup Cake</a>
                                            </td>

                                            <td class="wishlist__column wishlist__column--price">550.00</td>
                                            <td class="wishlist__column wishlist__column--price current_date">02 Jan, 2023</td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>

    </div>


    
    <script src="js/main.js"></script>
    <!-- Fonts-Awesome  -->
    <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"> </script>

</body>

</html>