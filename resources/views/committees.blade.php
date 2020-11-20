@extends('parentslayout')
@section('title','LCM | Committees')

@section('content')
 <style type="text/css">
  
  
   .main{
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }
    .main img{
      width: 100%;
      height: 100%;
      filter: grayscale(1);
      transform: .4s;
    }
    input:checked ~ .main label:hover img{
      filter: grayscale(0);
      transform: scale(1.1);
    }
    .main label{
      cursor:pointer;
      margin:auto;
      position: absolute;
      width: 350px;
      height: 320px;
      overflow: hidden;
      border-radius: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,.5);
      transition: .6s;
    }
    .main lable:nth-child(1){transform: rotate(0deg);}
    .main lable:nth-child(2){transform: rotate(10deg);}
    .main lable:nth-child(3){transform: rotate(20deg);}
    .main lable:nth-child(4){transform: rotate(30deg);}

    input{display: none;}
    input:checked ~ .main label {transform: rotate(0);}
    input:checked ~ .main label:nth-child(1){transform: translateX(-390px);}
    input:checked ~ .main label:nth-child(2){transform: translateX(0px);}
    input:checked ~ .main label:nth-child(3){transform: translateX(390px);}
    input:checked ~ .main label:nth-child(4){transform: translateX(550px);}
  
 </style>

<div class="form-group" style="margin-top: 270px;margin-left: 40px">
      <input type="checkbox" name="click" id="click">
      <div class="main">
        <label for="click">
         <!-- <p>-----pic 1</p>-->
         <img  src="http://loretoconventmsongari.com/wp-content/uploads/2019/09/disciplinary-1024x683.jpg"class="d-block w-100" width="250px" height="500px" alt="...">        </label>
         <label for="click">
         <!-- <p>---------pic 2</p>-->
         <img src="http://loretoconventmsongari.com/wp-content/uploads/2019/09/marketting-1024x683.jpg" class="d-block w-100" width="250px" height="500px" alt="...">
        </label>
         <label for="click">
         <!-- <p>-------------------pic 3</p>-->
         <img src="http://loretoconventmsongari.com/wp-content/uploads/2019/09/guidance-1024x683.jpg" class="d-block w-100" width="250px" height="500px" alt="...">
        </label>
        
      </div>
      </div>

<div class="form-group" style="margin-top: 200px">
<div class="col text-center" style="margin-left: -125px;"> <h3>Lorerto Convent Msongari Committees</h3></div>
<div class="col text-center" id="discipline" > <h5>Disciplinary Committee</h5></div>
<div style="width: 900px; margin: auto;">
  <p>The school Disciplinary Committee, is the committee which comprises of five (5) teachers; an elected teacher who shall be the chairperson, the assistant teacher who shall be the secretary and the other three(3) member. The duty of the  Committee is to device measures that will help the students to avoid and shun any engagement whatsoever in the activities of breach of discipline. That is the  Committee In collaboration with the entire member of staff, and class teachers specifically, shall execute orientations and guidance programmes, at least quarterly, with the members of the students’ body in order to create a common understanding with the student to help them (students) to wean themselves from any breach of discipline committed.</p></div>
 
 
    <div class="col text-center" id="marketing"><h5> Marketing Committee </h5></div>
  <div style="width: 900px; margin: auto;">
    <p>The Marketing Committee is an advisory committee to the marketing department. Each
committee member brings unique marketing experience and a wealth of knowledge to share.
Their role is to act as a sounding board for marketing strategies and tools, develop and hone
innovative ideas, and provide feedback on marketing activities as requested by the marketing
team.
</p></div>

  
 <div class="col text-center" id="guidance"><h5> Guidance and Counselling</h5></div>
   <div style="width: 900px; margin: auto;">
     <p>
        Guidance is accepted as an integral part of education. Whatever may be the objectives of school education, students need the assistance of teachers and others connected with them to be able to make satisfactory progress. No student has ever been able to manifest and maximize his potentialities on large extent, make appropriate career plans, get a suitable occupation and make satisfactory adjustment in the society without assistance of guidance programme organised in school.It constitutes parents, teachers, community members, administrators, guidance workers, specialists etc. The cause is, in the modern complex society it has become a difficult task on part of home and community to provide appropriate and adequate guidance to students as per their needs and requirements. Hence, the school has a vital role to play in guiding the students.
     </p>
   </div>

    <div class="col text-center" id="pastoral"> <h5>Pastoral Committee</h5></div>
     <div style="width: 900px; margin: auto;">
       <p>
         Pastoral care is not merely a complementary practice; it is policy and practices fully integrated throughout the teaching and learning and structural organisation of a school to effectively meet the personal, social (wellbeing) and academic needs of students and staff.The health and wellbeing of students is increasingly being attributed to school conditions, school relationships, means of fulfilment, and health status.Subsequently, pastoral care has taken on a more inclusive function, one that is inextricably linked with teaching and learning and the structural organisation of the school - promoting students' personal and social development and fostering positive attitudes</p>
     </div>
     <div class="col text-center"><h5> Academic Commitee</h5></div>
      <div style="width: 900px; margin: auto;">
        <p>
          The academic committee provides a platform for its members to review and thus make suggestions for policies on school curriculum development. The followings are the duties of the academic committee in order to enhance the efficiency of learning and teaching.
        </p>
        <ul class="list-group" style="text-align: left;">
  <li class="list-group-item">1. To review, advise on and develop policies on school curriculum development, medium of instruction, assessment for learning, teaching and learning quality</li>
  <li class="list-group-item">2. To review and formulate policies to enhance students’ learning motivation</li>
  <li class="list-group-item">3. To review and formulate policies to cater for student diversity</li>
  <li class="list-group-item">4. To monitor and following up students’ learning outcomes</li>
  <li class="list-group-item">5. To promote academic activities and creating an atmosphere of learning</li>
   <li class="list-group-item">6. To set up academic reward systems</li>
</ul>
      </div>
       </div>
@endsection