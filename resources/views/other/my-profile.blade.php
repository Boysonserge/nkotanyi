<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{auth()->user()->name}} - My account </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tailwind CSS Saas Landing Page">
    <meta name="author" content="alithemes.com">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/imgs/logos/favicon.svg')}}">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css?v=2.0')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css?v=2.0')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/tailwind-built.css?v=2.0')}}">
    <style>
        /* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

            background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 150ms infinite linear;
            -moz-animation: spinner 150ms infinite linear;
            -ms-animation: spinner 150ms infinite linear;
            -o-animation: spinner 150ms infinite linear;
            animation: spinner 150ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>
<body class="bg-white text-body font-body">
<div class="main">
    <!--Header-->
    @include('inc.header')

    <section class="pb-20">
        <div class="pt-20 pb-8 mb-12 bg-cover bg-no-repeat"
             style="background-image: url('assets/imgs/placeholders/img-14.jpg')">
            <div class="container">
                <div class="max-w-2xl mx-auto">
                    <div class="text-center mb-6">
                                <span class="text-base md:text-lg">
                                    <a class="text-blueGray-200 hover:underline" href="#"><span
                                            class="inline-block py-1 px-3 text-xs font-semibold bg-blue-100 text-blue-600 rounded-xl mr-3">My profile</span></a>
                                    <span class="text-blueGray-200 text-sm"><b>Joined: </b>{{auth()->user()->created_at->since()}}</span>
                                </span>
                        <h2 class="text-4xl md:text-5xl mt-4 text-white font-bold font-heading">{{auth()->user()->name}}</h2>
                    </div>
                    <div class="flex justify-center mb-8">
                        <img class="w-12 h-12 object-cover rounded-full" src="assets/imgs/placeholders/avatar-8.png"
                             alt="">
                        <div class="pl-4">
                            <p class="text-blueGray-100 mb-1">{{auth()->user()->email}} </p>
                            <p class="text-xs text-blueGray-200 font-semibold">{{auth()->user()->role}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="relative">

        <div class="container">
           @livewire('my-payments')
        </div>
    </section>
</div>
<!-- End .main -->

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader flex-1 content-center">
        <div class="logo absolute inset-y-2/4 jump">
            <img src="assets/imgs/logos/favicon.svg" alt="">
            <h1 class="text-lg font-semibold">UOK</h1>
        </div>
    </div>
</div>
<!--Import Vendor Js-->

@include('inc.footer')
<!--Import Vendor Js-->

@livewireScripts
<script data-cfasync="false" src="{{asset('assets/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoints.js')}}"></script>
<script src="{{asset('assets/js/vendor/counterup.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.js')}}"></script>
<script src="{{asset('assets/js/vendor/wow.js')}}"></script>
<script src="{{asset('assets/js/vendor/scrollup.js')}}"></script>
<script src="{{asset('assets/js/vendor/smooth.js')}}"></script>
<script src="{{asset('assets/js/vendor/textType.js')}}"></script>
<script src="{{asset('assets/js/vendor/mobile-menu.js')}}"></script>
<script src="{{asset('assets/js/main.js?v=2.0')}}"></script>
</body>
</html>
