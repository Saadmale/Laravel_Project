<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
      body{
    background-color: #e9ecef !important;
}

.account:hover{
    color: #ffd000 !important;
}

.drop:hover{
    color: #ffd000 !important;
}

.li:hover{
    color: #ffd000 !important;
    background-color: #343a40 !important;
}

.lo:hover{
    color: #ffd000 !important;
}

.d:hover{
    background-color: #ffd000 !important;
}

.forgot:hover{
    color:#ffd000 !important;
}

.p:hover{
    background-color: #ffd000 !important;
    color:black !important;
}

.logout:hover{
    background-color: red !important;
}
    </style>
</head>
<body>


    <div class="container d-flex justify-content-between mt-4">
        <h1 style="color: #ffd000; background-color:black;  padding-left:10px;">ONLINE <span style="color: black; background-color:#e9ecef;"> &nbsp SHOP</span> </h1>
        

    <div class="input-group mb-3 col">
        <input style="margin-left:20px;" type="search" class="form-control" placeholder="Search For Products" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2"><i style="color: #ffd000" class="fa-solid fa-magnifying-glass"></i></span>
      </div>           
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-dark  mt-3">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li style="margin-left:100px;" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light  drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Eloctronics
            </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-light li" href="#">Mobile</a></li>
                <li><a class="dropdown-item text-light li" href="#">Tablets</a></li>
                <li><a class="dropdown-item text-light li" href="#">Laptops</a></li>
                <li><a class="dropdown-item text-light li" href="#">Shoes</a></li>
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
   
  

        <main class="py-4">
            @yield('content')
        </main>
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
                  <a style="text-decoration: none; color:white" class="drop" href="">About</a><br>
                  <a style="text-decoration: none; color:white" class="drop" href="">Contact Us</a><br>
                  <a style="text-decoration: none; color:white" class="drop" href="">Privacy</a><br>
                  <a style="text-decoration: none; color:white" class="drop" href="">Terms & Condition</a><br>
                  <a style="text-decoration: none; color:white" class="drop" href="">Refuned Policy</a> 
                </div>
              </div>


              <div class="card bg-dark" style="width: 18rem;">
                <div class="card-body">
                  <h2 class="card-title text-light" style="color:#ffd000 !important;">My Aaccount</h2>
                  @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a style="text-decoration: none; color:white" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  drop">Log in</a><br>

                        @if (Route::has('register'))
                            <a style="text-decoration: none; color:white" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500  drop">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                  <a style="text-decoration: none; color:white" class="drop" href="">My Orders</a>
                
                  
                </div>
              </div>



        </div>
      </div>

      <div style="background-color: #ffd000" class="py-2">
        <h6 style="text-align: center;">@ Copyright 2024 Amazing Shop Alright reserved</h6>
      </div>
</body>
</html>
