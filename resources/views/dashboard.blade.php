<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <title>UOK ALUMNI</title>
</head>
<body>

<div class="preloader-area">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>


<div class="navbar-area nav-bg-1">

    @include('includes.header')
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="icon">
                        <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-banner-area bg-2">
    <div class="container">
        <div class="page-banner-content">
            <h1>Dashboard</h1>
            <ul>
                <li><a href="">{{auth()->user()->name. ' | '.auth()->user()->email }}</a></li>
            </ul>
        </div>
    </div>
</div>


{{--
<div class="alumni-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="alumni-left-content row">
                    <h3>My events</h3>
                    <div class="single-alumni-events-card">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-5">
                                <div class="alumni-img">
                                    <img src="{{asset('assets/images/alumni/alumni-3.jpg')}}" alt="Image">
                                    <div class="date">
                                        <p>Apr 11,2022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="alumni-content">
                                    <div class="time">
                                        <p><i class="flaticon-time"></i>1:00 pm - 1:00 pm</p>
                                    </div>
                                    <h3>Regular WordPress Meetup In New Jersey, USA</h3>
                                    <div class="location">
                                        <p><i class="ri-map-pin-line"></i>Sanu Grand Hall</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
--}}
<div class="alumni-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="alumni-right-content">
                    <h3>My profile</h3>
                    <div class="single-alumni-profile-card">
                        <div class="row align-items-center">


                            <div class="col-lg-7 col-md-7">
                                <div class="alumni-content">
                                    <h3>{{auth()->user()->name}}</h3>
                                    <p>{{auth()->user()->email}}</p>
                                    <p>{{auth()->user()->phone}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


            <div class="col-lg-6">
                <div class="alumni-right-content">
                    <h3>Current subscriptions</h3>
                    <div class="single-alumni-profile-card">
                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-7">
                                <div class="alumni-content">
                                    @forelse($sub as $subscription)
                                        <h3>{{$subscription->sub_name}}</h3>
                                        <p>{{$subscription->sub_price}}RWF</p>
                                    @empty
                                        <h3>No subscription</h3>

                                    @endforelse



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </div>


@include('includes.footer')

<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
    <i class="ri-arrow-up-s-line"></i>
</div>
@livewireScripts
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/carousel-thumbs.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
