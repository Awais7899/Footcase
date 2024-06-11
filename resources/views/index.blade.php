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
                                    <h1>Comfort and Style Combined</h1>
                                    <p style="color:black">
                                        Step into Luxury with Our Innovative Footwear! Experience Unmatched Comfort and
                                        Unbeatable Style
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7" style="height:100vh;display:flex;align-items:center">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner-img.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Sustainable Steps</h1>
                                    <p style="color:black">
                                        Walk with Purpose! Join Us in Our Mission for Sustainability with Eco-Friendly
                                        Footwear
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7" style="height:100vh;display:flex;align-items:center">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner_image2.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Timeless Elegance</h1>
                                    <p style="color:black">
                                        Elevate Your Look with Timeless Elegance! Discover the Perfect Pair to Complete Your
                                        Style
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7" style="height:100vh;display:flex;align-items:center">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner_image3.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Playful Prints, Happy Feet</h1>
                                    <p style="color:black">
                                        Let Their Imagination Run Wild! Find Joyful Prints and Colors in Our Kids' Shoe
                                        Selection, Made for Adventure
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7" style="height:100vh;display:flex;align-items:center">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner_image4.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1> Princess Feet</h1>
                                    <p style="color:black">
                                        Every Little Girl Deserves to Feel Like a Princess! Explore Our Magical Collection
                                        of Kids' Shoes
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7" style="height:100vh;display:flex;align-items:center">
                                <div class="banner-img">
                                    <img class="img-fluid" src="{{ asset('img/banner/banner_image5.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section_gap">
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Latest Footwear</h1>
                            <p>Matrix, From Sole to Soul, Be the King of Style!</p>
                        </div>
                    </div>
                </div>
                <div class="row" id="products-container">
                    <!-- Products will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </section>





    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="">
                    <button type="button" class="close align-self-end m-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="login_form_inner">
                        <h3>Log in</h3>
                        <form class="row login_form" method="post" id="loginForm">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Email" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email'" />
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Password" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Password'" />
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector" />
                                    <label for="f-option2">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">
                                    Log In
                                </button>
                                <a href="">Forgot Password?</a>

                            </div>
                        </form>
                        <div class="d-flex row justify-content-center py-2"><span>Don't have a
                                account? </span><a href="">
                                &nbsp;&nbsp;SignUp</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">

                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>24/7 Support</h6>
                        <p>We're here to help, anytime.</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>Free Delivery</h6>
                        <p>Free Shipping on all order</p>
                    </div>
                </div>
                <!-- single features -->
                <!-- single features -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="{{ asset('img/features/f-icon3.png') }}" alt="" />
                        </div>
                        <h6>Secure Payment</h6>
                        <p>Safe and streamlined transactions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start brand Area -->
    {{-- <section class="brand-area section_gap">
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
   </section>  --}}
    <!-- End brand Area -->
@endsection
@section('script')
@endsection
