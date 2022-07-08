<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }}</title>
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
</head>
<body class="bg-white text-body font-body">
<div class="main">
    <!--Header-->
    @include('inc.header')

    <section class="relative pb-20">
        <div class="hidden lg:block absolute inset-0 w-1/2 ml-auto">
            <div class="flex items-center h-full wow animate__animated animate__fadeIn animated" data-wow-delay=".1s">
                <img class="lg:max-w-lg mx-auto" src="assets/imgs/illustrations/space.svg" alt="">
            </div>
        </div>
        <div class="container">
            <div class="relative flex flex-wrap pt-12">
                <div class="lg:flex lg:flex-col w-full lg:w-1/2 py-6 lg:pr-20">
                    <div class="w-full max-w-lg mx-auto lg:mx-0 my-auto wow animate__animated animate__fadeIn animated"
                         data-wow-delay=".3s">
                        <span class="text-sm text-blueGray-400">Sign In</span>
                        <h4 class="mb-6 text-3xl">Join our community</h4>
                        <x-slot name="logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </x-slot>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if ($errors->any())

                                <div class="alert alert-danger">
                                    <ul class="list-unstyled" style="color: darkred">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="flex mb-4 px-4 bg-blueGray-50 rounded border border-gray-200">
                                <input
                                    class="w-full py-4 text-xs placeholder-blueGray-400 font-semibold leading-none bg-blueGray-50 outline-none"
                                    type="email" id="email" name="email" value="{{old('email')}}" placeholder="name@email.com">
                                <svg class="h-6 w-6 ml-4 my-auto text-blueGray-300" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <div class="flex mb-6 px-4 bg-blueGray-50 rounded border border-gray-200">
                                <input
                                    class="w-full py-4 text-xs placeholder-blueGray-400 font-semibold leading-none bg-blueGray-50 outline-none"
                                    type="password" placeholder="Enter your password"
                                    name="password"
                                    id="password"
                                    autocomplete="current-password" >
                                <button class="ml-4">
                                    <svg class="h-6 w-6 my-auto text-blueGray-300" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="float-left mb-6 wow animate__animated animate__fadeIn animated"
                                 data-wow-delay=".1s">
                                <label class="inline-flex text-xs">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2">{{ __('Remember me') }} </span>
                                </label>
                            </div>
                            <button
                                class="transition duration-300 ease-in-out transform hover:-translate-y-1 block w-full p-4 text-center text-xs text-white font-semibold leading-none bg-blue-500 hover:bg-blue-700 rounded">
                                {{ __('Sign in') }}
                            </button>
                        </form>
                    </div>

                    <div class="w-full mt-12 mx-auto text-center">
                        <p>Don't Have an Account? <a
                                class="inline-block text-xs text-blue-600 hover:text-blue-700 font-semibold leading-none wow animate__animated animate__fadeIn animated"
                                data-wow-delay=".1s" href="signup.html">Sign Up now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer 2-->
    <section class="relative footer-2 border-t border-gray-100">
        <div class="hidden lg:block absolute inset-0 w-1/2 ml-auto bg-blueGray-50"></div>
        <div class="container">
            <div class="relative flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 pt-20 px-4 max-w-lg lg:max-w-full mx-auto lg:mx-0 text-center lg:text-left">
                    <a class="inline-block mx-auto lg:ml-0 text-3xl font-semibold leading-none wow animate__animated animate__fadeInUp animated"
                       data-wow-delay=".1s" href="index.html">
                        <img class="h-10" src="assets/imgs/logos/monst-logo.svg" alt="">
                    </a>
                    <div class="mt-12 mb-16">
                        <p class="mb-4 text-xs text-blueGray-400 text-center lg:text-left wow animate__animated animate__fadeInUp animated"
                           data-wow-delay=".1s">Subscribe and stay fully connected with product.</p>
                        <div
                            class="flex flex-wrap lg:flex-nowrap items-center wow animate__animated animate__fadeInUp animated"
                            data-wow-delay=".3s">
                            <div class="flex w-full lg:w-2/3 mb-3 lg:mb-0 px-4 bg-blueGray-50 rounded">
                                <svg class="h-6 w-6 my-auto" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                <input class="w-full py-4 pl-3 text-xs text-blueGray-400 bg-blueGray-50 outline-none"
                                       type="text" placeholder="Type your e-mail">
                            </div>
                            <button
                                class="hover-up-2 w-full lg:w-auto py-4 px-8 lg:ml-6 text-xs text-white font-semibold leading-none bg-blue-400 hover:bg-blue-500 rounded"
                                type="submit">Sign Up
                            </button>
                        </div>
                    </div>
                    <div class="hidden lg:block wow animate__animated animate__fadeInUp animated" data-wow-delay=".5s">
                        <p class="text-xs text-blueGray-400">&copy; 2021. All rights reserved.</p>
                        <div class="-mx-2 mt-4">
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/facebook-blue.svg" alt="">
                            </a>
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/twitter-blue.svg" alt="">
                            </a>
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/instagram-blue.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/2 px-4 pt-40 lg:pl-12">
                    <div class="flex flex-row flex-wrap justify-around mb-12">
                        <div class="w-1/2 lg:w-auto mb-12 wow animate__animated animate__fadeInUp animated"
                             data-wow-delay=".1s">
                            <h5 class="mb-6 text-lg font-bold font-heading">About</h5>
                            <ul class="space-y-3">
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="about.html">About
                                        us</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="portfolio.html">Portfolio</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="services.html">Services</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-1/2 lg:w-auto mb-12 wow animate__animated animate__fadeInUp animated"
                             data-wow-delay=".3s">
                            <h5 class="mb-6 text-lg font-bold font-heading">Quick links</h5>
                            <ul class="space-y-3">
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500"
                                       href="team.html">Team</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500"
                                       href="testimonials.html">Testimonials</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500"
                                       href="faqs.html">Faqs</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-auto mb-4 wow animate__animated animate__fadeInUp animated"
                             data-wow-delay=".5s">
                            <h5 class="mb-6 text-lg font-bold font-heading">Blog</h5>
                            <ul class="space-y-3">
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="blog.html">Bussiness</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500" href="blog-2.html">Marketing</a>
                                </li>
                                <li>
                                    <a class="text-lg text-blueGray-400 hover:text-blueGray-500"
                                       href="blog-single.html">Single</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:hidden text-center">
                        <p class="text-xs text-blueGray-400">&copy; 2021. All rights reserved.</p>
                        <div class="-mx-2 mt-4">
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/facebook-blue.svg" alt="">
                            </a>
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/twitter-blue.svg" alt="">
                            </a>
                            <a class="inline-block px-2" href="#">
                                <img src="assets/imgs/icons/instagram-blue.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End .main -->

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader flex-1 content-center">
        <div class="logo absolute inset-y-2/4 jump">
            <img src="assets/imgs/logos/favicon.svg" alt="">
            <h1 class="text-lg font-semibold">Monst</h1>
        </div>
    </div>
</div>
<!--Import Vendor Js-->
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
