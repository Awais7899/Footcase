<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="author" content="CodePixar" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="UTF-8" />
    <title>Matrix</title>
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  </head>
  <body>
    <!-- Start Header Area -->
    @include('header')  <!-- Including the header.blade.php file -->

    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area">
      <div class="container"    >
        <div class="row fullscreen align-items-center justify-content-start" >
          <div class="col-lg-12">
            <div class="active-banner-slider owl-carousel">
              <!-- single-slide -->
              <div class="row single-slide align-items-center d-flex" >
                <div class="col-lg-5 col-md-6"  >
                  <div class="banner-content">
                    <h1>Matrix New <br />Collection!</h1>
                    <p style="color: black">
                      Matrix are known for their versatile style that combines
                      comfort and fashion. They come in a wide variety of
                      designs, colors, and patterns, catering to different
                      tastes and preferences. From classic retro styles to
                      modern and futuristic designs, sneakers offer a range of
                      options to suit various outfits and occasions.
                    </p>
                    <div class="add-bag d-flex align-items-center">
                      <a class="add-btn"  href="{{ url('cart') }}"
                        >
                        <span class="lnr lnr-cross"></span
                      >
                    </a>
                      <span class="add-text text-uppercase">Add to Bag</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="banner-img">
                    <img
                      class="img-fluid"
                      src="{{ asset('img/banner/banner-img.png') }}"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- single-slide -->
              <div class="row single-slide">
                <div class="col-lg-5">
                  <div class="banner-content">
                    <h1>Matrix New <br />Collection!</h1>
                    <p style="color: black">
                      Matrix are known for their versatile style that combines
                      comfort and fashion. They come in a wide variety of
                      designs, colors, and patterns, catering to different
                      tastes and preferences. From classic retro styles to
                      modern and futuristic designs, sneakers offer a range of
                      options to suit various outfits and occasions.
                    </p>
                    <div class="add-bag d-flex align-items-center">
                      <a class="add-btn" href="{{ url('cart') }}" 
                        ><span class="lnr lnr-cross"></span
                      ></a>
                      <span class="add-text text-uppercase">Add to Bag</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="banner-img">
                    <img
                      class="img-fluid"
                      src="{{ asset('img/banner/banner-img.png') }}"   
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="owl-carousel active-product-area">
      <!-- single product slide -->
      <div class="single-product-slider">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <div class="section-title">
                <h1>Latest Products</h1>
                <p>Matrix, From Sole to Soul, Be the King of Style!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p1.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p2.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Sneakers for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p3.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix Canvas</h6>
                  <div class="price">
                    <h6>Rs. 1500.00</h6>
                    <h6 class="l-through">Rs. 2500.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p4.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix FUNNY SHOES</h6>
                  <div class="price">
                    <h6>Rs. 1000.00</h6>
                    <h6 class="l-through">Rs. 2000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p5.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix Joggs</h6>
                  <div class="price">
                    <h6>Rs. 2500.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p6.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p7.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix JOGGS</h6>
                  <div class="price">
                    <h6>Rs. 1999.00</h6>
                    <h6 class="l-through">Rs. 3000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p8.jpg') }}"alt="" />
                <div class="product-details">
                  <h6>Matrix JOGGS</h6>
                  <div class="price">
                    <h6>Rs. 1999.00</h6>
                    <h6 class="l-through">Rs. 3000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- single product slide -->
      <div class="single-product-slider">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <div class="section-title">
                <h1>Coming Products</h1>
                <p>Matrix, From Sole to Soul, Be the King of Style!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p6.jpg') }}"  alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p8.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p3.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid" src="{{ asset('img/product/p5.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p1.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p4.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single product -->
            <div class="col-lg-3 col-md-6">
              <div class="single-product">
                <img class="img-fluid"  src="{{ asset('img/product/p8.jpg') }}" alt="" />
                <div class="product-details">
                  <h6>Matrix New Hammer sole for Sports person</h6>
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <div class="prd-bottom">
                    <a href="login.html" target="_blank" class="social-info">
                      <span class="ti-bag"></span>
                      <p class="hover-text">add to bag</p>
                    </a>
                    <a class="social-info">
                      <span class="lnr lnr-heart"></span>
                      <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-sync"></span>
                      <p class="hover-text">compare</p>
                    </a>
                    <a href="" class="social-info">
                      <span class="lnr lnr-move"></span>
                      <p class="hover-text">view more</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <section class="features-area">
      <div class="container">
        <div class="row features-inner">
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
              <div class="f-icon">
                <img  src="{{ asset('img/features/f-icon3.png') }}"  alt="" />
              </div>
              <h6>Free Delivery</h6>
              <p>Free Shipping on all order</p>
            </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
              <div class="f-icon">
                <img  src="{{ asset('img/features/f-icon2.png') }}"  alt="" />
              </div>
              <h6>Return Policy</h6>
              <p>Free Shipping on all order</p>
            </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
              <div class="f-icon">
                <img   src="{{ asset('img/features/f-icon3.png') }}" alt="" />
              </div>
              <h6>24/7 Support</h6>
              <p>Free Shipping on all order</p>
            </div>
          </div>
          <!-- single features -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
              <div class="f-icon">
                <img  src="{{ asset('img/features/f-icon3.png') }}" alt="" />
              </div>
              <h6>Secure Payment</h6>
              <p>Free Shipping on all order</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    {{-- <section class="exclusive-deal-area">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-6 no-padding exclusive-left">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1>Exclusive Hot Deal Ends Soon!</h1>
                <p>Who are in extremely love with eco friendly system.</p>
              </div>
              <div class="col-lg-12">
                <div class="row clock-wrap">
                  <div class="col clockinner1 clockinner">
                    <h1 class="days">150</h1>
                    <span class="smalltext">Days</span>
                  </div>
                  <div class="col clockinner clockinner1">
                    <h1 class="hours">23</h1>
                    <span class="smalltext">Hours</span>
                  </div>
                  <div class="col clockinner clockinner1">
                    <h1 class="minutes">47</h1>
                    <span class="smalltext">Mins</span>
                  </div>
                  <div class="col clockinner clockinner1">
                    <h1 class="seconds">59</h1>
                    <span class="smalltext">Secs</span>
                  </div>
                </div>
              </div>
            </div>
            <a href="login.html" target="_blank" class="primary-btn"
              >Shop Now</a
            >
          </div>
          <div class="col-lg-6 no-padding exclusive-right">
            <div class="active-exclusive-product-slider">
              <!-- single exclusive carousel -->
              <div class="single-exclusive-slider">
                <img class="img-fluid"  src="{{ asset('img/product/e-p1.png') }}" alt="" />
                <div class="product-details">
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <h4>Matrix New Hammer sole for Sports person</h4>
                  <div
                    class="add-bag d-flex align-items-center justify-content-center"
                  >
                    <a class="add-btn" href="login.html" target="_blank"
                      ><span class="ti-bag"></span
                    ></a>
                    <span class="add-text text-uppercase">Add to Bag</span>
                  </div>
                </div>
              </div>
              <!-- single exclusive carousel -->
              <div class="single-exclusive-slider">
                <img class="img-fluid"  src="{{ asset('img/product/e-p1.png') }}" alt="" />
                <div class="product-details">
                  <div class="price">
                    <h6>Rs. 2999.00</h6>
                    <h6 class="l-through">Rs. 5000.00</h6>
                  </div>
                  <h4>Matrix New Hammer sole for Sports person</h4>
                  <div
                    class="add-bag d-flex align-items-center justify-content-center"
                  >
                    <a class="add-btn" href="login.html" target="_blank"
                      ><span class="ti-bag"></span
                    ></a>
                    <span class="add-text text-uppercase">Add to Bag</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
      <div class="container">
        <div class="row">
          <a class="col single-img" href="#">
            <img
              class="img-fluid d-block mx-auto"
              src="{{ asset('img/brand/1.png') }}"
              alt=""
            />
          </a>
          <a class="col single-img" href="#">
            <img
              class="img-fluid d-block mx-auto"
       
              src="{{ asset('img/brand/2.png') }}"
              alt=""
            />
          </a>
          <a class="col single-img" href="#">
            <img
              class="img-fluid d-block mx-auto"
              src="{{ asset('img/brand/3.png') }}"
              alt=""
            />
          </a>
          <a class="col single-img" href="#">
            <img
              class="img-fluid d-block mx-auto"
              src="{{ asset('img/brand/4.png') }}"
              alt=""
            />
          </a>
          <a class="col single-img" href="#">
            <img
              class="img-fluid d-block mx-auto"
              src="{{ asset('img/brand/5.png') }}"
              alt=""
            />
          </a>
        </div>
      </div>
    </section>
    <!-- End brand Area -->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>About Us</h6>
              <p>
                Matrix carries its own unique identity, reflecting its core
                values, vision, and design philosophy. It sets itself apart
                through a combination of innovative designs, attention to
                detail, and a distinct aesthetic that resonates with its target
                audience.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>
              <div class="" id="mc_embed_signup">
                <form
                  target="_blank"
                  novalidate="true"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get"
                  class="form-inline"
                >
                  <div class="d-flex flex-row">
                    <input
                      class="form-control"
                      name="EMAIL"
                      placeholder="Enter Email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Email '"
                      required=""
                      type="email"
                    />

                    <button class="click-btn btn btn-default">
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </button>
                    <div style="position: absolute; left: -5000px">
                      <input
                        name="b_36c4fd991d266f23781ded980_aefe40901a"
                        tabindex="-1"
                        value=""
                        type="text"
                      />
                    </div>

                    <!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="{{ asset('img/i2.jpg') }}"alt="" /></li>
                <li><img src="{{ asset('img/i3.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i4.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i5.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i6.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i7.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i8.jpg') }}" alt="" /></li>
                <li><img src="{{ asset('img/i1.jpg') }}"alt="" /></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
              <div class="footer-social d-flex align-items-center">
                <a href="login.html" target="_blank"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="login.html" target="_blank"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a href="login.html" target="_blank"
                  ><i class="fa fa-dribbble"></i
                ></a>
                <a href="login.html" target="_blank"
                  ><i class="fa fa-behance"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="footer-bottom d-flex justify-content-center align-items-center flex-wrap"
        >
          <p class="footer-text m-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Matrix, From Sole to Soul
            <i class="fa fa-heart-o" aria-hidden="true"></i> Be the King of
            Style! by <a href="index.html" target="_blank">Zahid Ijaz</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->


    <script  src="{{ asset('js/vendor/jquery-2.2.4.min.js') }} "></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script  src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script   src="{{ asset('js/jquery.ajaxchimp.min.js') }}" ></script>
    <script   src="{{ asset('js/jquery.nice-select.min.js') }}" ></script>
    <script   src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script  src="{{ asset('js/nouislider.min.js') }}" ></script>
    <script  src="{{ asset('js/countdown.js') }}" ></script>
    <script   src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src=""  src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script   src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE" ></script>
    <script   src="{{ asset('js/gmaps.min.js') }}"></script>
    <script  src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
