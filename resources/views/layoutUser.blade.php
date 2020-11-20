<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
     <!-- Site Metas -->
    <title>@yield('title', 'Loreto Convent Msongari')</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
     
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" >
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Site CSS -->
    <link rel="stylesheet" href="homepage.css"> 
     <link rel="stylesheet" href="style2.css">  
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    </head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/logo-app.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
        @include('navUser')
    </nav>
    </header> 

     <div class="content ">
    @yield('content')
</div>

<div class="footer-wrapper">
    @include('footer')
</div>  


 <!-- ALL JS FILES -->
     
    <script src="js/all.js"></script>
    <script src=“https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js 52”></script>
    <!-- ALL PLUGINS -->
   <script src="js/main.js"></script>

    <script src="js/custom.js"></script>

    <script src="js/swiper.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            effect: 'coverflow',
            centeredSlides: true,
            loopFillGroupWithBlank: true,
            slidesPerView: 3,
            initialSlide: 3,
            keyboardControl: true,
            mousewheelControl: false,
            lazyLoading: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                575: {
                    slidesPerView: 1,
                    spaceBetween: 3,
                }
            }
        });
      </script>