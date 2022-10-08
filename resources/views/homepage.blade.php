@extends('layouts.header')
@section('content')
                {{-- Black bar --}}
                <div class=" container-fluid background-black mt-2 d-flex ">
                    <div class=" offset-xl-1 col-2">
                        <p class="h3 text-light mad2">FASHION </p>
                    </div>
                    <div class="offset-xl-2 offset-1 col-1 pt-2 mad ">
                        <a class="text-light decoration text-center mad " href="#">Home</a>
                    </div>
                    <div class="col-1 pt-2 px-3 pl-lg-0 mad">
                        <a class="text-light decoration text-center mad" href="#">Women</a>
                    </div>
                    <div class="col-1 pt-2 px-3 pl-lg-0 mad ">
                        <a class="text-light decoration text-center mad" href="#">Men</a>
                    </div>
                    <div class="col-1 pt-2 px-3 pl-lg-0 mad">
                        <a class="text-light decoration text-center mad" href="#">Footwear</a>
                    </div>
                    <div class="col-lg-1 col-xs-2 pt-2 px-3 pl-lg-0 mad">
                        <a class="text-light decoration text-center mad" href="#">Accessories</a>
                    </div>
                    <div class="col-1 col-xs-2 pt-2 px-3 pl-lg-0 mad">
                        <a class="text-light decoration text-center mad" href="#">Sales</a>
                    </div>
                    <div class="col-1 col-xs-2 pt-2 px-3 pl-lg-0 mad">
                        <a class="text-light decoration text-center mad" href="#">Blog</a>
                    </div>
                </div>


            {{-- Gallery slider --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://img.freepik.com/free-photo/magnificent-woman-long-bright-skirt-dancing-studio-carefree-inspired-female-model-posing-with-pleasure-yellow_197531-11084.jpg?w=2000" class="d-block w-100 " height="400"alt="img1">
                  </div>
                  <div class="carousel-item">
                    <img src="https://fashionmagazine.com/wp-content/uploads/2019/03/2019-03-06-1.jpg" class="d-block w-100 " height="400" alt="img2">
                  </div>
                  <div class="carousel-item">
                    <img src="https://wallpapercave.com/wp/wp3646113.jpg" height="400" class="d-block w-100 " alt="img3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- Hot collection section --}}
            <div class="container py-5">
                <div class="row d-flex">
                    <div class="col-lg-6">
                     <div>   <img src="https://c4.wallpaperflare.com/wallpaper/306/739/633/women-model-fashion-wallpaper-preview.jpg" alt="left top" class="img-fluid"> </div>
                    <div class="font-pink padding-left"><pre>H O T   C O L L E C T I O N</pre> </div>
                    <div class="h1">New Trend For men</div>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos libero sit quia mollitia fugiat alias, sequi sunt atque, aperiam dolor, magni provident dignissimos. Ipsa cupiditate unde labore ut autem.</div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 d-flex flex-column pt-5 pt-lg-0">
                       <div> <img src="https://lh3.googleusercontent.com/XI5kLRxUdWOXIiPQRhxIA25BMFLGDT93nuxKHC_ti_3vr4Y3SnN65N0b-MbPeOmYNPQNPIYNjioxjHT6Nx4mLgIZLQzfGEHJhjFjeVUEY3VRABYZ" class="w-75" alt="right top" height="300"> </div>
                       <div class="pt-5"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyV7ga-KT-0uDcXiKS57DNPCfaTrsjptXfoA&usqp=CAU" class="w-75" alt="right top" height="300"> </div>
                    </div>
                </div>
            </div>


            {{-- Featured items --}}
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 hr-theme-slash-2">
                        <div class="hr-line"></div>
                        <div class="hr-font">Featured items</div>
                        <div class="hr-line"></div>
                      </div>
                </div>
                {{-- Buttons --}}
                <div class="row">
                    <div class="col-12 d-flex flex-row justify-content-center me-lg-5 pe-lg-5">
                        <div><button type="submit" class="btn-hover">All</button> </div>
                        <div><button type="submit" class="btn-hover">Men</button> </div>
                        <div><button type="submit" class="btn-hover active" data-bs-toggle="button" aria-pressed="true">Women</button> </div>
                        <div><button type="submit" class="btn-hover">Kids</button> </div>
                    </div>
                </div>
                {{-- Cards --}}

                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($products as $product )
                    <div class="col">
                      <div class="card h-100 position-relative">
                        <div class="position-absolute top-0 end-0 background-black text-white h4">{{ $product->price }}$</div>
                    <div class="position relative">    <img src="{{ $product->getFirstMediaUrl()  }}" class="card-img-top image-hover" alt="...">
                        <div class="hide">
                            <a href=""> <i class="fa-solid fa-eye fa-2x icon-white"></i></a>
                        </div>
                    </div>
                        <div class="card-body">
                        <h4> {{ $product->name }}</h4>
                          <span> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-regular fa-star"></i></span>
                          <p class="card-text pt-3"><a class="icon-grey"><i class="fa-solid fa-heart  border rounded-circle px-1 py-1"></i> </a>
                            <a class="icon-grey px-3"><i class="fa-solid fa-cart-shopping  border rounded-circle px-1 py-1"></i> </a>
                            <a class="icon-grey"><i class="fa-solid fa-share border rounded-circle px-1 py-1"></i> </a>
                        </p>
                        </div>
                      </div>
                    </div>

                    @endforeach
                  </div>
            </div>
                    {{-- 2 images --}}
            <div class="container-fluid">
                <div class="row row row-cols-1 row-cols-md-2 g-6">
                    <div class="col px-0">
                        <img src="https://i.ytimg.com/vi/4QdG-z8OpAI/maxresdefault.jpg" class="w-100 img-fluid" alt="">
                    </div>
                    <div class="col px-0">
                        <img src="https://i.ytimg.com/vi/iRBztIse99s/maxresdefault.jpg" class="w-100 img-fluid" alt="">
                    </div>

                </div>
            </div>
            {{-- Trending --}}
                       {{-- Featured items --}}
                       <div class="container py-5">
                        <div class="row">
                            <div class="col-12 hr-theme-slash-2">
                                <div class="hr-line"></div>
                                <div class="hr-font">Trending items</div>
                                <div class="hr-line"></div>
                              </div>
                        </div>
                        {{-- Buttons --}}

                        {{-- Cards --}}

                          <div class="row row-cols-1 row-cols-md-4 g-4">
                            @foreach ($random_products as $product )
                            <div class="col">
                              <div class="card h-100 position-relative">
                                <div class="position-absolute top-0 end-0 background-black text-white h4">{{ $product->price }}$</div>
                            <div class="position relative">    <img src="{{ $product->getFirstMediaUrl()  }}" class="card-img-top image-hover" alt="...">
                                <div class="hide">
                                    <a href=""> <i class="fa-solid fa-eye fa-2x icon-white"></i></a>
                                </div>
                            </div>
                                <div class="card-body">
                                <h4> {{ $product->name }}</h4>
                                  <span> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-solid fa-star icon-purple"></i> <i class="fa-regular fa-star"></i></span>
                                  <p class="card-text pt-3"><a class="icon-grey"><i class="fa-solid fa-heart  border rounded-circle px-1 py-1"></i> </a>
                                    <a class="icon-grey px-3"><i class="fa-solid fa-cart-shopping  border rounded-circle px-1 py-1"></i> </a>
                                    <a class="icon-grey"><i class="fa-solid fa-share border rounded-circle px-1 py-1"></i> </a>
                                </p>
                                </div>
                              </div>
                            </div>

                            @endforeach
                        </div>

                            <div class="row text-center pt-3" >
                                <div>
                                 <button type="button" class="btn btn-outline-secondary">Load More</button>
                                </div>

                            </div>
                    </div>

                    {{-- Image with writing --}}
                    <div class="container-fluid image-background pt-2">
                        <div class="row pt-5 text-center"><i class="fa-solid fa-quote-left fa-3x icon-purple"></i></div>
                        <div class="row pt-4 text-white text-center  padding-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis fugiat tenetur minima unde quasi obcaecati cupiditate architecto consequuntur, corporis est tempora voluptatum voluptatem provident, alias at molestias voluptatibus laborum suscipit."</div>
                        <div class="text-center pt-3"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmf_t0n5lwyYU5CnWejetE0uPypbFnaQdNEA&usqp=CAU" alt="" width="100" height="125"></div>
                        <div class="text-center pt-3 text-white fw-bold fs-4">LEO LEO</div>
                        <div class="text-center pt-3 text-white  fs-5 pb-5">Ceo of fashion</div>
                    </div>

                    {{-- Latest Blog Cards --}}
                    <div class="container pt-4">
                        <div class="row">
                            <div class="col-12 hr-theme-slash-2 ps-lg-5">
                                <div class="hr-line"></div>
                                <div class="hr-font">Latest Blog</div>
                                <div class="hr-line"></div>
                              </div>
                        </div>

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card">
                                <img src="https://hips.hearstapps.com/hmg-prod/images/future-of-fashion-thumbs-02-1658168305.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title fs-3">Some Headline Here</h5>
                                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nisi quidem beatae numquam placeat doloribus. Eos, saepe excepturi. Unde nisi asperiores officia quam eaque dolorum mollitia. Eius quos quia voluptatibus?</p>
                                  <button type="button" class="btn btn-outline-secondary">Read More</button>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                  <img src="https://i.guim.co.uk/img/media/b9de96889b5314618961ad00d191d07d9c924435/0_173_5219_3133/master/5219.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=a33ce2992f963546b85c5c611e4342af" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title fs-3">Some Headline Here</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nisi quidem beatae numquam placeat doloribus. Eos, saepe excepturi. Unde nisi asperiores officia quam eaque dolorum mollitia. Eius quos quia voluptatibus?</p>
                                    <button type="button" class="btn btn-outline-secondary">Read More</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col">
                                <div class="card">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBsgPRLOEP65picChfj712yVr_aaB5oj894w&usqp=CAU" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title fs-3">Some Headline Here</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, nisi quidem beatae numquam placeat doloribus. Eos, saepe excepturi. Unde nisi asperiores officia quam eaque dolorum mollitia. Eius quos quia voluptatibus?</p>
                                    <button type="button" class="btn btn-outline-secondary">Read More</button>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                 {{--Shop by brand --}}
                 <div class="container">
                    <div class="row pt-3">
                        <div class="col-12 hr-theme-slash-2 ps-lg-5">
                            <div class="hr-line"></div>
                            <div class="hr-font">Shop By Brand</div>
                            <div class="hr-line"></div>
                          </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <img src="https://logonoid.com/images/themeforest-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="https://logonoid.com/images/themeforest-logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="https://logonoid.com/images/themeforest-logo.png" class="img-fluid" alt="">
                        </div>
                        </div>
                    </div>
                 </div>

@endsection
