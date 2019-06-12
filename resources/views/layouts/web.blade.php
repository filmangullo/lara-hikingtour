<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Befit Sports Category Bootstrap Responsive Website Template | About Us :: W3layouts</title>
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
    <link rel="stylesheet" href="{{ URL::asset('web-public/css/style.css' ) }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ URL::asset('frontend/css/font-awesome.min.css' ) }}" rel="stylesheet">
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
                                <li><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                                @endif
                            </ul>
                            <ul class="menu">
                                <li><a href="/" class="active">Home</a></li>
                                <li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="about.html">About Us</a></li>
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
                                <li><a href="/kontak">Kontak</a></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- //nav -->
                </div>
            </div>
        </header>
        <!-- //header -->

        <!-- banner -->
        <div class="banner_w3lspvt-2">

        </div>
        <!-- //banner -->
    </div>
    <!-- //main banner -->
@yield('content')
    <!-- footer -->
    <footer>
        @extends('layouts.webfooter')
    </footer>
    <!-- //footer -->
</body>

</html>
