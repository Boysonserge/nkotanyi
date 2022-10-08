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
            <h1>Login</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li>Login</li>
            </ul>
        </div>
    </div>
</div>


<div class="register-area pt-100 pb-70">
    <div class="container">
        <div class="register">
            <h3>Login</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('Create account?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
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
