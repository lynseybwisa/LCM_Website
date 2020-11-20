@extends('layoutUser')

@section('title', 'LCM | Application Process')

@section('content')

<div class="slider">
    <div class="sliderchild">
      <div class="imagecon" style="background-image: url('images/image6.jpg')"></div>
      <div class="imagecon"></div>
      <div class="imagecon"></div>
      <div class="imagecon"></div>
      <div class="imagecon"></div>
    </div>
  </div>

  <div class="container">
  	<section class="side_nav">
<ul class="nav flex-column">
	<h1>Admissions</h1>
  <li class="nav-item">
    <a class="nav-link active" href="admissions">Application Process</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admissions">Admission form</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#uni">School Uniform</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#curri">School Curriculum </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="fee">Fee Structure</a>
  </li>
</ul>
</section>
  
<section class="details">
	<div class="uni" id="uni">
    
	<div class="heading">
		<h2>School Uniform</h2>
	</div>
	   <div class="table">
     <table>
       <tr>
         <th>Primary, Secondary, IGCSE</th>
       </tr>
       <tr>
         <td> Skirts – Navy Pleated School Pattern </td>
       </tr>
       <tr>
        <td> Blouse – White Open Collar </td>
      </tr>
      <tr>
         <td> Shoes – Black Leather </td>
      </tr>
      <tr>
        <td> Socks – White Ankle Length </td>
      </tr>
      <tr>
        <td> Pullover – Red ‘V’ neck with Emblem </td>
      </tr>
      <tr>
        <td> Slipover – Red ‘V’ neck with Emble </td>
      </tr>
      <tr>
        <td> Fleece Jacket – Red ‘V’ neck with Logo (school Color) </td>
      </tr>
      <tr>
        <td> Fleece Jacket – Red ‘V’ neck with Logo (school Color) </td>
      </tr>
      <tr>
        <td> Tracksuit ( According to House Colours) </td>
      </tr>
      <tr>
        <td> Pinafore – Navy (For Art) </td>
      </tr>
      <tr>
        <td> House T- Shirt(obtainable at school) </td>
      </tr>
      <tr>
        <td> Sport shoes – well supporting WHITE sports shoes(Tackies) </td>
      </tr>
      <tr>
        <td> Swimming Costume – School Pattern (Available at Colour Talk) </td>
      </tr>
      <tr>
        <td> Towel for Swimming </td>
      </tr>
      <tr>
        <td> Swimming Cap </td>
      </tr>
      <tr>
        <td> Purple V-neck T-shirt with Emblem for Boarders </td>
      </tr>
      <tr>
        <td> Hard collar white shirts for Prefects </td>
      </tr>
      <tr>
        <td> Black hair tie </td>
      </tr>
      <tr>
        <th> Note </th>
      </tr>
      <tr>
        <td> Every item to be clearly marked with the child’s full name. </td>
      </tr>
      <tr>
        <td> Wearing if school uniform is strictly compulsory. </td>
      </tr>
      <tr>
        <td> Every item of cloathing MUST be of the right colour and pattern </td>
      </tr>
      <tr>
        <th> Recommended Outlets to Purchase Uniform Articles: </th>
      </tr>
      <tr>
        <td>
          School Outfitters. Muindi Mbingu Street, Op. City Market. 
          (schooloutfit@gmail.com/ 0725 055 055 / 0733 154 679)
        </td>
      </tr>
      <tr>
        <td>
          Haria Uniforms Ltd. First Floor Sarit Center, Westlands.
          (hariauniform@gmail.com/ 0786 624 468 / 0772 460 697)
        </td>
      </tr>
      <tr>
        <td>
          Animet Ltd. 3rd Floor, Yaya Center Argwings Kodhek Road. 
          (uniforms@wananchi.com/ 0701 018 180 / 0772 018 180)
        </td>
      </tr>
      <tr>
        <td>
          Animet Ltd. 2nd Floor, T-Mall, Langata / Mbagathi Road.
          (0772 715 998 / 0716 860 950)
        </td>
      </tr>

     </table>
   </div> 
</div>
</section>

<section class="details">
<div class="curri" id="curri">

	<div class="heading">
		<h2>School Curriculum</h2>
	</div>
	<p>
      The School offers a broad range of subjects giving each girl an opportunity to excel in areas of her choice within the Kenyan national curriculum. They include:
      <h3>Subjects offered in Primary (8-4-4) </h3>
      <ul>
        <li> Languages: English, Kiswahili, French </li>
        <li> Sciences:Science, Mathematics </li>
        <li> Humanities: C.R.E, SST, Pastoral Program and Hymns which are not examinable </li>
        <li> Technical:  Information Technology </li>
      </ul>
    </p>

    <h3>Subjects offered in Secondary (8-4-4) </h3>
    <ul>
      <li> Languages: English, Kiswahili, French </li>
      <li> Sciences: Biology, Chemistry, Physics, Mathematics </li>
      <li> Creative:, Home Economics, Art and DesignHumanities: History, C.R.E and Geography, Pastoral Program and Hymns which is not examinable </li>
      <li> Technical:  Information Technology, Business studies </li>
    </ul>
    
    <h3>Subjects offered in I.G.C.S.E</h3>
    <ul>
      <li> Languages: English, Kiswahili, French  and Literature </li>
      <li> Sciences: Biology, Chemistry, Physics, Mathematics </li>
      <li> Creative:Art and Design </li>
      <li> Humanities: History, Geography, Pastoral Program and Hymns which is not examinable </li>
      <li> Technical:  Information Technology, Business studies </li>

    </ul>


	</div>
</section>

</div>
@endsection