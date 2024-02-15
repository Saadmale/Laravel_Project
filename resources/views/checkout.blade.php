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
    <title>ONLINE SHOP - Check Out</title>
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
        <h5 style="margin-left:130px; color:#ffd000">Home  <span style="color:#ffd000"> <span style="color: black">/</span>  Shop </span><span style="color: black"> / Checkout</span></h5>
      </div>

<div class="container mt-5 mb-3 d-flex justify-content-between">

     <h3>SHIPPING ADDRESS</h3>
     <h3 style="margin-right: 170px">ORDER SUMMERY</h3>

</div>


<div class="container mt-3 d-flex justify-content-between mb-5">

    <div style="height: 100%" class="card p-4 shadow-lg" style="width: 50rem;">
      
        <form action="{{ route('checkcard') }}" method="POST">
          @csrf
        <div class="card-body">

           <input type="text" value="{{ old('first') }}" class="form-control @error('first') is-invalid @enderror" placeholder="First Name" name="first" id="">
           @error('first')
           <span class="text-danger">
            {{ $message }}
           </span>
               
           @enderror
           <input type="text" value="{{ old('last') }}" class="form-control mt-4 @error('last') is-invalid @enderror" placeholder="Last Name" name="last" id="">
           @error('last')
           <span class="text-danger">
            {{ $message }}
           </span>
               
           @enderror
           <input type="email" value="{{ old('email') }}" class="form-control mt-4 @error('email') is-invalid @enderror" placeholder="Email" name="email" id="">
           @error('email')
           <span class="text-danger">
            {{ $message }}
           </span>
               
           @enderror
           
           <input value="{{ old('country') }}" class="form-control mt-4 @error('country') is-invalid @enderror" name="country" placeholder="Enter Your Country Name"> 
          @error('country')
          <span class="text-danger">
           {{ $message }}
          </span>
              
          @enderror

          <textarea value="{{ old('address') }}" class="form-control mt-4 @error('address') is-invalid @enderror" name="address" placeholder="Address" cols="30" rows="4"></textarea>
          @error('address')
          <span class="text-danger">
           {{ $message }}
          </span>
              
          @enderror

          <input type="text"  class="form-control mt-4" placeholder="Apartment, suite, unit, etc. (optional)" name="" id="">

          <div class="row mt-4">
            <div class="col">
              <input type="text" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="City" aria-label="First name">
              @error('city')
              <span class="text-danger">
               {{ $message }}
              </span>
                  
              @enderror
            </div>
            <div class="col">
              <input type="text" value="{{ old('state') }}" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State" aria-label="Last name">
              @error('state')
              <span class="text-danger">
               {{ $message }}
              </span>
                  
              @enderror
            </div>

            <div class="col">
                <input type="text" value="{{ old('zip') }}" class="form-control @error('zip') is-invalid @enderror" name="zip" placeholder="Zip" aria-label="Last name">
                @error('zip')
                <span class="text-danger">
                 {{ $message }}
                </span>
                    
                @enderror
              </div>
          </div>

          <input type="text" value="{{ old('mobilenumber') }}" class="form-control mt-4 @error('mobilenumber') is-invalid @enderror" placeholder="Mobile No." name="mobilenumber" id="">
          @error('mobilenumber')
          <span class="text-danger">
           {{ $message }}
          </span>
              
          @enderror

          <textarea class="form-control mt-4" name="" placeholder="Order Notes (optional)" cols="30" rows="3"></textarea>
        </div>
      </div>


      
    <div style="height: 100%; background-color:transparent;" class="card p-3 border-0" style="width: 30rem;">
        <div class="card-body">
         <table class="table table">
          <tr style="background-color: #ffd000; color:white;">
            <th>Title</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
          @foreach($data as $data)
          <tr>
            <td>{{ $data->title }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price }}</td>
            <td></td>
          </tr>
          @endforeach
         </table>

          
        
      </div>
      
      <hr>


      <div style="width:400px;" class="card p-2 shadow-lg mt-4 container" style="width: 25rem; height:100%;">
        <div class="card-body">
            <h4>Payment Detail</h4>
           
                <label class="mt-2" for="">Card Number</label>
                <input  type="text" value="{{ old('cardnumber') }}" class="form-control mt-2 @error('cardnumber') is-invalid @enderror" name="cardnumber" placeholder="Valid Card Number" name="" id="">
                @error('cardnumber')
                <span class="text-danger">
                 {{ $message }}
                </span>
                    
                @enderror

                <div class="row mt-2">
                    <div class="col">
                        <label class="mb-2" for="">Expiry Date</label>
                      <input  type="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="MM/YYYY" aria-label="First name">
                      @error('date')
                      <span class="text-danger">
                       {{ $message }}
                      </span>
                          
                      @enderror
                    </div>
                    <div class="col">
                        <label class="mb-2" for="">CVV Code</label>
                      <input type="text" value="{{ old('code') }}" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="123" aria-label="Last name">
                      @error('code')
                      <span class="text-danger">
                       {{ $message }}
                      </span>
                          
                      @enderror
                    </div>
                </div>
      </div>
      <button style="submit" class="btn btn-dark d-grid mx-3 mb-3 mt-3 border-0  p" href="">Pay Now</button>
    </form>

      
     

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
              <a style="text-decoration: none; color:white" class="drop" href="{{ url('/about') }}">About</a><br>
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