<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Befit Sports Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Befit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{ URL::asset('web-public/css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link href="{{ URL::asset('web-public/css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- banner slider -->
    <link rel="stylesheet" href="{{ URL::asset('web-public/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ URL::asset('web-public/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- main banner -->
    <div class="main-top" id="home">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
                    <!-- logo -->
                    <div id="logo">
                        <h1><a class="" href="index.html">Befit</a></h1>
                    </div>
                    <!-- //logo -->

                    <!-- nav -->
                    <div class="nav_w3ls">
                        <nav>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu">
                                @if (Route::has('login'))
                                @auth
                                {{-- <li><a href="{{ url('/home') }}">Home</a></li> --}}
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <a href="#">{{ Auth::user()->name }} <span class="fa fa-angle-down"
                                            aria-hidden="true"></span></a>
                                    <ul>
                                        <li>
                                            <a class="drop-text" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                                @endif
                            </ul>
                            <ul class="menu">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="/wisata	">Wisata</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2">
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
                                            aria-hidden="true"></span>
                                    </label>
                                    <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul>
                                        <li><a href="#services" class="drop-text">Services</a></li>
                                        <li><a href="blog.html" class="drop-text">Blog</a></li>
                                        <li><a href="single.html" class="drop-text">Blog Details</a></li>
                                        <li><a href="#what" class="drop-text">What We do</a></li>
                                        <li><a href="#testimonials" class="drop-text">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li><a href="/kontak">Kontak</a></li>
                            </ul>

                        </nav>
                    </div>
                    <!-- //nav -->
                </div>
            </div>
        </header>
        <!-- //header -->

        <!-- banner -->
        <div class="banner_w3lspvt">
            <div class="csslider infinity" id="slider1">
                <input type="radio" name="slides" checked="checked" id="slides_1" />
                <input type="radio" name="slides" id="slides_2" />
                <input type="radio" name="slides" id="slides_3" />
                <input type="radio" name="slides" id="slides_4" />
                <ul class="banner_slide_bg">
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Welcome Our Befit</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium,
                                    totam
                                    rem aperiam eaque ipsa <br>quae ab illo.</p>
                                <a href="about.html" style="max-width: 150px;"
                                    class="btn button-style mt-sm-5 mt-4">Read More</a>
                                <a href="contact.html" style="max-width: 150px;"
                                    class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Contact
                                    Us</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Yoga & Meditation</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium,
                                    totam
                                    rem aperiam eaque ipsa <br>quae ab illo.</p>
                                <a href="about.html" style="max-width: 150px;"
                                    class="btn button-style mt-sm-5 mt-4">Read More</a>
                                <a href="contact.html" style="max-width: 150px;"
                                    class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Contact
                                    Us</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt pl-xl-0 pl-sm-4 pl-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Your Health Coach</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium,
                                    totam
                                    rem aperiam eaque ipsa <br>quae ab illo.</p>
                                <a href="about.html" style="max-width: 150px;"
                                    class="btn button-style mt-sm-5 mt-4">Read More</a>
                                <a href="contact.html" style="max-width: 150px;"
                                    class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Contact
                                    Us</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="w3ls_banner_txt pl-xl-0 pl-sm-4 pl-5">
                                <h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Health & Strength</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit <br>acntium doemque laudantium,
                                    totam
                                    rem aperiam eaque ipsa <br>quae ab illo.</p>
                                <a href="about.html" style="max-width: 150px;"
                                    class="btn button-style mt-sm-5 mt-4">Read More</a>
                                <a href="contact.html" style="max-width: 150px;"
                                    class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Contact
                                    Us</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="arrows">
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                    <label for="slides_4"></label>
                </div>
                <div class="navigation">
                    <div>
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label for="slides_3"></label>
                        <label for="slides_4"></label>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->

    <!-- about -->
    <div class="what py-5">
        <div class="container py-xl-5 py-lg-3">
            <h4 class="title-w3 mb-sm-4 mb-3 text-bl text-left font-weight-bold">Destinasi Wisata Hiking</h4>
            <div class="blog-grids pt-xl-4">
                <div class="container">
                    <div class="row">
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card border-0 med-blog">
                                <div class="card-header p-0">
                                    <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b1.jpg') }}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body border border-top-0 text-center">
                                    <a href="blog.html" class="blog-title-in card-title m-0">At vero eos</a>
                                    <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                                    <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="card border-0 med-blog">
                                <div class="card-header p-0">
                                    <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b2.jpg') }}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body border border-top-0 text-center">
                                    <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                                    <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                                    <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->
                        <!-- blog grid -->
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="card border-0 med-blog">
                                <div class="card-header p-0">
                                    <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b2.jpg') }}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body border border-top-0 text-center">
                                    <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                                    <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                                    <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- //blog grid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog -->

    <!-- testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-xl-5 py-lg-3">
			<h4 class="title-w3 text-wh text-left font-weight-bold">Acara Dan Festival <a href="#"><small>Selengkapnya</small></a></h4>
            <div class="row pt-xl-4">
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b2.jpg') }}"
                                alt="Card image cap">
                        </div>
                        <div class="card-body border border-top-0 text-center">
                            <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                            <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b2.jpg') }}"
                                alt="Card image cap">
                        </div>
                        <div class="card-body border border-top-0 text-center">
                            <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                            <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <img class="card-img-bottom" src="{{ URL::asset('web-public/images/b2.jpg') }}"
                                alt="Card image cap">
                        </div>
                        <div class="card-body border border-top-0 text-center">
                            <a href="blog.html" class="blog-title-in card-title m-0">Tccus et ius</a>
                            <p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
                            <a href="blog.html" class="btn button-style-3 text-color let">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials -->

    <!-- footer -->
    <footer>
        @extends('layouts.webfooter')
    </footer>
    <!-- //footer -->


</body>

</html>
