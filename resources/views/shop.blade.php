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
    <title>ONLINE SHOP - Shop</title>
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

.box:hover{
  box-shadow: 5px 5px 100px #adb5bd !important;
  transition: 0.5s;
}

  </style>
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

      <div style="background-color:white !important;" class="py-3">
        <h5 style="margin-left:130px; color:#ffd000">Home  <span style="color:black"> / Shop</span></h5>
      </div>


      <div class="container d-flex justify-content-between mt-5">
        <h3>CATEGORIES</h3>

        <div class="dropdown">
            <button class=" dropdown-toggle border-0 bg-light" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Sorting
            </button>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item drop" href="#">Latest</a></li>
              <li><a class="dropdown-item drop" href="#">Low Price</a></li>
              <li><a class="dropdown-item drop" href="#">High Price</a></li>
            </ul>
          </div>


      </div>

<div class="container mt-3 d-flex justify-content-between">

    <div class="card shadow-sm" style="width: 14rem; height:180px">
        <div class="card-body">
          
            <div class="btn-group dropend">
                <button type="button" class="dropdown-toggle border-0 bg-light h6  drop" data-bs-toggle="dropdown" aria-expanded="false">
                  Electronics
                </button>
                <ul class="dropdown-menu bg-dark">
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Mobile</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Tablets</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Laptops</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Watch</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Headphones</li></a>
                </ul>
              </div>

              <div class="btn-group dropend mt-2">
                <button type="button" class="dropdown-toggle border-0 bg-light h6  drop" data-bs-toggle="dropdown" aria-expanded="false">
                  Men's Fashion
                </button>
                <ul class="dropdown-menu bg-dark">
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Shoes</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Watch</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">T - Shirt</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Jakets</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Hates</li></a>
                </ul>
              </div>


              <div class="btn-group dropend mt-2">
                <button type="button" class="dropdown-toggle border-0 bg-light h6  drop" data-bs-toggle="dropdown" aria-expanded="false">
                  Women's Fashion
                </button>
                <ul class="dropdown-menu bg-dark">
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Shoes</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Jewleries</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Lipstiks</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Nail Polish</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Clothes</li></a>
                </ul>
              </div>


              <div class="btn-group dropend mt-2">
                <button type="button" class="dropdown-toggle border-0 bg-light h6  drop" data-bs-toggle="dropdown" aria-expanded="false">
                 Applicances
                </button>
                <ul class="dropdown-menu bg-dark">
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Mobile</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Tablets</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Laptops</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Watch</li></a>
                  <a style="text-decoration: none; color:black" href=""><li style="margin-left:30px;" class="item-link  text-light  lo">Headphones</li></a>
                </ul>
              </div>
        </div>

        <hr>


        <div class="">
            <h3 >BRAND</h3>
        </div>
    
        <div class="card shadow-sm" style="width: 14rem; height:150px">
            <div class="card-body">
              
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      <h6>Canon</h6>
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <h6>Sony</h6>
                    </label>
                  </div>



                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <h6>Oppo</h6>
                    </label>
                  </div>



                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <h6>Vivo</h6>
                    </label>
                  </div>
            </div>
            <hr>
            <div class="">
                <h3 >PRICE</h3>
            </div>
        
            <div class="card shadow-sm mb-5" style="width: 14rem; height:150px">
                <div class="card-body">
                  
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          <h6>50$ - 100$</h6>
                        </label>
                      </div>
    
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <h6>100$ - 150$</h6>
                        </label>
                      </div>
    
    
    
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <h6>150$ - 300$</h6>
                        </label>
                      </div>
    
    
    
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <h6>300$ - 500$</h6>
                        </label>
                    </div>
            </div>
            </div>            
      </div>
    </div>

      

<div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
        <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
        <div class="card-body">
         <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}">Dummy Product Title</a>
         <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
         
        </div>

        <hr>

<div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
    <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
    <div class="card-body">
        <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
     <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
     
    </div>
  </div>
      </div>
      <div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
        <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
        <div class="card-body">
            <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
         <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
         
        </div>

        <hr>

<div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
    <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
    <div class="card-body">
        <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
     <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
     
    </div>
  </div>
      </div>



      <div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
        <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
        <div class="card-body">
            <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
         <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
         
        </div>

<hr>

<div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
    <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
    <div class="card-body">
        <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
     <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
     
    </div>
  </div>


      </div>



      <div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
        <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
        <div class="card-body">
            <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
         <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
         
        </div>

<hr>
        <div class="card border-0 shadow-sm  box" style="width: 14rem; height:300px">
            <img src="/images/online-watch.png" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <a style="text-align: center; text-decoration:none; color:black" class="h6  drop" href="{{ route('productdetail') }}"">Dummy Product Title</a>
             <h4 style="text-align: center; color:green">100$  <span style="font-size: 15px; color:red"><s>200$</s></span></h4>
             
            </div>
          </div>
      </div>

   </div>
</div>


</body>
</html>