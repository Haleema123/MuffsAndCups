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

    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="main-container">
        <div class="Admin-dashboard-container">
            <div class="container-fluid" style="background-color: #d5dee1e3">
                <div class="row">
                    <aside class="Admin-aside-Dashboard col-lg-2 col-md-2"
                        style="height: 700px; background-color: black">
                        <ul>
                            <br>
                            <h4 style="color:white;">MUFFS & CUPS</h4>
                            <br>
                            
                            <li>
                                <a href="{{('adminDashboard')}}"><i class="fa-solid fa-square-poll-horizontal"></i>
                                    Dashboard</a>
                            </li>
                            <li>
                                <a href="{{('manageProducts')}}"><i class="fa-solid fa-shirt"></i>Manage Products</a>
                            </li>
                            <li>
                                <a href="{{('users')}}"><i class="fa-solid fa-user"></i> Users</a>
                            </li>
                            <li>
                                <a href="{{('login')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                            </li>
                        </ul>
                    </aside>

                    <section class="col-lg-10 col-md-10">
                        <div class="header-search" style="width: 45%;">
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control input-search"
                                        placeholder="Search Products..">
                                    <div class="input-group-append">
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="py-2" style="font-family: 'poppins';">Admin Dashboard</h2>

                        <div class="container box-container">
                            <div class="row">

                                <div class="box1 box d-flex align-items-center col-lg-3 col-md-6 col-sm-6 col-12" id="earnings">
                                    <div class="me-4 p-1">
                                        <h5>Products Sold</h5>
                                        <h3>122</h3>
                                        <p>April 2022 - January 2023</p>
                                    </div>
                                    <div class="iconn p-3 d-flex align-items-end">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>

                                <div class="box2 box d-flex align-items-center col-lg-3 col-md-6 col-sm-6 col-12" id="earnings">
                                    <div class="me-4 p-1">
                                        <h5>Net Profit</h5>
                                        <h3>Rs. 78,900</h3>
                                        <p>April 2022 - January 2023</p>
                                    </div>
                                    <div class="iconn p-3 d-flex align-items-end">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>

                                <div class="box3 box d-flex align-items-center col-lg-3 col-md-6 col-sm-6 col-12" id="earnings">
                                    <div class="me-4 p-1">
                                        <h5>New Customers</h5>
                                        <h3>719</h3>
                                        <p>October 2022 - January 2023</p>
                                    </div>
                                    <div class="iconn p-3 d-flex align-items-end">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    <script src="js/main.js"></script>
    <!-- Fonts-Awesome  -->
    <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"></script>
</body>
</html>