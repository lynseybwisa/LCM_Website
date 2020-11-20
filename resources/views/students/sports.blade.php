@extends('layoutUser')
<style>
html, body {
	height: 100%;
  margin-top: 150px;
  color: black;
  font-size: 18px;
  font-weight: 700;
	width:100%;
}


 }

 .py-5{
  margin-top: 150px;
  color: black;
  font-size: 18px;
 }
 #home{
 	background:url(images/msongari.jpg) no-repeat center center fixed;
 	display: table;
 	height: 100%;
 	position:relative;
 	width:100%;
 	background-size: cover;

 }
 .landing-text{
 	display: table-cell;
 	text-align: center;
 	vertical-align: middle;
 	color: white;
 }
 .landing.text h1 {
 	font-size:500%;
 	font-weight: 700;
 }
 .padding{
 	padding:5px 0;
 }

 .lead{
  color: black;
 }
 
 #fixed{
 	
 	display:table;
 	height: 60%;
 	position: relative;
 	width: 100%;
 	background-size: cover;

 } 
 footer{
 	width: 100%;
 	background-color: #23415C;
 	padding: 5% 5% 10% 5%;
 	color:#FFF;
 }
 .fa{
 	padding:15px;
 	color: #FFF;
 	font-size: 25px;
 }
 fa.hover {
 	
 }
</style>

@section('content')

 
 
 
<section class="py-5">
  <div class="container">
      <h1 class="font">Sports and games</h1>
      <p class="lead">At Loreto, we strongly believe in “All work and no play makes Jack a dull boy”. We strive to ensure all the children engage in fun activities to encourage social bonding and mental growth.
        LCM usually holds an annual swimming gala which sets apart the pros from the beginners at swimming.
        <h4>Inter-Loreto Sports</h4>
          <p class="lead"> The event brings together Loreto Msongari, Loreto Valley Road,Loreto Matunda, Loreto Nyakato, Loreto Kiambu and Loreto Mombasa</p>

      </p>
  </div>
</section>
 
 
 <div class="row">
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/msoc.jpg" style="width:100%">
         

        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/mso45.jpg" style="width:100%">
        
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/msom.jpg" style="width:100%">
         
        </a>
      </div>
    </div>
  </div>

   
 <div class="row">
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/msoc.jpg" style="width:100%">
         

        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/mso45.jpg" style="width:100%">
        
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="img-thumbnail">
        <a href="images/mso45.jpg" target="_blank">
          <img src="images/msom.jpg" style="width:100%">
         
        </a>
      </div>
    </div>
  </div>

 
 
   <div class="padding">
   <div class="container">
     <div class="row">
 
         <div class="col-sm-6 ">
         <h4 >the ulitimate luxury experience</h4>
         <p class="lead"> Msongari has an active alumni community of 100 members who support the school in various functions, for example, Kiswahili day, and other academic and social events.
       

         </p>
 
          <p class="lead">Alumni
            Msongari has an active alumni community of 100 members who support the school in various functions, for example, Kiswahili day, and other academic and social events.
            </p>
       </div>
       <div class="col-sm-6">
               <div class="img-thumbnail">
         <a href="images/mso45.jpg" target="_blank">
           <img src="images/mso45.jpg" style="width:100%">
           <div class="caption">
             <p>Our top KCSE students 2016</p>
           </div>
 
         </a>
       </div>
     </div>
       </div>
 
     </div>
   </div>
 </div>
 

 
 
 </body>
 </html>


  
@endsection
