@extends('layoutUser')

@section('title','LCM | Our History')

@section('content')
<head>
    <style type="text/css">
        
.font-weight-light {
    font-family: 'Source Serif Pro', serif
}

 body {
    
     background-repeat: no-repeat;
     color: #000;
     overflow-x: hidden
     height:40%;
 }


.lead{
    color: black;
}


 @media (max-width:767px) {
     
 }

 .intro {
     font-size: 16px;
     max-width: 500px;
     margin: 0 auto
 }

 .intro p {
     margin-bottom: 0
 }

 .people {
     padding: 50px 0;
     cursor: pointer
 }

 .item {
     margin-bottom: 30px
 }

 .item .box {
     text-align: center;
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center;
     height: 280px;
     position: relative;
     overflow: hidden
 }

 .item .cover {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: rgba(31, 148, 255, 0.75);
     transition: opacity 0.15s ease-in;
     opacity: 0;
     padding-top: 80px;
     color: #fff;
     text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15)
 }

 .item:hover .cover {
     opacity: 1
 }

 .item .name {
     font-weight: bold;
     margin-bottom: 8px
 }

 .item .title {
     text-transform: uppercase;
     font-weight: bold;
     color: #bbd8fb;
     letter-spacing: 2px;
     font-size: 13px;
     margin-bottom: 20px
 }

 .social {
     font-size: 18px
 }

 .social a {
     color: inherit;
     margin: 0 10px;
     display: inline-block;
     opacity: 0.7
 }

 .social a:hover {
     opacity: 1
 }
    </style>


    
   

    <title></title>
</head>
@include('nav')
<body>
   
<div class="py-5" style="background-color:white;" id="venue">
    <div class="container">
        <div class="row  animate-in-down">
            <div class="p-4 col-md-6 align-self-center text-color">
            
                <h2 >Alumni</h2>
                <p class="lead" style="font-weight: 500">Msongari has an active alumni community of 100 members who support the school in various functions, for example, Kiswahili day, and other academic and social events.</p>
            </div>

            <div class="p-0 col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item"> <img class="d-block img-fluid w-100" src="images/lcm1.jpg" alt="first slide">
                            <div class="carousel-caption">
                                <h3>Alumini Group help in planting a tree</h3>
                                                           </div>
                        </div>
                        <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="images/msongari.jpg" data-holder-rendered="true">
                            <div class="carousel-caption">
                            
                            </div>
                        </div>


                    </div> <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="team-grid" style=" background-image: linear-gradient(#3F51B5, #1A237E);">
     <div class="container">
         <div class="intro">
             <h2 class="text-center" style="color: #fff">Alumni</h2>
             <p class="text-center" style="color: #fff">Get in touch with some of our Alumini Groups</p>
         </div>
         <div class="row people d-flex justify-content-center">
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(images/msogirl.jpg)">
                     <div class="cover">
                         <h3 class="name">Loreto Msongai alumini group</h3>
                         
                         <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(images/msogirl3.jpg)">
                     <div class="cover">
                         <h3 class="name">Class of 1998</h3>
                         
                         <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(images/lcm1.jpg)">
                     <div class="cover">
                         <h3 class="name">Class of 2000</h3>
                         
                         <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

</body>
</html>

@endsection