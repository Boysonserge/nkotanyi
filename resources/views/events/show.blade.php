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
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="">
                        <img src="assets/images/logo.png" class="main-logo" lt="logo">
                        <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
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
            <h1>{{$event->eventTitle}}</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li>{{Str::limit($event->eventTitle,20)}}</li>
            </ul>
        </div>
    </div>
</div>


<div class="events-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="events-details-left-content pr-20">
                    <div class="events-image">
                        <img src="{{asset('storage/'.$event->eventImage)}}" alt="Image">
                    </div>
                    <div class="meetings">
                        <h2>{{$event->eventTitle}}</h2>
                        {!! $event->eventDescription !!}
                    </div>

                    <div class="brought">
                        <h3>Ready to go?</h3>

                        <a href="#" class="default-btn btn">Apply Now<i class="flaticon-next"></i></a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-lecturer pl-20">
                    <h3>About this evenst</h3>
                    <div class="row align-items-center">

                        <div class="address">

                            <div class="list">
                                <ul>
                                    <li>{{$event->eventLocation}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{--<div class="social-content">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com" target="_blank"><i
                                        class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank"><i
                                        class="ri-twitter-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                        class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                        class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
                <div class="next-workshop pl-20">
                    <h3>More info?</h3>
                    <div class="list">
                        <ul>
                            <li><span>Date: </span>{{\Carbon\Carbon::make($event->eventDate)->format('Y ,F, d')}}</li>
                            <li><span>Times: </span>{{$event->eventTime}}</li>
                            <li><span>Fee: </span>{{number_format($event->eventFee)}} Rwf</li>
                            <li><span>Location: </span>{{$event->eventLocation}}</li>
                        </ul>
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
