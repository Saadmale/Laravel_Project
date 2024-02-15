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
    <title>ONLINE SHOP - Home</title>
</head>
<body>
    <div class="container d-flex justify-content-between mt-4">
            <h1 style="color: #ffd000; background-color:black;  padding-left:10px;">ONLINE <span style="color: black; background-color:#e9ecef;"> &nbsp SHOP</span> </h1>
            <a style="text-decoration: none; color:black; margin-left:580px;" class="h4  account" href="{{ route('myprofile') }}">My Account</a>
  
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
           <a style="color:white" href="{{ url('/cartcheck') }}"><i style="color:white; margin-right:110px;" class="fa-solid fa-cart-shopping  drop"></i>Shop</a> 
          </div>
        </div>
      </nav>

      <div style="width: 100%; height: 400px;" id="carouselExampleControls" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner shadow-lg">
          <div  class="carousel-item active">
            <img style="height: 450px;" src="images/online-shop-banner.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item shadow-lg">
            <img style="height: 450px;" src="images/online-shop-banner1.jpg"class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item shadow-lg">
            <img style="height: 450px;" src="images/online-shop-banner2.jpg"class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <div  class="container mt-5 mb-5 d-flex justify-content-between">


        <div class="card mt-5 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <h2><i style="width: 10%; color:#ffd000" class="fa-solid fa-check"></i></h2>
                    <h4 style="margin-right: 10px;" class="card-title">Quality Product</h4>
                </div>             
            </div>
        </div>


        <div class="card mt-5 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <h2><i style="color: #ffd000" class="fa-solid fa-truck-fast"></i></h2>
                    <h4 style="margin-right: 10px;" class="card-title">Free Shipping</h4>
                </div>             
            </div>
        </div>

        <div class="card mt-5 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <h2><i style="color:#ffd000" class="fa-solid fa-arrow-right-arrow-left"></i></h2>
                    <h4 style="margin-right: 10px;" class="card-title">14-Day Return</h4>
                </div>             
            </div>
        </div>

        <div class="card mt-5 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <h2><i style="width: 10%; color:#ffd000" class="fa-solid fa-check"></i></h2>
                    <h4 style="margin-right: 25px;" class="card-title">24/7 Support</h4>
                </div>             
            </div>
        </div>

      </div>

      <div class="container mt-5 mb-5">
        <h3 class="mt-5">CATEGORIES</h3>
        <hr>
      </div>
      
      <div class="container mt-5 mb-5 d-flex justify-content-between">
         
    <div class="card mt-3 border-0" style="width: 18rem;">
        <div class="card-body shadow-lg">
            <div class="container d-flex justify-content-between">
                <img src="images/men-jaket.png" width="70px;" alt="">
                <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
            </div>             
        </div>
    </div>


    <div class="card mt-3 border-0" style="width: 18rem;">
        <div class="card-body shadow-lg">
            <div class="container d-flex justify-content-between">
                <img src="images/men-jaket4.png" width="70px;" alt="">
                <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
            </div>             
        </div>
    </div>


    <div class="card mt-3 border-0" style="width: 18rem;">
        <div class="card-body shadow-lg">
            <div class="container d-flex justify-content-between">
                <img src="images/men-jaket.png" width="70px;" alt="">
                <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
            </div>             
        </div>
    </div>


    <div class="card mt-3 border-0" style="width: 18rem;">
        <div class="card-body shadow-lg">
            <div class="container d-flex justify-content-between">
                <img src="images/men-jaket4.png" width="70px;" alt="">
                <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
            </div>             
        </div>
    </div>



      </div>





      <div class="container mt-5 mb-5 d-flex justify-content-between">
         
        <div class="card mt-3 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <img src="images/men-jaket.png" width="70px;" alt="">
                    <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
                </div>             
            </div>
        </div>
    
    
        <div class="card mt-3 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <img src="images/men-jaket4.png" width="70px;" alt="">
                    <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
                </div>             
            </div>
        </div>
    
    
        <div class="card mt-3 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <img src="images/men-jaket.png" width="70px;" alt="">
                    <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
                </div>             
            </div>
        </div>
    
    
        <div class="card mt-3 border-0" style="width: 18rem;">
            <div class="card-body shadow-lg">
                <div class="container d-flex justify-content-between">
                    <img src="images/men-jaket4.png" width="70px;" alt="">
                    <h4 style="margin-right: 25px; color:#ffd000" class="card-title mt-4">100 Product</h4>
                </div>             
            </div>
        </div>   
          </div>


          
      <div class="container mt-5 mb-5">
        <h3 class="mt-5">FEATURED PRODUCTS</h3>
        <hr>
      </div>

      <div class="container d-flex justify-content-between mt-5 mb-5">

        <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>

      </div>





      <div class="container d-flex justify-content-between mt-5 mb-5">

        <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:RED"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>


          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>

      </div>

      <div class="container mt-5 mb-5">
        <h3 class="mt-5">LATEST PRODUCTS</h3>
        <hr>
      </div>


      <div class="container d-flex justify-content-between mt-5 mb-5">

        <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

      </div>



      <div class="container d-flex justify-content-between mt-5 mb-5">

        <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
            </div>
          </div>

          <div class="card border-0 shadow-lg" style="width: 14rem;">
            <img src="images/online-watch2.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
             <h6 style="text-align: center">Dummy Product Title</h6>
             <h4 style="text-align: center; color:green">150$  <span style="font-size: 15px; color:red"><s>300$</s></span></h4>
             
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
                  <a style="text-decoration: none; color:white" class="drop" href="{{ url('/contact') }}">Contact Us</a><br>
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