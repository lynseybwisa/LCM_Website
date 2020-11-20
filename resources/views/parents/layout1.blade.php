<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LCM Parents Portal')</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c6911c03ae.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"
        integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog=="
        crossorigin="anonymous"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
        integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
        crossorigin="anonymous" />
    <!-- bootstrap-select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" />
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-inverse-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item mx-1">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <div class="navbar-text text-dark">
                <h3>
                    Welcome to <a href="" data-toggle="tooltip" data-placement="bottom" class="text-primary"
                        title="Loreto Convent Msongari">LCM</a><span class="text-primary"> Parents' Portal</span>
                </h3>
            </div>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                @guest
                @else
                    <h3 class="text-lg font-weight-bold logout_btn">
                        <a class="badge badge-pill badge-danger " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </h3>
                @endguest
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Image -->
            <a href="/" class="brand-link text-info text-center">
                <img class="m-auto img img-responsive" height="100em" width="100em"
                    src="{{ asset('msongari/logobadge.png') }}" alt="LCM">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user -->
                <div class="user-panel p-1 d-flex">
                    <div class="info">
                        <a href="#" class="d-block btn btn-block bg-transparent disabled text-center m-1">
                            Welcome
                            @guest
                                Guest
                            @else
                                <strong class="text-primary">
                                    {{ Auth::user()->name }}
                                </strong>
                            @endguest
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="m-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">
                        </li>

                        <li class="nav-item">
                            <a href="\" class="nav-link">
                                <i class="nav-icon fas text-info fa-home text-info"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">
                            <i class="nav-icon fas m-0 fa-user-graduate"></i>
                            <sup class="mr-2">
                                <i class="fas fa-cog text-inf" aria-hidden="true"></i>
                            </sup>
                            <b class="text-muted">Students</b>
                            <hr color="aqua">
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-user-graduate text-info"></i>
                                <p>
                                    <sup class="text-sm"><small>My</small></sup>Enrolled Student(s)
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/parents" class="nav-link font-weight-bold">
                                <i class="fas fa-clipboard nav-icon text-info"></i>
                                <p>
                                    <sup class="text-sm"><small>My</small></sup>Students' Reports
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">
                            <i class="fas fa-user nav-icon text-inf"></i>
                            <sup>
                                <i class="fas fa-cog text-inf" aria-hidden="true"></i>
                            </sup>
                            <b class="text-muted">Profile Settings</b>
                            <hr color="aqua">
                        </li>
                        <li class="nav-item">
                            <a href="/parents/{{ Auth::user()->id }}" class="nav-link font-weight-bold">
                                <i class="nav-icon fas fa-eye text-info"></i>
                                <p>
                                    View <sup class="text-sm"><small>My</small></sup>Profile
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="container">
            <div class="content-wrapper" style="background-color: white !important;padding: 0.5rem !important;">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
        <footer class="main-footer static-bottom">
            <strong>
                Copyright &copy; 2020-2021
                <a href="/"> Loreto Convent Msongari</a>
            </strong>
            <span class="mx-2 text-muted"> All rights reserved.</span>
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap 4 and Popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>
    <!-- Bootstrap-select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        });

    </script>
</body>

</html>
