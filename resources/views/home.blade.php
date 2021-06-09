<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- jquery vendor -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/lib/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sweetalert/sweetalert.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/js/dashboard2.js') }}"></script>
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo">
                        <a href="index.html">
                            {{-- <img src="{{ asset('assets/images/logo.png') }}" alt="" /> --}}
                            <span>Focus</span>
                        </a>
                    </div>
                    <li class="label">Quán lý quảng cáo</li>
                    <li><a href="app-event-calender.html"><i class="ti-bookmark"></i> Quảng cáo logo</a></li>
                    <li><a href="app-email.html"><i class="ti-home"></i> Quảng cáo home</a></li>
                    <li><a href="app-profile.html"><i class="ti-book"></i> Quảng cáo tin tức</a></li>
                    <li><a href="app-widget-card.html"><i class="ti-layout"></i> Quảng cáo banner scorecard</a></li>
                    <li class="label">Quán lý tài khoản</li>
                    <li><a href="{{ url('cms/user') }}"><i class="ti-user"></i> Danh sách tài khoản</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-outline dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-expanded="true">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#1"><i class="ti-user"></i> Profile</a></li>
                                <li><a href="{{ url('logout') }}"><i class="ti-power-off"></i> Logout</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('page-content')
            </div>
        </div>
    </div>
</body>

</html>