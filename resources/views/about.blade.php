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
    <title>ONLINE SHOP - My About</title>
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
        <h5 style="margin-left:130px; color:#ffd000">Home  <span style="color:black"> / About</span></h5>
      </div>



<div class="container mt-4 mb-4 ">
    <h1>About Us</h1>
</div>

<div class="container mt-5 mb-5">

   <table style="width: 800px;" class="table table-striped shadow-lg">
    <tr style="background-color: #080703; color:white;">
        <th>Profile</th>
        <th>Name</th>
        <th>User Name</th>
        
        <th>Age</th>
        <th>Designation</th>
    </tr>
    <tr style="background-color: white">
        <td>
            <img style="border-radius: 30px;" class="shadow-lg" src="images/saad's profile.PNG" width="50px;" alt="">
        </td>
        <td><h5>Saad</h5></td>
        <td><h5>Muhammad Saad</h5></td>
        
        
        <td><h5>16 Year</h5></td>
        <td><h5>Programmer</h5></td>
    </tr>
   </table>

</div>


<div class="container mt-4 mb-5">

   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ab excepturi sed sunt? Expedita excepturi harum amet necessitatibus facere consectetur quisquam provident fugit qui eligendi, ipsa atque dolorum dicta eos.
    adipisicing elit. Iste ab excepturi sed sunt? Expedita excepturi harum amet necessitatibus facere consectetur quisquam provident fugit qui eligendi, ipsa atque dolorum dicta eos.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores at dolorum iure quam ad soluta, deserunt, quod sint nam autem labore nihil commodi, minus similique. Eius repellat tempore optio numquam expedita ipsum? Quas, suscipit!
   </p>
   <br>
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste ab excepturi sed sunt? Expedita excepturi harum amet necessitatibus facere consectetur quisquam provident fugit qui eligendi, ipsa atque dolorum dicta eos.
    adipisicing elit. Iste ab excepturi sed sunt? Expedita excepturi harum amet necessitatibus facere consectetur quisquam provident fugit qui eligendi, ipsa atque dolorum dicta eos.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores at dolorum iure quam ad soluta, deserunt, quod sint nam autem labore nihil commodi, minus similique. Eius repellat tempore optio numquam expedita ipsum? Quas, suscipit!
   </p>

</div>


<div style="background-color: white; border-radius:50px" class="container mb-5 p-5 shadow-lg">
    <h6>HTML</h6>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">98%</div>
      </div>

      <h6 class="mt-3">CSS</h6>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">90%</div>
      </div>


      <h6 class="mt-3">Bootstrap</h6>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">95%</div>
      </div>


      <h6 class="mt-3">Java - Script</h6>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">75%</div>
      </div>


      <h6 class="mt-3">PHP</h6>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">80%</div>
      </div>


      <h6 class="mt-3">Laravel</h6>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">90%</div>
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