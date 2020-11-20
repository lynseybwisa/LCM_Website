@extends('layoutUser')

@section('title')

@section('content')

<div class="back">
	<div class="swiper-container">
         <div class="swiper-wrapper">
         	<div class="swiper-slide">
	          <div class="card">
		           <div class="test-slider">
		                <h3>Our Vision</h3>
	                  </div>
	                <div class="content">
	    	             <p>To be an exemplary school offering holistic education to the child that makes them globally competitive. </p>
	    	             <a href="#"><i class="fas fa-eye"></i></a>
	                </div>
	           </div>
	        </div>
          <div class="swiper-slide">
            <div class="card">
               <div class="test-slider">
                    <h3>Our Mision</h3>
                    </div>
                  <div class="content">
                     <p>To progressively inculcate in our students the values propagated by Mary Ward our  foundress,through an effective and innovative curriculum within a dynamic society.</p>
                     <a href="#"><i class="fas fa-bullseye"></i></a>
                  </div>
             </div>
          </div>
          <div class="swiper-slide">
            <div class="card">
               <div class="test-slider">
                    <h3>Our Motto</h3>
                    </div>
                  <div class="content">
                     <p>All For The Greater Glory Of God!</p>
                     <a href="#"><i class="fas fa-lightbulb"></i></a>
                  </div>
             </div>
          </div>
        </div>
    </div>
</div>

<div class="anthem" id="anthem">
  @include('about/anthem')
</div>
 

<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
@endsection