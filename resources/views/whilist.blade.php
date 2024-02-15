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
    <title>ONLINE SHOP - My Whislist</title>
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
            <a style="margin-right:100px; text-decoration:none; color:white" class="drop" href="{{ route('shop') }}"><i style="margin-right:5px" class="fa-solid fa-shop"></i>Shop</a> 
          </div>
        </div>
      </nav>

      <div style="background-color:white !important;" class="d-flex justify-content-between py-3">
        <h5 style="margin-left:110px; color:#ffd000">My Account  <span style="color:black"> / Whishlist</span></h5>
       <img style="margin-left: 1000px;" src="images/user.png" width="40px;" alt="">  <h5 style="margin-right:90px;" class="mt-1">{{ Auth::User()->name }}</h5>

      </div>



      <div class="container mt-5 d-flex justify-content-between">
        <div>
        <a style="padding-right:90px;" class="btn btn-dark border-0 p" href="{{ url('/myprofile') }}"><i style="margin-right:10px;" class="fa-solid fa-user"></i>My Profile</a>
        <br>
        <a style="padding-right:103px; " class="btn btn-dark border-0 mt-2 p" href="{{ route('myorder') }}"><i style="margin-right:10px;" class="fa-solid fa-cart-shopping"></i>My Cart</a>
        <br>
        <a style="padding-right:106px; background-color:#ffd000; color:black" class="btn btn-dark border-0 mt-2 p" href="{{ route('whishlist') }}"><i style="margin-right:10px;" class="fa-solid fa-heart"></i>Wishlist</a>
        <br>
        <a style="padding-right:39px; " class="btn btn-dark border-0 mt-2 p" href="{{ route('changepassword') }}"><i style="margin-right:10px;" class="fa-solid fa-lock"></i>Change Password</a>
        </div>

        <div class="card mb-5" style="width: 60rem;">
          <div class="card-body">
            
            <h4 class="card-title">Favourite Orders</h4>
          <hr>

            <div class="input-group mt-4">
                <img src="images/online-watch.png" width="150px;" alt="">
                <div class="card-body">
                    <h5 style="cursor: pointer" class="card-title  lo">TH Smart city  Watch</h5> 
                    <h6 class="card-subtitle text-muted">$79.00</h6>                                     
                </div>

                <a style="height: 100%; margin-right:20px" class="btn btn-outline-danger mt-3" href=""><i style="margin-right:10px;" class="fa-solid fa-trash"></i>Remove</a>
            </div>

<hr>


             <div class="input-group mt-4">
                 <img style="margin-right: 20px; margin-left: 28px;" src="images/online-watch4.png" width="100px;" alt="">
                 <div class="card-body">
                     <h5 style="cursor: pointer" class="card-title  lo">TH Smart city  Watch</h5> 
                     <h6 class="card-subtitle text-muted">$88.00</h6>                                     
                 </div>

                 <a style="height: 100%; margin-right:20px" class="btn btn-outline-danger mt-3" href=""><i style="margin-right:10px;" class="fa-solid fa-trash"></i>Remove</a>
             </div>

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
                      <h2 class="card-title text-light" style="color:#ffd000 !important;">My Account</h2>
                      @if (Route::has('login'))
                      <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                          @auth
                              <a style="text-decoration: none; color:white" href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  forgot">Home</a>
                          @else
                              <a style="text-decoration: none; color:white" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  drop">Log in</a><br>
          
                              @if (Route::has('register'))
                                  <a style="text-decoration: none; color:white" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  drop">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif
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