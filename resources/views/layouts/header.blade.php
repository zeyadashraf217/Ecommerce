<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<header>
    <div class="container-fluid background-adjust">

                   {{-- GREY NAVBAR --}}
        <div class="container fluid ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
                <div class="container-fluid">

                  <p class="navbar-text margin-free">Free shipping for orders over 75$</p>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav offset-5">
                      <li class="nav-item ps-5 blue-hover">
                        @if(Auth::user())
                        <a class="nav-link active" aria-current="page" href="#">My Account</a>
                        @else
                        <a class="nav-link active" aria-current="page" href="login">Login</a>
                        @endif
                      </li>
                      <li class="nav-item ps-5 blue-hover ">
                        <a class="nav-link active" href="#">Wishlist</a>
                      </li>
                      <li class="nav-item ps-5 blue-hover">
                        <a class="nav-link active" href="#">Currency:usd</a>
                      </li>
                      <li class="nav-item ps-5 mycart">
                        <a class="nav-link active mycart " href="#" ><i class="fa-solid fa-cart-shopping"></i>My Cart</a>
                      </li>
                      <li></li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

                {{-- SearchBar --}}
                <div class="input-group rounded searchbar d-flex justify-content-center container">
                    <form action="" class="w-50">
                    <input type="search" class="form-control rounded-pill" placeholder="Search here what you need" aria-label="Search" aria-describedby="search-addon" />
                    </form>


                </div>
</div>




</header>

<div>
    @yield('content')
</div>

<footer>
    <div class="container-fluid background-footer" id="Footer">
        <div class="container-fluid background-footer">

            <div class="row py-5">
                <div class=" col-12 pt-5">
                    <div class="row">

                        <div class="col-xl-2 col-sm-6 col-12 flex-column col-lg-6 px-lg-5 ms-sm-3 ms-0 pb-3 pb-sm-0 ">
                            <div class="font-white h5">
                                Shops
                            </div>
                            <div class="pb-2 pt-4"><a href="" class="decoration footer-links">New in</a>
                            </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">women</a> </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">men</a>
                            </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">Schuhe shoe</a> </div>
                            <div><a href="" class="decoration footer-links">Top brands</a> </div>
                        </div>

                        <div class="col-xl-2 col-sm-6 col-12 col-lg-6 flex-column px-lg-5 ms-sm-3 ms-0 pb-3 pb-sm-0 offset-1">
                            <div class="font-white h5">
                                Information
                            </div>
                            <div class="pb-2 pt-4"><a href="" class="decoration footer-links">About us</a>
                            </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">Customer Service</a> </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">New Collection</a>
                            </div>
                            <div class="pb-2"><a href="" class="decoration footer-links">Best Sellers</a> </div>
                            <div><a href="" class="decoration footer-links">Blog</a> </div>
                        </div>

                        <div class="col-xl-2 col-sm-6 col-12 col-lg-6 flex-column ms-sm-5 px-lg-5 pb-3 pb-sm-0">
                            <div class="font-white h5">
                                Customer Service
                            </div>
                            <div class="pb-2 pt-4"><a href="#" class="decoration footer-links">Search Terms</a>
                            </div>
                            <div class="pb-2"><a href="#" class="decoration footer-links">Advanced Search</a>
                            </div>
                            <div class="pb-2"><a href="#" class="decoration footer-links">Orders and returns</a> </div>
                            <div class="pb-2"><a href="#" class="decoration footer-links">RSS</a> </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-sm-6 col-12 px-xl-5 flex-column">
                            <div class="font-white h5">
                                Newsletter
                            </div>
                            <div class="pb-2 pt-4"><a href="#" class="decoration footer-links">Sign up for newsletter</a> </div>
                            <div class="pb-2">
                                <form action="" class="w-50">
                                <input type="search" class="form-control rounded-pill" placeholder="Type your email" aria-label="Search" aria-describedby="search-addon" />
                                </form>
                            </div>
                            <div class="pb-2 pt-2"><button type="button" class="btn btn-primary btn-lg w-50">Subscribe</button>                            </div>
                        </div>

                    </div>


                </div>


            </div>

        </div>

    </div>


        <div class="footer-font font-smaller background-black text-light">
        <span class="offset-1">    © 2020 Fashion. Template Made by <span class="text-white font-larger fw-bolder">Leo</span>. </span>
        </div>


</footer>
</body>
</html>
