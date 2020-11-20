@extends('layoutUser')

@section('title', 'LCM | Fee Structure')

@section('content')

 <div class="container">
<section class="side_nav1">
<ul class="nav flex-column">
	<h1>Admissions</h1>
  <li class="nav-item">
    <a class="nav-link active" href="admissions">Application Process</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admissions">Admission form</a>
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
	<div class="fee">
    <br><br><br>
    <div class="heading" style="margin-top: -350px">
    <h2>Fee Structure</h2>
  </div>
  <iframe src="https://drive.google.com/file/d/1_YaO9O33ef2x-0it4cXpERPldPjrFYDY/preview" width="640" height="480" scrolling="no"></iframe>
</div>
</section>
</div>

@endsection