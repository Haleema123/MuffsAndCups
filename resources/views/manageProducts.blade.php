
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUFFS & CUPS</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/style.css">

    <style>
        .viewProducts_table__head tr th {
            font-family: 'poppins';
            color: white;
        }

        .view_products_table_body tr td {
            background-color: white;

        }

        .cart-table__column--delete i,
        .cart-table__column--update i {
            color: #ff6801;
        }

        .search-admin input {
            height: 50px;
        }

        @media (min-width: 768px) {
            .cart-table__column {
                padding: 12px 18px;
                border-top: 1px solid #ebebeb;
            }

            .cart-table__column:first-child {
                border-left: 1px solid #ebebeb;
            }

            .cart-table__column:last-child {
                border-right: 1px solid #ebebeb;
            }

            .cart-table__head {
                background: #f7f7f7;
                font-size: 15px;
            }

            .cart-table__head .cart-table__column {
                font-weight: 500;
            }

            .cart-table__head .cart-table__column:first-child {
                border-top-left-radius: 2.5px;
            }

            .cart-table__head .cart-table__column:last-child {
                border-top-right-radius: 2.5px;
            }

            .cart-table__body .cart-table__column {
                padding-top: 18px;
                padding-bottom: 18px;
            }

            .cart-table__body .cart-table__row:last-child .cart-table__column {
                border-bottom: 1px solid #ebebeb;
            }

            .cart-table__body .cart-table__row:last-child .cart-table__column:first-child {
                border-bottom-left-radius: 2.5px;
            }

            .cart-table__body .cart-table__row:last-child .cart-table__column:last-child {
                border-bottom-right-radius: 2.5px;
            }

            .cart-table__column--image {
                width: 1px;
                text-align: center;
            }

            .cart-table__column--image img {
                width: 80px;
            }

            .cart-table__column--price,
            .cart-table__column--total {
                font-size: 1.05rem;
                color: black;
            }

            .cart-table__column--price {
                text-align: right;
                width: 170px;
            }

            .cart-table__column--quantity {
                padding-left: 90px;
                text-align: center;
                width: 1px;
            }

            .cart-table__column--total {
                text-align: right;
                width: 170px;
            }

            .cart-table__column--remove {
                width: 1px;
            }
        }

        @media (max-width: 767px) {
            .cart-table {
                display: block;
            }

            .cart-table__head {
                display: none;
            }

            .cart-table__body {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .cart-table__row {
                position: relative;
                width: 100%;
                display: block;
                border: 1px solid #ebebeb;
                border-radius: 2px;
            }

            .cart-table__row+.cart-table__row {
                margin-top: 15px;
            }

            .cart-table__column {
                display: block;
                padding: 0;
            }

            .cart-table__column--image {
                padding: 20px 20px 10px;
                text-align: center;
            }

            .cart-table__column--image img {
                width: 100%;
                max-width: 160px;
            }

            .cart-table__column--product {
                text-align: center;
                border-bottom: 1px solid #ebebeb;
                padding: 0 20px 18px;
            }

            .cart-table__column--price,
            .cart-table__column--quantity,
            .cart-table__column--total {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding: 8px 20px;
            }

            .cart-table__column--price:before,
            .cart-table__column--quantity:before,
            .cart-table__column--total:before {
                text-align: left;
                font-weight: 500;
                width: 55%;
                -ms-flex-negative: 0;
                flex-shrink: 0;
                content: attr(data-title) ": ";
            }

            .cart-table__column--quantity .input-number {
                width: 110px;
            }

            .cart-table__column--price {
                padding-top: 18px;
            }

            .cart-table__column--total {
                padding-bottom: 18px;
            }

            .cart-table__column--remove {
                position: absolute;
                top: 5px;
                right: 5px;
            }

            .cart-table__options li:before {
                display: none;
            }
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
                        <div class="header-search " style="width: 90%;">
                            <div class="input-group">
                                <div class="input-group search-admin">
                                    <input type="search" class="form-control input-search" placeholder="Search Products..">
                                    <div class="input-group-append">
                                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div>

                                    <!-- Add Product Icon  -->
                                    <div class="login-btn ms-5 add-product-icon" style="width: 200px; cursor: pointer;">
                                        <a href="/addProduct" style="text-decoration: none;">
                                            <input class="form-control text-center add-product-btn" style="cursor: pointer;" id="formGroupExampleInput1" value="Add Product">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <h2 class="py-2" style="font-family: 'poppins';">Manage Products</h2>

                        <table class="cart__table cart-table mb-3">
                            <thead class="cart-table__head viewProducts_table__head">
                                <tr class="cart-table__row" style="background-color: #ff6801;">
                                    <th class="cart-table__column cart-table__column--product">Product Name</td>
                                    <th class="cart-table__column cart-table__column--pricee">Product Price</td>
                                    <th class="cart-table__column cart-table__column--details" align="center">Product Details</td>
                                    <th class="cart-table__column cart-table__column--image">Product Image</td>
                                    <th class="cart-table__column cart-table__column--Remove">Delete</td>
                                    <th class="cart-table__column cart-table__column--Update">Update</td>
                                </tr>
                            </thead>
                            
                            @foreach($addproducts as $product)
                            
                            <tbody class="cart-table__body view_products_table_body">
                                <tr class="cart-table__row">
                                    <td class="cart-table__column cart-table__column--product" width="200" align="center">{{ $product->product_name }}</td>
                                    <td class="cart-table__column cart-table__column--pricee " width="150" align="center">{{$product->product_price }}</td>
                                    <td class="cart-table__column cart-table__column--details" width="500"> {{ $product->product_details }}</td>
                                    <td class="cart-table__column cart-table__column--image" width="100" align="center"><img src={{ $product->file_name }}></td>

                                    <td class="cart-table__column cart-table__column--delete" align="center"><a href="/deleteProduct/{{$product->id}}"><i class="fa-solid fa-trash-can delete-icon fs-3"></i></a></td>
                                    <td class="cart-table__column cart-table__column--update" align="center"><a href="/updateproduct/{{$product->id}}"><i class="bi bi-arrow-repeat fs-3"></i></a></td>

                                </tr>
                            @endforeach 
                            
                            </tbody>
                        </table>

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