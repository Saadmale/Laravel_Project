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
    <title>ONLINE SHOP - Cart</title>
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
           <a href=""><i style="color:white; margin-right:110px;" class="fa-solid fa-cart-shopping  drop"></i></a> 
          </div>
        </div>
      </nav>

      <div style="background-color:white !important;" class="py-3">
        <h5 style="margin-left:130px; color:#ffd000">Home  <span style="color:#ffd000"> <span style="color: black">/</span>  Shop </span><span style="color: black"> / Cart</span></h5>
      </div>

      <div class="container d-flex justify-content-between mt-5 mb-5">

        <table style="width: 900px; background:white; height:100px;" class="table shadow-lg">
            <tr style="background-color: #ffd000; color:white; border-bottom:3px solid black">
                <th class="text-center">Items</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
            <tr>
                <td>
                <div class="d-flex justify-content-between">
                    <img style="margin-left:50px" src="images/online-watch.png" width="70px;" alt=""> <h6 style="margin-right:150px;" class="mt-3"> Product Name Goes Here</h6>
                </div>               
                </td>
                <td><h6 class="mt-3">100$</h6></td>
                <td>                   
                    <button class="btn btn-dark" id="minus"><i class="fa-solid fa-minus"></i></button>
                        <input class="mt-2 border-0" style="width:30px; text-align:center" type="" id="quantity" name="quantity" min="1" value="1">
                    <button class="btn btn-dark" style="" id="plus"><i class="fa-solid fa-plus"></i></button>
                </td>
                <td><h6 class="mt-3">100$</h6></td>
                <td>
                    <a class="btn btn-danger mt-2" href=""><i class="fa-solid fa-xmark"></i></a>
                </td>
            </tr>




            <tr>
                <td>
                <div class="d-flex justify-content-between">
                    <img style="margin-left:50px" src="images/online-watch.png" width="70px;" alt=""> <h6 style="margin-right:150px;" class="mt-3"> Product Name Goes Here</h6>
                </div>               
                </td>
                <td><h6 class="mt-3">100$</h6></td>
                <td>                   
                    <button class="btn btn-dark" id="minus"><i class="fa-solid fa-minus"></i></button>
                        <input class="mt-2 border-0" style="width:30px; text-align:center" type="" id="quantity" name="quantity" min="1" value="1">
                    <button class="btn btn-dark" style="" id="plus"><i class="fa-solid fa-plus"></i></button>
                </td>
                <td><h6 class="mt-3">100$</h6></td>
                <td>
                    <a class="btn btn-danger mt-2" href=""><i class="fa-solid fa-xmark"></i></a>
                </td>
            </tr>
        </table>




        <div class="card shadow-lg" style="width: 22rem;">
            <div class="card-body">
              <h3 class="card-title">Cart Summery</h3><br>
              <h5 style="margin-left:20px;">Subtotal <span style="float: right; margin-right:40px; font-size:18px;">200$</span></h5>
              <h5 style="margin-left:20px;">Shipping <span style="float: right; margin-right:40px; font-size:18px;">20$</span></h5>
              <div style="width: 235px; margin-left:30px;">  <hr>  </div>

              <h4 style="margin-left:20px;">Total <span style="float: right; margin-right:40px; font-size:25px;">220$</span></h4>
              <br>
              <br>
              <a class="btn btn-dark d-grid border-0 mb-2 d" href="{{ url('/loginpage') }}">Proceed to Checkout</a>
            </div>
          </div>
      </div>


  <div  class="mt-3 mb-5">
    <div style="width: 350px; margin-left:1060px;" class="input-group">
        
        <input class="form-control" type="text" placeholder="Coupon Code" name="" id="">
        <a class="btn btn-dark border-0  d" href="">Apply Coupon</a>
    
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





{{--  Jave Script For Increase or Decrease Fro Quantity Input  --}}

      <script>
                const minusButton = document.getElementById('minus');
                const plusButton = document.getElementById('plus');
                const quantityInput = document.getElementById('quantity');

                minusButton.addEventListener('click', () => {
                  const currentValue = parseInt(quantityInput.value, 10);
                  if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                  }
                });

                plusButton.addEventListener('click', () => {
                  const currentValue = parseInt(quantityInput.value, 10);
                  quantityInput.value = currentValue + 1;
                });
      </script>
</body>
</html>