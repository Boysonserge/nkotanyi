<!DOCTYPE html>
<html lang="en">

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
    @livewireStyles

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
            <h1>Available subscriptions</h1>

        </div>
    </div>
</div>


<div class="events-area pt-100 pb-70">

    <!-- Subscription pricing table -->
    <div class="container-fluid">
        <div class="container p-5">
            <div class="row">
                @forelse($subs as $sub)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card card1 h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{$sub->sub_name}}</h5>
                                <small class='text-muted'>For everyone</small>
                                <br><br>
                                <span class="h2">{{number_format($sub->sub_price)}} RWF</span>/year
                                <br>
                                <ul>
                                    @foreach($sub->items as $feature=>$value)
                                        <li>{{$value->item}}</li>
                                    @endforeach


                                </ul>
                                <br>
                                <div class="d-grid my-3">
                                    <a href="{{ route('subscriptions.show',$sub->id) }}" class="btn btn-outline-dark btn-block">Select</a>
                                </div>

                            </div>


                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Subscriptions</h3>
                            </div>
                            <div class="card-body">
                                <h1 class="text-center">No Subscription</h1>
                                <p class="text-center">No Subscription</p>
                                {{--                            <a href="{{route('subscribe',$sub->id)}}" class="btn btn-primary btn-block">Subscribe</a>--}}
                            </div>
                        </div>
                        @endforelse


                    </div>
            </div>
        </div>


        <div class="admisssion-area bg-f4f6f9 ptb-100">
            <div class="container">
                <div class="admission-content">
                    <div class="section-title">
                        <h2>About our campus</h2>

                    </div>
                    <div class="admission-image">
                        <img src="{{asset('assets/images/banner/banner-img1.jpg')}}" alt="Image">
                        <div class="icon">
                            <a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=-f3hFts2X-Y"><i
                                    class="ri-play-fill"></i></a>
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
