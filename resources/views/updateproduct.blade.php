<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUFFS & CUPS</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <script script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .product-details__add_product textarea {
            border-radius: 25px;
        }

        .file_upload {
            padding-left: 28px;
            padding-top: 11px;
        }

        textarea{
            padding-left: 15px;
            box-sizing: border-box;
        }
    </style>

</head>

<body>
    <div class="main-container">
        <div class="Admin-dashboard-container">
            <div class="container-fluid" style="background-color: #d5dee1e3">
                <div class="row">
                    <aside class="Admin-aside-Dashboard col-lg-2 col-md-2" style="height: 700px; background-color: black">
                      <ul>
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
                        <div class="header-search" style="width: 60%;">
                            <div class="input-group">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control input-search" placeholder="Search Products..">
                                    <div class="input-group-append">
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <h2>Update Product</h2>
                            <div class="col-lg-6 offset-lg-1 col-md-10 col-10">
                                <section id="addproduct">
                                    <div class="update-product-form-section">

                                        <form action="/login" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-form">
                                                <div class="mb-3">
                                                    <label for="productname" class="form-label">Product Name*</label>
                                                    <input type="text" class="form-control" name='productname' id="productname" placeholder="Product Name" value="{{$selectedproduct->product_name}}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="filename" class="form-label">Product Image*</label>
                                                    <input type="file" class="form-control file_upload" name='filename' id="filename" value="{{$selectedproduct->file_name}}" required>
                                                </div>
                                                <div class="mb-1">
                                                    <label for="productprice" class="form-label">Prodcut Price*</label>
                                                    <input type="text" class="form-control" name='productprice' id="productprice" placeholder="Product Price" value="{{$selectedproduct->product_price}}" required>
                                                </div>
                                                <div class="mb-1 product-details__add_product">
                                                    <label for="productdetails" class="form-label" class="d-block">Product Details*</label>
                                                    <textarea name="productdetails" maxlength="1000"  rows="4" style="width: 100%;" class="d-block">{{$selectedproduct->product_details}}</textarea>
                                                </div>
                                            </div>

                                            <div class="login-btn pt-4 add-product">
                                                <input type="Submit" class="form-control" id="formGroupExampleInput1" value="Update Product">
                                            </div>
                                        </form>

                                    </div>
                                </section>
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

    <!-- Boostrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</body>

</html>