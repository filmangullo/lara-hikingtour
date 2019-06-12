<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ URL::asset('admin-public/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ URL::asset('admin-public/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ URL::asset('admin-public/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- OTHER YIELD-->
    @yield('link')
    <style>
        .kepala {
            color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;
        }

    </style>
    @yield('style')
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Hikingtour</a>
            </div>
            <div class="kepala"> {{ Auth::user()->name }} &nbsp; <a href="{{ route('logout') }}"
                    class="btn btn-danger square-btn-adjust" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>


        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="{{ URL::asset('admin-public/img/find_user.png') }}"
                            class="user-image img-responsive" />
                    </li>


                    <li> 
                        <a href="/admin"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-desktop fa-2x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode fa-2x"></i> Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o fa-2x"></i> Morris Charts</a>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-table fa-2x"></i> Table Examples</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit fa-2x"></i> Forms </a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-bolt fa-2x"></i> Login</a>
                    </li>
                    <li>
                        <a href="registeration.html"><i class="fa fa-laptop fa-2x"></i> Registeration</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-2x"></i> Multi-Level Dropdown<span
                                class="fa arrow fa-2x"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/admin/inbox"><i class="fa fa-envelope-o fa-2x"></i> Inbox Messages</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    <!-- JQUERY SCRIPTS -->
    <script src="{{ URL::asset('admin-public/js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ URL::asset('admin-public/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ URL::asset('admin-public/js/jquery.metisMenu.js') }}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ URL::asset('admin-public/js/custom.js') }}"></script>
    @yield('script')


</body>

</html>
