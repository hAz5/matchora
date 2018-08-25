<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('images/favicon_1.ico') }}">

    <title>قالب اچ تی ام ال مدیریتی </title>
    @include('inc.css')
</head>
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>تر</i>سا</span></a>
                <!-- Image Logo here -->
                {{--<a href="index.html" class="logo">--}}
                {{--<i class="icon-c-logo"> <img src="{{ url('images/logo_sm.png" height="42') }}"/> </i>--}}
                {{--<span><img src="{{ url('images/logo_light.png" height="20') }}"/></span>--}}
                {{--</a>--}}
            </div>
        </div>
        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="md md-menu"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>
                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown top-menu-item-xs">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown"
                               aria-expanded="true"><img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img"
                                                         class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> پروفایل</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i>خروج</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
@include('layouts.menu')
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
               @yield('content')
            </div> <!-- container -->
        </div> <!-- content -->

        <footer class="footer text-right">
            © 1397. تمام حقوق محفوظ است
        </footer>
    </div>
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>

@include('inc.js')

</body>
</html>
