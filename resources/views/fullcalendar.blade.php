<!DOCTYPE html>
<html>

<head>
    <title>LCM School's Calendar</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <style>
        div.box {
            background: #fff;
        }

    </style>
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
                        title="Loreto Convent Msongari">LCM</a><span class="text-primary"> Administrator Portal</span>
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
                        <li class="nav-item">
                            <a href="\galleries\create" class="nav-link">
                                <i class="nav-icon fas text-info fa-photo-video text-info m-0"></i>
                                <sup class="mr-2">
                                    <small>
                                        <i class="fas fa-cog text-info" aria-hidden="true"></i>
                                    </small>
                                </sup>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/calendarAdmin" class="nav-link">
                                <i class="nav-icon fas text-info fa-calendar-alt text-info m-0"></i>
                                <sup class="mr-2">
                                    <small>
                                        <i class="fas fa-cog text-info" aria-hidden="true"></i>
                                    </small>
                                </sup>
                                <p>
                                    Calendar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas text-info fa-file-invoice-dollar text-info m-0"></i>
                                <sup class="mr-2">
                                    <small>
                                        <i class="fas fa-cog text-info" aria-hidden="true"></i>
                                    </small>
                                </sup>
                                <p>
                                    Fee Structures
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
                            <a href="\students" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-user-graduate text-info"></i>
                                <p>
                                    Students List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="\students\create" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-plus text-info"></i>
                                <p>
                                    Register Student
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">
                            <i class="nav-icon fas m-0 fa-chalkboard-teacher"></i>
                            <sup class="mr-2">
                                <i class="fas fa-cog text-inf" aria-hidden="true"></i>
                            </sup>
                            <b class="text-muted">Teachers</b>
                            <hr color="aqua">
                        </li>
                        <li class="nav-item">
                            <a href="\students" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-chalkboard-teacher text-info"></i>
                                <p>
                                    Teachers List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="\students\create" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-plus text-info"></i>
                                <p>
                                    Hire a teacher
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">
                            <i class="nav-icon fas m-0 fa-users"></i>
                            <sup class="mr-2">
                                <i class="fas fa-cog text-inf" aria-hidden="true"></i>
                            </sup>
                            <b class="text-muted">Parents</b>
                            <hr color="aqua">
                        </li>
                        <li class="nav-item">
                            <a href="\students" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-users text-info"></i>
                                <p>
                                    Parents List
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="\students\create" class="nav-link font-weight-bold">
                                <i class="nav-icon fa fa-plus text-info"></i>
                                <p>
                                    Add new parent
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
                            <a href="/students/{{ Auth::id() }}" class="nav-link font-weight-bold">
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

            <div class="slide">
                <div id="home">
                    <div class="container">
                        <div class="content-wrapper"
                            style="background-color: white !important;padding: 0.5rem !important;">
                            @include('inc.messages')
                            <div class="box">
                                <h2 align="center"><a href="#">School Event </a></h2>
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jQuery -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <!-- Bootstrap 4 and Popper.js-->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous">
                </script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                    crossorigin="anonymous">
                </script>
                <!-- AdminLTE App -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
                    integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
                    crossorigin="anonymous"></script>
                <!-- Bootstrap-select -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
                    integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
                    crossorigin="anonymous"></script>
                {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

                <script language="javascript" type="text/javascript">
                    function clearText(field) {
                        if (field.defaultValue == field.value) field.value = '';
                        else if (field.value == '') field.value = field.defaultValue;
                    }

                    $(document).ready(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                        var calendar = $('#calendar').fullCalendar({
                            editable: true,
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay'
                            },
                            events: "{{ asset('php/load.php') }}",
                            //events: 'load.php',
                            //events:"{{ url('/fullcalendar/load') }}"
                            selectable: true,
                            selectHelper: true,
                            select: function (start, end, allDay) {
                                var title = prompt("Enter Event Title");
                                if (title) {
                                    var start = $.fullCalendar.formatDate(start,
                                    "Y-MM-DD HH:mm:ss");
                                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                                    $.ajax({
                                        url: "{{ asset('php/insert.php') }}",
                                        type: "POST",
                                        data: {
                                            title: title,
                                            start: start,
                                            end: end
                                        },
                                        success: function () {
                                            calendar.fullCalendar('refetchEvents');
                                            alert("Added Successfully");
                                        }
                                    })
                                }
                            },
                            editable: true,
                            eventResize: function (event) {
                                var start = $.fullCalendar.formatDate(event.start,
                                    "Y-MM-DD HH:mm:ss");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                var title = event.title;
                                var id = event.id;
                                $.ajax({
                                    url: "{{ asset('php/update.php') }}",
                                    type: "POST",
                                    data: {
                                        title: title,
                                        start: start,
                                        end: end,
                                        id: id
                                    },
                                    success: function () {
                                        calendar.fullCalendar('refetchEvents');
                                        alert('Event Update');
                                    }
                                })
                            },

                            eventDrop: function (event) {
                                var start = $.fullCalendar.formatDate(event.start,
                                    "Y-MM-DD HH:mm:ss");
                                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                                var title = event.title;
                                var id = event.id;
                                $.ajax({
                                    url: "{{ asset('php/update.php') }}",
                                    type: "POST",
                                    data: {
                                        title: title,
                                        start: start,
                                        end: end,
                                        id: id
                                    },
                                    success: function () {
                                        calendar.fullCalendar('refetchEvents');
                                        alert("Event Updated");
                                    }
                                });
                            },

                            eventClick: function (event) {
                                if (confirm("Are you sure you want to remove it?")) {
                                    var id = event.id;
                                    $.ajax({
                                        //url:"delete.php",
                                        url: "{{ asset('php/update.php') }}",
                                        type: "POST",
                                        data: {
                                            id: id
                                        },
                                        success: function () {
                                            calendar.fullCalendar('refetchEvents');
                                            alert("Event Removed");
                                        }
                                    })
                                }
                            },

                        });
                    });

                </script>
</body>

</html>
