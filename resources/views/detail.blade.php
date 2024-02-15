<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONLINE SHOP - Product detail</title>
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
            <a style="text-decoration: none; color:black; margin-left:580px;" class="h4  account" href="">My Account</a>
  
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
            <a style="margin-right:100px; text-decoration:none; color:white" class="drop" href="{{ route('shop') }}"><i style="margin-right:5px" class="fa-solid fa-shop"></i>Shop</a> 
          </div>
        </div>
      </nav>

      <div style="background-color:white !important;" class="py-3">
        <h5 style="margin-left:130px; color:#ffd000">Home  <span style="color:#ffd000"> <span style="color: black">/</span>  Shop </span><span style="color: black"> / Your product name</span></h5>
      </div>


      <div class="container mt-5 d-flex justify-content-between">

        <div style="width:40%; height:100px;" id="carouselExampleInterval" class="carousel slide shadow-sm " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="/images/online-watch.png" width="50px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/online-watch.png"  class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/images/online-watch.png" width="100px;" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



          <div style="margin-right: 50px; background:transparent;" class="card border-0 mb-5" style="width: 18rem; height:100%;">
            <div class="card-body">
              <h1 class="card-title mb-3">Your Product Name Here</h1>
              <h5 class="card-subtitle mb-2 mt-2"><i style="color:#ffd000" class="fa-solid fa-star"></i>
                  <i style="color:#ffd000"  class="fa-solid fa-star"></i>
                    <i style="color:#ffd000"  class="fa-solid fa-star"></i>
                      <i style="color:#ffd000"  class="fa-solid fa-star"></i>
                       <i style="color:#ffd000" class="fa-solid fa-star-half-stroke"></i>
                        <i style="color:#ffd000" class="fa-regular fa-star"></i> &nbsp (99 Reviews) </h5>

                        <h3 style="color:red" class="mt-4"><s>400$</s></h3>
                        <h3 style="color:green">300$</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda tempore  quasi corrupti <br> incidunt  quae cumque ullam quisquam aliquam enim maiores!<br>
                             Harum numquam quod, illum eius hic quam dolore ipsa ipsam!</p>
                             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda tempore  quasi corrupti <br> incidunt  quae cumque ullam quisquam aliquam enim maiores!<br>
                              Harum numquam quod, illum eius hic quam dolore ipsa ipsam!</p>                     
            </div>
<div class="d-grid">
            <a class="btn btn-dark border-0 p" href=""><i style="margin-right:20px;" class="fa-solid fa-cart-shopping"></i>ADD TO CART</a>
</div>
          </div>
      </div>

      <div class="container mt-5 mb-5">
          <a class="btn  d" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Description
          </a>
          <button class="btn d" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Shipping & Returns
          </button>

          <button class="btn d" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Review
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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