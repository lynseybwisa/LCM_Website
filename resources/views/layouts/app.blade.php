</!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Loreto Convent Msongari')</title>
    <style>
        #container {
            margin-top: 270px !important;
        }

        .logo {

           margin-top: -250px;


        }

        .bodies {
            position: fixed;
        }

        .header {
            z-index: 10;
            width: 100%;
        }

        .navbar-nav {

            margin-left: 200px;
            margin-top: 30px;
        }

        .navbar-light .navbar-nav .nav-link {
            text-align: center;
            font-size: 20px;
            text-decoration: none;
            background: white;
            color: black;
            font-family: "open-sans";
        }


        .navbar-expand-lg .navbar-nav .nav-link {
            padding: 8px 15px;
            font-size: 18px;
            border-bottom: 3px solid #ffffff;
        }

        .navbar-expand-lg .navbar-nav .nav-link:hover {
            background: none;
            color: #e65100;
            border-radius: 0px;
            border-bottom: 3px solid #e65100;
        }

        .navbar-expand-lg .navbar-nav .nav-item.active {
            background: none;
            color: #e65100;
            border-radius: 0px;
            border-bottom: 3px solid #e65100;
        }

        .section {
            display: block;
            position: relative;
            overflow: hidden;
            padding: 120px 0;
        }

        button {
            background: ;
            color: #ccc;
            width: 200px;
            height: 60px;
            border: 1px solid red;
            font-size: 18px;
            border-radius: 4px;
            transition: .6s;
            overflow: hidden;
        }

        button:focus {
            outline: none;
        }

        button:before {
            content: '';
            display: block;
            position: absolute;
            background: rgba(255, 255, 255, .5);
            width: 60px;
            height: 100%;
            left: 0;
            top: 0;
            opacity: .5s;
            filter: blur(30px);
            transform: translateX(-130px) skewX(-15deg);
        }

        button:after {
            content: '';
            display: block;
            position: absolute;
            background: rgba(255, 255, 255, .2);
            width: 30px;
            height: 100%;
            left: 30px;
            top: 0;
            opacity: 0;
            filter: blur(30px);
            transform: translate(-100px) scaleX(-15deg);
        }

        button:hover {
            background: red;
            cursor: pointer;
        }

        button:hover:before {
            transform: translateX(300px) skewX(-15deg);
            opacity: .6;
            transition: .7s;
        }

        button:hover:after {
            transform: translateX(300px) skewX(-15deg);
            opacity: 1;
            transition: .7s;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
        integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        @include('layouts.nav')
    </header>
        <div id="container" class="container">
            @include('inc.messages')
            @yield('content')
        </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"
        integrity="sha512-7g5NUcH79A/d1+q+cj3KTJ31mCUPkD8f58sFEc98H5015295lT+ZBKWkaMeS6Snbu3m2VdfoW4VbSo9hOAJqYw=="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"
        integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA=="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function (event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: false,
                    showArrows: true,
                    wrapping: true
                });
            });

            $('.filter-container').filterizr({
                gutterPixels: 1,
                delay: 70,
                delayMode: 'progressive',
                easing: 'ease-out',
                layout: 'packed'
            });
            $('.btn[data-filter]').on('click', function () {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
            $( ".figure-img" ).width("150px");
            $( ".figure-img" ).height("150px");
        })

    </script>

</body>
</html>
{{-- 
    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/c6911c03ae.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/stingo.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div id="app">
            <div class="d-flex flex-column border-0 blueoverlay">
                <div class="card bg-transparent border-0 mb-0">
                    <img style="cursor: none;" class="m-auto img img-responsive" height="100em" width="100em"
                        src="{{ asset('msongari/logobadge.png') }}" alt="LCM">
                    <h5 class="card-title text-center text-danger">Loreto Convent
                        Msongari</h5>
                </div>
                <nav class="m-0 p-0 navbar navbar-expand-md navbar-default
                            navbar-fixed-top w-100" id="navlogo">
                    <button class="m-auto navbar-toggler border-0" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
                            navigation">
                        <span class="fas fa-angle-double-down"></span>
                    </button>
                    <div class="flex-fill blueoverlay mt-0 pt-0 navbar navbar-expand-md
                            w-100 bg-transparent collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            @guest
                            @else
                                <li class="nav-item">
                                    <h2 class="m-auto btn btn-info">
                                        {{ Auth::user()->name }}
                                        <small>
                                            <a class="badge badge-pill badge-danger"
                                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </small>
                                    </h2>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            @endguest
                        </ul>
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="\home">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="\galleries">Gallery</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="moreabout" data-toggle="dropdown" href="">About</a>
                                <div class="dropdown-menu" aria-labelledby="moreabout">
                                    <a href="#" class="dropdown-item text-dark">Mission</a>
                                    <a href="#" class="dropdown-item text-dark">Vision</a>
                                    <a href="#" class="dropdown-item text-dark">Contact Us</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">Admissions</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="schlevels"
                                    href="#">School
                                    Levels</a>
                                <div class="dropdown-menu" aria-labelledby="schlevels">
                                    <a href="#" class="dropdown-item text-dark">Kindergarten</a>
                                    <a href="#" class="dropdown-item text-dark">Primary</a>
                                    <a href="#" class="dropdown-item text-dark">Secondary</a>
                                    <a href="#" class="dropdown-item text-dark">IGCSE</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="stddropdown" data-toggle="dropdown"
                                    href="#">Students</a>
                                <div class="dropdown-menu" aria-labelledby="stddropdown">
                                    <a class="dropdown-item text-dark" href="#">1</a>
                                    <a class="dropdown-item text-dark" href="#">2</a>
                                    <a class="dropdown-item text-dark" href="#">3</a>
                                    <a class="dropdown-item text-dark" href="#">4</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="stddropdown" data-toggle="dropdown"
                                    href="#">Portals</a>
                                <div class="dropdown-menu" aria-labelledby="stddropdown">
                                    <a class="dropdown-item text-dark" href="\students">Administrator</a>
                                    <a class="dropdown-item text-dark" href="\teachers">Teacher</a>
                                    <a class="dropdown-item text-dark" href="\parents">Parent</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <main class="">
                @include('inc.messages')
                @yield('content')

            </main>
        </div>

    </body>

    </html> 
--}}
