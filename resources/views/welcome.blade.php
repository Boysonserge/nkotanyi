<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to {{ config('app.name')}}</title>
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
    @include('inc.header')
    <!--Hero-->
    <section class="xl:bg-contain bg-top bg-no-repeat -mt-24 pt-24" style="background-image: url('assets/imgs/backgrounds/intersect.svg')">
        <div class="container px-4 mx-auto">
            <div class="pt-12 text-center">
                <div class="max-w-2xl mx-auto mb-8">
                    <h2 class="text-3xl lg:text-5xl lg:leading-normal mb-4 font-bold font-heading wow animate__animated animate__fadeIn">Committed to students <br>Committed <span class="text-blue-500">to their Future</span></h2>
                    <p class="text-blueGray-400 leading-relaxed wow animate__animated animate__fadeIn">This is <strong class="text-blue-500">MY UOK</strong>, Prepare for your <span class="typewrite d-inline text-brand" data-period="3000" data-type='["Future", "Passion" ]'></span></p>
                </div>
                <div>
                    <a class="btn-primary py-4 px-8 mr-2 wow animate__animated animate__fadeInUp hover-up-2" href="#key-features">Key Features</a>
                    <a class="btn-white wow animate__animated animate__fadeInUp hover-up-2" data-wow-delay=".3s" href="#how-we-work">How We Work?</a>
                </div>
            </div>
        </div>
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-between pt-8 pb-16">
                <div class="hover-up-5 flex w-1/2 lg:w-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <div class="flex justify-center items-center bg-blueGray-50 text-blue-500 rounded-xl h-12 w-12 sm:h-20 sm:w-20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="sm:py-2 ml-2 sm:ml-6">
                        <span class="sm:text-2xl font-bold font-heading">+ </span>
                        <span class="sm:text-2xl font-bold font-heading count">{{$students}}</span>
                        <p class="text-xs sm:text-base text-blueGray-400">Annual Partner</p>
                    </div>
                </div>
                <div class="hover-up-5 flex w-1/2 lg:w-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                    <div class="flex justify-center items-center bg-blueGray-50 text-blue-500 rounded-xl h-12 w-12 sm:h-20 sm:w-20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                        </svg>
                    </div>
                    <div class="sm:py-2 ml-2 sm:ml-6">
                        <span class="sm:text-2xl font-bold font-heading">+ </span>
                        <span class="sm:text-2xl font-bold font-heading count">58</span>
                        <span class="sm:text-2xl font-bold font-heading"> k </span>
                        <p class="text-xs sm:text-base text-blueGray-400">Completed Projects</p>
                    </div>
                </div>
                <div class="hover-up-5 flex w-1/2 lg:w-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".6s">
                    <div class="flex justify-center items-center bg-blueGray-50 text-blue-500 rounded-xl h-12 w-12 sm:h-20 sm:w-20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <div class="sm:py-2 ml-2 sm:ml-6">
                        <span class="sm:text-2xl font-bold font-heading">+ </span>
                        <span class="sm:text-2xl font-bold font-heading count">500</span>
                        <p class="text-xs sm:text-base text-blueGray-400">Happy Customers</p>
                    </div>
                </div>
                <div class="hover-up-5 flex w-1/2 lg:w-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".8s">
                    <div class="flex justify-center items-center bg-blueGray-50 text-blue-500 rounded-xl h-12 w-12 sm:h-20 sm:w-20">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div class="sm:py-2 ml-2 sm:ml-6">
                        <span class="sm:text-2xl font-bold font-heading">+ </span>
                        <span class="sm:text-2xl font-bold font-heading count">320</span>
                        <p class="text-xs sm:text-base text-blueGray-400">Research Work</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Features-->
    <section class="py-12 md:py-16 lg:py-32 overflow-x-hidden" id="key-features">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap lg:flex-nowrap">
                <div class="w-full lg:w-1/2">
                    <div class="lg:py-6 lg:pr-32 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
                        <div class="mb-4">
                            <span class="text-xs py-1 px-3 text-blue-500 font-semibold bg-blue-50 rounded-xl wow animate__animated animate__fadeInDown" data-wow-delay=".9s">Why choose us</span>
                            <h2 class="text-4xl mt-5 font-bold font-heading wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Key Features</h2>
                        </div>
                        <div class="flex items-start py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="w-8 mr-5 text-blue-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-xl font-semibold font-heading">Join our community</h3>
                                <p class="text-blueGray-400 leading-loose">Create a free plan account to get started.</p>
                            </div>
                        </div>
                        <div class="flex items-start py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                            <div class="w-8 mr-5 text-blue-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-xl font-semibold font-heading">Choose your preferred plan</h3>
                                <p class="text-blueGray-400 leading-loose">Once account is created, you can choose a plan depending on your preferences and get amazing discount on <b>UOK EVENTS</b></p>
                            </div>
                        </div>
                        <div class="flex items-start py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                            <div class="w-8 mr-5 text-blue-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-2 text-xl font-semibold font-heading">Start enjoying</h3>
                                <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative w-full lg:w-1/2 my-12 lg:my-0">
                    <div class="wow animate__animated animate__fadeInRight" data-wow-delay=".5s">
                        <img class="jump relative mx-auto rounded-xl w-full z-10" src="assets/imgs/placeholders/img-1.png" alt="">
                        <img class="absolute top-0 left-0 w-40 -ml-12 -mt-12" src="assets/imgs/elements/blob-tear.svg" alt="">
                        <img class="absolute bottom-0 right-0 w-40 -mr-12 -mb-12" src="assets/imgs/elements/blob-tear.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-blueGray-50" id="how-we-work">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center justify-between max-w-2xl lg:max-w-full mb-12">
                <div class="w-full lg:w-1/2 mb-4 lg:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold font-heading wow animate__animated animate__fadeInDown">
                        <span>We are</span>
                        <span class="text-blue-500">awesome team</span>
                        <br>
                        <span>for your business dream</span>
                    </h2>
                </div>
                <div class="w-full lg:w-1/2 lg:pl-16">
                    <p class="text-blueGray-400 leading-loose wow animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis. Quisque vitae nulla malesuada, auctor arcu vitae, luctus nisi. Sed elementum vitae ligula id imperdiet.</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 -mb-6 text-center">
                <div class="hover-up-5 w-full md:w-1/2 lg:w-1/3 px-3 mb-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                    <div class="p-12 bg-white shadow rounded">
                        <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">1</div>
                        <img class="h-48 mx-auto my-4" src="assets/imgs/illustrations/eating.svg" alt="">
                        <h3 class="mb-2 font-bold font-heading">Project Initialization</h3>
                        <p class="text-sm text-blueGray-400 leading-relaxed">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
                    </div>
                </div>
                <div class="hover-up-5 w-full md:w-1/2 lg:w-1/3 px-3 mb-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                    <div class="p-12 bg-white shadow rounded">
                        <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">2</div>
                        <img class="h-48 mx-auto my-4" src="assets/imgs/illustrations/space.svg" alt="">
                        <h3 class="mb-2 font-bold font-heading">Looking for Creative</h3>
                        <p class="text-sm text-blueGray-400 leading-relaxed">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
                    </div>
                </div>
                <div class="hover-up-5 w-full lg:w-1/3 px-3 mb-6">
                    <div class="p-12 bg-white shadow rounded wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                        <div class="flex w-12 h-12 mx-auto items-center justify-center text-blue-800 font-bold font-heading bg-blue-200 rounded-full">3</div>
                        <img class="h-48 mx-auto my-4" src="assets/imgs/illustrations/tasks.svg" alt="">
                        <h3 class="mb-2 font-bold font-heading">Market Development</h3>
                        <p class="text-sm text-blueGray-400 leading-relaxed">Sed ac magna sit amet risus tristique interdum at vel velit. In hac habitasse platea dictumst.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 md:py-20">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap -mx-3">
                <div class="relative w-full lg:w-1/3 mb-8 lg:mb-0 text-center lg:text-left">
                    <div class="max-w-md lg:max-w-xs lg:pr-16 mx-auto lg:ml-0 mb-6 lg:mb-0">
                        <h2 class="text-3xl md:text-4xl mb-4 font-bold font-heading wow animate__animated animate__fadeInUp" data-wow-delay=".3s">Simple Solution for <span class="text-blue-500">Complex</span> Connections</h2>
                        <p class="text-xs md:text-base text-blueGray-400 leading-loose wow animate__animated animate__fadeInUp" data-wow-delay=".9s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                    </div>
                    <div class="lg:absolute lg:bottom-0 lg:left-0 flex justify-center">
                        <div id="carausel-2-columns-1-arrows" class="flex"></div>
                    </div>
                </div>
                <div class="w-full lg:w-2/3 flex flex-wrap">
                    <div class="relative w-full">
                        <div class="carausel-2-columns slick-carausel" id="carausel-2-columns-1">
                            <div class="px-3 pb-5">
                                <div class="card-slider group">
                                    <img class="rounded-xl" src="assets/imgs/placeholders/img-2.jpg" alt="">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <h1 class="mt-5 text-xl font-semibold group-hover:text-blue-500">User growth</h1>
                                            <p class="mt-2 text-xs text-gray-500">Harvard university</p>
                                        </div>
                                        <div>
                                            <a class="tracking-wide hover-up-2 mr-2 inline-block px-4 py-3 text-xs text-blue-500 font-semibold leading-none border border-blue-200 hover:border-blue-500 hover:text-white hover:bg-blue-500 rounded">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 pb-5">
                                <div class="card-slider group">
                                    <img class="rounded-xl" src="assets/imgs/placeholders/img-3.jpg" alt="">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <h1 class="mt-5 text-xl font-semibold group-hover:text-blue-500">Product Launch</h1>
                                            <p class="mt-2 text-xs text-gray-500">Cocacola., Co</p>
                                        </div>
                                        <div>
                                            <a class="tracking-wide hover-up-2 mr-2 inline-block px-4 py-3 text-xs text-blue-500 font-semibold leading-none border border-blue-200 hover:border-blue-500 hover:text-white hover:bg-blue-500 rounded">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 pb-5">
                                <div class="card-slider group">
                                    <img class="rounded-xl" src="assets/imgs/placeholders/img-4.jpg" alt="">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <h1 class="mt-5 text-xl font-semibold group-hover:text-blue-500">New Event</h1>
                                            <p class="mt-2 text-xs text-gray-500">Oxford university</p>
                                        </div>
                                        <div>
                                            <a class="tracking-wide hover-up-2 mr-2 inline-block px-4 py-3 text-xs text-blue-500 font-semibold leading-none border border-blue-200 hover:border-blue-500 hover:text-white hover:bg-blue-500 rounded">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 pb-5">
                                <div class="card-slider group">
                                    <img class="rounded-xl" src="assets/imgs/placeholders/img-5.jpg" alt="">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <h1 class="mt-5 text-xl font-semibold group-hover:text-blue-500">Shopping Mall</h1>
                                            <p class="mt-2 text-xs text-gray-500">Alibaba Co</p>
                                        </div>
                                        <div>
                                            <a class="tracking-wide hover-up-2 mr-2 inline-block px-4 py-3 text-xs text-blue-500 font-semibold leading-none border border-blue-200 hover:border-blue-500 hover:text-white hover:bg-blue-500 rounded">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 xl:bg-contain bg-top bg-no-repeat" style="background-image: url('assets/imgs/backgrounds/intersect.svg')">
        <div class="container px-4 mx-auto">
            <div class="text-center mb-16">
                <h2 class="max-w-lg mx-auto mb-4 text-4xl font-bold font-heading wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                    <span>Start saving time today and</span>
                    <span class="text-blue-500">choose</span>
                    <span>your best plan</span>
                </h2>
                <p class="max-w-sm mx-auto text-lg text-blueGray-400 wow animate__animated animate__fadeInDown" data-wow-delay=".5s">Best for freelance developers who need to save their time</p>
            </div>
            <div class="flex flex-wrap -mx-3">
                @forelse($subs as $subscri)
                    @if($loop->iteration % 2 == 0)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
                        <div class="hover-up-5 pt-16 pb-8 px-4 text-center text-white bg-blue-500 rounded shadow wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <img class="h-20 mb-6 mx-auto" src="assets/imgs/icons/agency.svg" alt="">
                            <h3 class="mb-2 text-4xl font-bold font-heading">{{$subscri->sub_name}}</h3>
                            <span class="text-4xl font-bold font-heading">RWF {{number_format($subscri->sub_price)}}</span>
                            <p class="mt-2 mb-8">per year</p>
                            <div class="flex flex-col items-center mb-8">
                                <ul>
                                    @forelse($subscri->items as $items)
                                        <li class="flex items-center">
                                            <svg class="w-6 h-6 mr-2 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{$items->item}}</span>
                                        </li>
                                    @empty
                                        No items available
                                    @endforelse

                                </ul>
                            </div>
                            <div>
                                <a class="block sm:inline-block py-4 px-6 mb-4 sm:mb-0 sm:mr-3 text-xs text-blue-500 font-semibold leading-none bg-white hover:bg-blueGray-50 rounded" href="#">Start Free Trial</a>
                                <a class="block sm:inline-block py-4 px-6 text-xs font-semibold leading-none border border-blue-500 hover:border-blue-400 rounded" href="#">Purchase</a>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
                            <div class="hover-up-5 pt-16 pb-8 px-4 text-center bg-white rounded shadow wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                                <img class="h-20 mb-6 mx-auto" src="assets/imgs/icons/startup.svg" alt="">
                                <h3 class="mb-2 text-4xl font-bold font-heading">{{$subscri->sub_name}}</h3>
                                <span class="text-4xl text-blue-500 font-bold font-heading">RWF {{number_format($subscri->sub_price)}}</span>
                                <p class="mt-2 mb-8 text-blueGray-400">Per year</p>
                                <div class="flex flex-col items-center mb-8">
                                    <ul class="text-blueGray-400">
                                        @forelse($subscri->items as $items)
                                            <li class="flex items-center">
                                                <svg class="w-6 h-6 mr-2 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <span>{{$items->item}}</span>
                                            </li>
                                        @empty
                                            No items available
                                        @endforelse
                                    </ul>
                                </div>
                                <div>
                                    <a class="block sm:inline-block py-4 px-6 mb-4 sm:mb-0 sm:mr-3 text-xs text-white text-center font-semibold leading-none bg-blue-400 hover:bg-blue-500 rounded" href="#">Start Free Trial</a>
                                    <a class="block sm:inline-block py-4 px-6 text-xs text-blueGray-500 hover:text-blueGray-600 text-center font-semibold leading-none bg-white border border-blueGray-200 hover:border-blueGray-300 rounded" href="#">Purchase</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-6">
                        No plans available
                    </div>
                @endforelse

            </div>

        </div>
    </section>
    @include('inc.footer')
</div>
<!-- End .main -->

<!-- Preloader Start -->
{{--<div id="preloader-active">
    <div class="preloader flex-1 content-center">
        <div class="logo absolute inset-y-2/4 jump">
            <img src="{{asset('assets/imgs/logos/favicon.svg')}}" alt="">
            <h1 class="text-lg font-semibold">Monst</h1>
        </div>
    </div>
</div>--}}
<!--Import Vendor Js-->
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
