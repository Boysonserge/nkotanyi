<!--Header-->
<header class="bg-transparent sticky-bar mt-4">
    <div class="container bg-transparent">
        <nav class="bg-transparent flex justify-between items-center py-3">
            <a class="text-3xl font-semibold leading-none" href="{{url('/')}}">
                <img class="h-10" src="{{asset('assets/imgs/logos/monst-logo.svg')}}" alt="">
            </a>
            <ul class="hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
                <li class="group relative pt-4 pb-4">
                    <a href="{{url('/')}}" class="text-sm font-semibold text-blueGray-600 hover:text-blueGray-500">Home</a>

                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-blueGray-600 hover:text-blueGray-500" href="about.html">About Us</a>
                </li>
                <li class="pt-4 pb-4">
                    <a class="text-sm font-semibold text-blueGray-600 hover:text-blueGray-500" href="services.html">Services</a>
                </li>

                <li class="pt-4 pb-4"><a class="text-sm font-semibold text-blueGray-600 hover:text-blueGray-500" href="contact.html">Contact</a></li>
            </ul>
            <div class="hidden lg:block">
                @auth
                    <a href="{{ url('/myaccount') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-accent hover-up-2" href="login.html">Log In</a>
                    {{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary hover-up-2" href="signup.html">Sign Up</a>
                        {{--                            <a  class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                    @endif
                @endauth



            </div>
            <div class="lg:hidden">
                <button class="navbar-burger flex items-center py-2 px-3 text-blue-500 hover:text-blue-700 rounded border border-blue-200 hover:border-blue-300">
                    <svg class="fill-current h-4 w-4" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</header>

<!--Mobile menu-->
<div class="hidden navbar-menu relative z-50 transition duration-300">
    <div class="navbar-backdrop fixed inset-0 bg-blueGray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto transition duration-300">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-semibold leading-none" href="#">
                <img class="h-10" src="assets/imgs/logos/monst-logo.svg" alt="">
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-blueGray-400 cursor-pointer hover:text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul class="mobile-menu">
                <li class="mb-1 menu-item-has-children rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="#">Home</a>
                    <ul class="dropdown pl-5">
                        <li>
                            <a class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="{{url('/')}}">Home 1</a>
                        </li>
                        <li>
                            <a class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="index-2.html">Home 2</a>
                        </li>
                        <li>
                            <a class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="index-3.html">Home 3</a>
                        </li>
                        <li>
                            <a class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="index-4.html">Home 4</a>
                        </li>
                        <li>
                            <a class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="index-5.html">Home 5</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-1 rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500 rounded-xl" href="about.html">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="services.html">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="portfolio.html">Portfolio</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="pricing.html">Pricing</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="team.html">Team</a>
                </li>
                <li class="mb-1 menu-item-has-children rounded-xl">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="team.html">Blog</a>
                    <ul class="dropdown pl-5">
                        <li>
                            <a href="blog.html" class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500">Category 1</a>
                        </li>
                        <li>
                            <a href="blog-2.html" class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500">Category 2</a>
                        </li>
                        <li>
                            <a href="blog-single.html" class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500">Single 1</a>
                        </li>
                        <li>
                            <a href="blog-single-2.html" class="block p-3 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500">Single 2</a>
                        </li>
                    </ul>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="faqs.html">Faqs</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="testimonials.html">Testimonial</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm text-blueGray-500 hover:bg-blue-50 hover:text-blue-500" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <div class="mt-4 pt-6 border-t border-blueGray-100">
                <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-blue-400 hover:bg-blue-500 text-white rounded" href="#">Sign Up</a>
                <a class="block px-4 py-3 mb-2 text-xs text-center text-blue-500 hover:text-blue-700 font-semibold leading-none border border-blue-200 hover:border-blue-300 rounded" href="#">Log In</a>
            </div>
        </div>
        <div class="mt-auto">
            <p class="my-4 text-xs text-blueGray-400">
                <span>Get in Touch</span>
                <a class="text-blue-500 hover:text-blue-500 underline" href="#"><span class="__cf_email__" data-cfemail="b5d6dadbc1d4d6c1f5d8dadbc6c19bd6dad8">[email&#160;protected]</span></a>
            </p>
            <a class="inline-block px-1" href="#">
                <img src="assets/imgs/icons/facebook-blue.svg" alt="">
            </a>
            <a class="inline-block px-1" href="#">
                <img src="assets/imgs/icons/twitter-blue.svg" alt="">
            </a>
            <a class="inline-block px-1" href="#">
                <img src="assets/imgs/icons/instagram-blue.svg" alt="">
            </a>
        </div>
    </nav>
</div>
