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
            <h1>Register</h1>
            <ul>
                <li><a href="">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>


<div class="register-area pt-100 pb-70">
    <div class="container">
        <div class="register">
            <h3>Register</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter your phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="faculty">Faculty</label>
                            <input type="text" id="faculty" class="form-control @error('faculty') is-invalid @enderror" name="faculty" value="{{ old('faculty') }}" required autocomplete="faculty" placeholder="Enter your faculty">
                            @error('faculty')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" id="department" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department" placeholder="Enter your department">
                            @error('department')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="graduationYear">Graduation Year</label>
                            <input type="text" id="graduationYear" class="form-control @error('graduationYear') is-invalid @enderror" name="graduationYear" value="{{ old('graduationYear') }}" required autocomplete="graduationYear" placeholder="Enter your graduationYear">
                            @error('graduationYear')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="subscription">Choose subscription</label>
                            <select name="subscriptions" class="form-control">
                                @foreach($subscriptions as $subscription)
                                    <option value="{{$subscription->id}}">{{$subscription->sub_name.' ( '.$subscription->sub_price.' Rwf ) '}}</option>

                                @endforeach
                            </select>
                            @error('subscriptions')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>




                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="footer-logo-area">
                    <a href="index.html"><img src="assets/images/white-logo.png" alt="Image"></a>
                    <p>Sanu University was established by J.H Merthon in 1810 for the public benefit. Afterwards, it is recognized globally</p>
                    <div class="contact-list">
                        <ul>
                            <li><a href="tel:+01987655567685">+01-9876-5556-7685
                                </a></li>
                            <li><a href="/cdn-cgi/l/email-protection#4b2a2f2622250b382a253e652e2f3e"><span class="__cf_email__" data-cfemail="7011141d191e3003111e055e151405">[email&#160;protected]</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>Campus Life</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Accessibility</a></li>
                            <li><a href="campus-life.html">Financial Aid</a></li>
                            <li><a href="campus-life.html">Food Services</a></li>
                            <li><a href="campus-life.html">Housing</a></li>
                            <li><a href="campus-life.html">Information Technologies</a></li>
                            <li><a href="campus-life.html">Student Life</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widjet">
                    <h3>Our Campus</h3>
                    <div class="list">
                        <ul>
                            <li><a href="campus-life.html">Acedemic</a></li>
                            <li><a href="campus-life.html">Planning & Administration</a></li>
                            <li><a href="campus-life.html">Campus Safety</a></li>
                            <li><a href="campus-life.html">Office of the Chancellor</a></li>
                            <li><a href="campus-life.html">Facility Services</a></li>
                            <li><a href="campus-life.html">Human Resources</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widjet">
                    <h3>Academics</h3>
                    <div class="list">
                        <ul>
                            <li><a href="academics.html">Canvas</a></li>
                            <li><a href="academics.html">Catalyst</a></li>
                            <li><a href="academics.html">Library</a></li>
                            <li><a href="academics.html">Time Schedule</a></li>
                            <li><a href="academics.html">Apply For Admissions</a></li>
                            <li><a href="academics.html">Pay My Tuition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/shape-1.png" alt="Image">
        </div>
    </div>
</div>


<div class="copyright-area">
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="social-content">
                        <ul>
                            <li><span>Follow Us On</span></li>
                            <li>
                                <a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/?lang=en" target="_blank"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="copy">
                        <p>© Sanu is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
    <i class="ri-arrow-up-s-line"></i>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/carousel-thumbs.min.js"></script>

<script src="assets/js/jquery.magnific-popup.js"></script>

<script src="assets/js/aos.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/appear.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>
</body>
</html>
