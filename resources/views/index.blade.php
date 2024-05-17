@extends('layouts.master')



@section('title')
    Footcase
@endsection

@section('css')
@endsection

@section('content')
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Footcase New <br />Collection!</h1>
                                    <p style="color:black">
                                        Footcase are known for their versatile style that combines
                                        comfort and fashion. They come in a wide variety of
                                        designs, colors, and patterns, catering to different
                                        tastes and preferences. From classic retro styles to
                                        modern and futuristic designs, sneakers offer a range of
                                        options to suit various outfits and occasions.
                                    </p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{ url('cart') }}">
                                            <span class="lnr lnr-cross"></span>
                                        </a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner-img.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Footcase New <br />Collection!</h1>
                                    <p style="color:black">
                                        Footcase are known for their versatile style that combines
                                        comfort and fashion. They come in a wide variety of
                                        designs, colors, and patterns, catering to different
                                        tastes and preferences. From classic retro styles to
                                        modern and futuristic designs, sneakers offer a range of
                                        options to suit various outfits and occasions.
                                    </p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="{{ url('cart') }}"><span
                                                class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase">Add to Bag</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner-img.png') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p2.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p3.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p7.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p8.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p6.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/product/p4.jpg') }}" alt="" />
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
                            <img class="img-fluid" src="{{ asset('img/features/f-icon3.png') }}" alt="" />
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
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>Free Delivery</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon2.png') }}" alt="" />
                        </div>
                        <h6>Return Policy</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>24/7 Support</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
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
    <div class="add-bag d-flex align-items-center justify-content-center">
      <a class="add-btn" href="login.html" target="_blank"><span class="ti-bag"></span></a>
      <span class="add-text text-uppercase">Add to Bag</span>
    </div>
  </div>
  </div>
  <!-- single exclusive carousel -->
  <div class="single-exclusive-slider">
    <img class="img-fluid" src="{{ asset('img/product/e-p1.png') }}" alt="" />
    <div class="product-details">
      <div class="price">
        <h6>Rs. 2999.00</h6>
        <h6 class="l-through">Rs. 5000.00</h6>
      </div>
      <h4>Matrix New Hammer sole for Sports person</h4>
      <div class="add-bag d-flex align-items-center justify-content-center">
        <a class="add-btn" href="login.html" target="_blank"><span class="ti-bag"></span></a>
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
                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/brand/1.png') }}" alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/brand/2.png') }}" alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/brand/3.png') }}" alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/brand/4.png') }}" alt="" />
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="{{ asset('img/brand/5.png') }}" alt="" />
                </a>
            </div>
        </div>
    </section>
    <!-- End brand Area -->
@endsection
@section('script')
@endsection
