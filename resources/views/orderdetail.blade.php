<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/online-shop-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONLINE SHOP - My Order</title>
</head>
<body>
    <div class="container d-flex justify-content-between mt-4">
            <h1 style="color: #ffd000; background-color:black">ONLINE <span style="color: black; background-color:#e9ecef;"> &nbsp SHOP</span> </h1>
            <a style="text-decoration: none; color:black; margin-left:580px;" class="h4  account" href="">My Account</a>
  
        <div class="input-group mb-3 col">
            <input style="margin-left:20px;" type="search" class="form-control" placeholder="Search For Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2"><i style="color: #ffd000" class="fa-solid fa-magnifying-glass"></i></span>
          </div>           
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-0 mt-3">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
              <li style="margin-left:100px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light  drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Eloctronics
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-light li" href="#">Mobile</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Tablets</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Laptops</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Air Pods</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Watches</a></li>
                  
                </ul>
              </li>

              <li style="margin-left:30px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Men's Fashion
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-light li" href="#">Shoes</a></li>
                  <li><a class="dropdown-item text-light li" href="#">Watches</a></li>
                  <li><a class="dropdown-item text-light li" href="#">T - Shirt</a></li>
                  <li><a class="dropdown-item text-light li" href="#">Jakets</a></li>
                  <li><a class="dropdown-item text-light li" href="#">Hates</a></li>
              
                </ul>
              </li>

              <li style="margin-left:30px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Women's Fashion
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-light li" href="#">Shoes</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Jewleries</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Lipstiks</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Nail Polish</a></li>
                    <li><a class="dropdown-item text-light li" href="#">Clothes</a></li>
                </ul>
              </li>

              <li style="margin-left:30px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Applicances
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item text-light li" href="#">Action</a></li>
                  <li><a class="dropdown-item text-light li" href="#">Another action</a></li>
                  <li><a class="dropdown-item text-light li" href="#">Something else here</a></li>
                </ul>
              </li>
             
            </ul>
           <a href="{{ url('/cartcheck') }}"><i style="color:white; margin-right:110px;" class="fa-solid fa-cart-shopping  drop"></i></a> 
          </div>
        </div>
      </nav>

      <div style="background-color:white !important;" class="py-3">
        <h5 style="margin-left:130px; color:#ffd000">My Account  <span style="color:black"> / My Order</span></h5>
      </div>



      <div class="container mt-5 d-flex justify-content-between">
        <div>
        <a style="padding-right:90px; " class="btn btn-dark border-0 p" href="{{ url('/myprofile') }}"><i style="margin-right:10px;" class="fa-solid fa-user"></i>My Profile</a>
    <br>
        <a style="padding-right:88px; background-color:#ffd000; color:black" class="btn btn-dark border-0 mt-2 p" href="{{ url('/myorder') }}"><i style="margin-right:10px;" class="fa-solid fa-bag-shopping"></i>My Orders</a>
        <br>
        <a style="padding-right:106px; " class="btn btn-dark border-0 mt-2 p" href="{{ route('whishlist') }}"><i style="margin-right:10px;" class="fa-solid fa-heart"></i>Wishlist</a>
        <br>
        <a style="padding-right:39px; " class="btn btn-dark border-0 mt-2 p" href=" {{ url('/renewpassword')  }}"><i style="margin-right:10px;" class="fa-solid fa-lock"></i>Change Password</a>
        </div>



        <div class="card mb-3 p-3" style="width: 60rem;">
          
            <h4   class="card-title">My Order</h4>
            <hr>

            <div class="container d-flex justify-content-between mt-3 mb-3">

                <div class="card border-0" style="width: 18rem;">
                    <div style="background-color: #e9ecef" class="card-body">
                        <h6 class="card-subtitle text-muted">Order No:</h6>
                        <h5 class="card-title">634892034</h5>                    
                    </div>
                </div>

                <div class="card border-0" style="width: 18rem;">
                    <div style="background-color: #e9ecef" class="card-body">
                        <h6 class="card-subtitle text-muted">Shipping Date:</h6>
                        <h5 class="card-title">10 Oct,2023</h5>                    
                    </div>
                </div>

                <div class="card border-0" style="width: 18rem;">
                    <div style="background-color: #e9ecef" class="card-body">
                        <h6 class="card-subtitle text-muted">Status:</h6>
                        <h5 class="card-title">Awating Delivery</h5>                    
                    </div>
                </div>

                <div class="card border-0" style="width: 18rem;">
                    <div style="background-color: #e9ecef" class="card-body">
                        <h6 class="card-subtitle text-muted">Order Amount:</h6>
                        <h5 class="card-title">$250.00</h5>                    
                    </div>
                </div>


            </div>


            <hr>

        <h4 class="card-title mt-4">Order items (3)</h4>
            <hr>

            <div class="input-group">
                <img src="images/online-watch.png" width="100px;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Cotton florat print Watch × 1</h5> 
                    <h6 class="card-subtitle text-muted">$40.00</h6>                                     
                </div>
            </div>
