<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name')}}</title>
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
    @livewireStyles
</head>
<body class="bg-white text-body font-body">
<div class="main">
    <!--Header-->
    @include('inc.header')

   <section class="py-20">
        <div class="container">
            <div class="max-w-lg mb-16">
                <h2 class="mb-4 text-3xl lg:text-4xl font-bold font-heading wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".1s">
                    <span>Selected plan: </span>
                    <span class="text-blue-500">{{$subName}}</span>

                </h2>

            </div>
            <div class="bg-white border border-gray-200 rounded shadow">
                <div>
                    <div class="flex flex-wrap p-6 -mx-3 wow animate__animatedanimated animate__fadeIn" data-wow-delay=".7s">
                        <div class="w-full lg:w-1/6 text-center lg:text-left text-lg lg:text-base font-semibold lg:font-normal mb-2 lg:mb-0 px-3">
                            {{$selectedSub->sub_name}}</div>
                        <div class="w-full lg:w-4/6 mb-6 lg:mb-0 px-3">
                            <p class="mb-4 lg:mb-6 leading-loose"> {{$selectedSub->description}}</p>
                            <ul class="flex flex-col lg:flex-row justify-start space-y-2 lg:space-y-0 lg:space-x-8">
                                @forelse($selectedSub->items as $items)
                                <li class="flex">
                                    <svg class="h-6 w-6 mr-2 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="text-blueGray-400">{{$items->item}}</span>
                                </li>
                                @empty
                                    <li class="flex">No items available</li>
                                @endforelse


                            </ul>
                        </div>
                        <div class="w-full lg:w-1/6 self-center text-xs px-3">
                            <a  class="block mb-2 py-4 text-center hover:text-white font-semibold bg-blueGray-200 hover:bg-blue-500 rounded" > RWF {{number_format($selectedSub->sub_price)}}</a>
                            <p class="text-center text-blueGray-400">per year</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-20">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <div class="max-w-md mb-8 mx-auto">
                    <span class="inline-block py-1 px-3 text-xs font-semibold bg-blue-100 text-blue-600 rounded-xl wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".1s">Payment details</span>
                </div>
                @livewire('send-payment',['subName'=>$selectedSub->sub_name])
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
            <h1 class="text-lg font-semibold">{{config('app.name')}}</h1>
        </div>
    </div>
</div>

@include('inc.footer')
<!--Import Vendor Js-->

@livewireScripts
<script data-cfasync="false" src="{{asset('assets/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
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
