@extends('layoutUser')

@section('title', 'LCM | Application Process')

@section('content')



<div class="slider">
    <div class="sliderchild">
      <div class="imagecon" style="background-image: url('images/image28.jpg')"></div>
      <div class="imagecon" style="background-image: url('images/image31.jpg')"></div>
      <div class="imagecon" style="background-image: url('images/image7.jpg')"></div>
      <div class="imagecon"style="background-image: url('images/image9.jpg')"></div>
      <div class="imagecon" style="background-image: url('images/image28.jpg')"></div>
    </div>
  </div>
  
   <div class="container">
<section class="side_nav">
<ul class="nav flex-column">
	<h1>Admissions</h1>
  <li class="nav-item">
    <a class="nav-link active" href="#criteria">Application Process</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#form">Admission form</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="curriculum">School Curriculum and Uniform</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="fee">School Fees</a>
  </li>
</ul>
</section>

<section class="details">
	<div class="criteria" id="criteria">
    <br><br><br>
    <div class="heading">
    <h2>Application Process</h2>
  </div>
  <p>
        Admission takes place at the beginning of every term for the 8-4-4 sytem depending on the availability of vacancies.
        Students wishing to join the school must have marks above 350. They must pass with an average of 60% to get placement.
        Students must take an entrance test for the following subjects:
        <ul>
          <li>Math</li>
          <li>English</li> 
          <li>Kiswahili</li>   
        </ul>
      </p>
      <p>
        For joining the I.G.C.S.E program, entries in year 8 I.G.C.S.E class are drawn from post Std. 7 i.e. (Students currently in class 7 / year 7 and over). The calendar year starts in September.
      We offer up to “O” Level Only. The students sit the May/June examinations.

        The admission office will inform the you whether the you have been accepted at the school.
        All admitted students will have a space reserved upon payment of a deposit fee.
        You can apply online by filling the form below and an admission officer will get back to you.
      </p>

		</div>
  </section>

<section class="details">
  <div class="req">
    <div class="heading">
    <h2>Requirements</h2>
  </div>
  <p>
        An interview fee of Ksh 1000. (non-refundable).</p>
        <p>
        A written application by the student
      </p>

  </div>
</section>
    
<section class="details">
   <div class="form" id="form">
    <br><br><br>
      <div class="heading">
    <h2>Application Form</h2>
  </div>
  <p>
        Click the application form below, fill it online and submit.
        Kindly not that while filling the form, specify if you wish to join our 8-4-4 system or the I.G.C.S.E system. 
        The admission officer will get back to you after recieving your application.
      </p>

    </div>

    <div class="wrapper">
      <div class="btn">
        <button type="button">  <a href="parents">Application Form</a></button>
      </div>
    </div>

  </section>

</div>

@endsection