<hr>

            <div class="input-group">
                <img style="margin-left:15px;" src="images/men-jaket.png" width="80px;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Sude cross body Jacket × 1</h5> 
                    <h6 class="card-subtitle text-muted">$49.00</h6>                                     
                </div>
            </div>

<hr>
            <div class="input-group">
                <img style="margin-left:15px;" src="images/men-jaket4.png" width="80px;" alt="">
                <div class="card-body">
                    <h5 class="card-title">Sweathert Jacket × 1</h5> 
                    <h6 class="card-subtitle text-muted">$39.00</h6>                                     
                </div>
            </div>         
        </div>
      </div>

<div class="container mb-5">

      <div style="margin-left:700px;" class="card mt-3 shadow-sm" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title">Total Order</h5>
<hr>
          <h6 style="margin-left:20px;" class="mt-3">Subtotal <span style="float: right; margin-right:30px;">$128.00</span></h6>

          <h6 style="margin-left:20px;" class="mt-3">Tax <span style="float: right; margin-right:30px;">$0.00</span></h6>

          <h6 style="margin-left:20px;" class="mt-3">Shipping <span style="float: right; margin-right:30px;">$8.00</span></h6>
<hr>
          <h5 style="margin-left:20px;" class="">Total <span style="float: right; margin-right:30px;">$138.00</span></h5>
          
        </div>
      </div>

</div>




<div class="bg-dark py-4">
    <div class="container d-flex justify-content-between mt-3">

        <div class="card bg-dark" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title text-light" style="color:#ffd000 !important;">Get in Touch</h2>
              <h6 class="card-text text-light">No Dolor ipsum accusam no lorem <br> 123 Street New York, USA <br> company@gmail.com <br>0000 1111 0000</h6>
              
            </div>
          </div>


          <div class="card bg-dark" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title text-light" style="color:#ffd000 !important;">Important Links</h2>
              <a style="text-decoration: none; color:white" class="drop" href="{{ route('about') }}">About</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="">Contact Us</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="">Privacy</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="">Terms & Condition</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="">Refuned Policy</a> 
            </div>
          </div>


          <div class="card bg-dark" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title text-light" style="color:#ffd000 !important;">My Aaccount</h2>
              <a style="text-decoration: none; color:white" class="drop" href="{{ url('/loginpage') }}">Login</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="{{ url('/registerpage') }}">Register</a><br>
              <a style="text-decoration: none; color:white" class="drop" href="{{ route('myorder') }}">My Orders</a>
            
              
            </div>
          </div>



    </div>
  </div>

  <div style="background-color: #ffd000" class="py-2">
    <h6 style="text-align: center;">@ Copyright 2024 Amazing Shop Alright reserved</h6>
  </div>
</body>
</html>