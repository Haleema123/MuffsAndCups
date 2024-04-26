<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script src="js/main.js"></script>
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
     </header>
    <!--End of Navbar  -->

    <div class="dashboard-container">
      <div class="container-fluid mt-3" style="background-color: white">
        <div class="row">
          <aside class="aside-Dashboard col-lg-2" style="height: 100vh; background-color: black">
            <ul>
              <li>
                <a href="{{('userDashboard')}}"><i class="fa-solid fa-circle-info"></i> Information</a>
              </li>
              <li>
                <a href="{{('inProcess')}}"><i class="fa-solid fa-spinner"></i> In Process</a>
              </li>
              <li>
                <a href="{{('receivedProducts')}}"><i class="fa-solid fa-hand-holding-heart"></i> Received Products</a>
              </li>
              <li>
                <a href="{{('login')}}"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
              </li>
            </ul>
          </aside>

          <section class="col-lg-7 offset-lg-1 p-5">
            <h2 class="mb-4">Information</h2>

            <form action="">
              <div class="user-information">

                <label for="formGroupExampleInput1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Name" value="User"
                  readonly />

                <label for="formGroupExampleInput2" class="form-label mt-2">Email</label>
                <input type="email" class="form-control" name="edit-email" id="email" placeholder="mail@webiste.com"
                  value="user@gmail.com" readonly />

                <label for="formGroupExampleInput3" class="form-label mt-2">Password</label>
                <input type="text" class="form-control" id="password" placeholder=" min. 8 Characters"
                  value="user123" readonly />

                <label for="formGroupExampleInput4" class="form-label mt-2">Phone Number</label>
                <input type="tel" class="form-control" id="phone-number" placeholder="03xx-xxxxxxx" />

                <div class="info-buttons mt-4 d-flex ">
                  <div class="Edit-btn info-btn" style="width: 30%;">
                    <input type="button" class="form-control" id="formGroupExampleInput" placeholder="mail@webiste.com"
                      value="Edit" onclick="editInfo();" />
                  </div>

                  <div class="save-btn info-btn " style="width: 30%;">
                    <input type="submit" class="form-control" value="Save Changes" />
                  </div>

                </div>

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>


  <script>

  </script>



  <!-- Fonts-Awesome  -->
  <script src="https://kit.fontawesome.com/8269cfc31d.js" crossorigin="anonymous"></script>

</body>

</html>