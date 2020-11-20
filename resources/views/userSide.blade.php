@extends('layout1')

@section('title', 'LCM | School Dates')

@section('content')

<!DOCTYPE html>
<html>
<head>
  

  

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <!--Start of Important Calendar scripts-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!--End of of Important Calendar scripts-->
 
  
  
       
<!--End of of Navigation scripts-->


<!--Page Style start-->
  <style >
      div.box{
        background:#fff ;
      }
  </style>
  <!--Page Style start-->


</head>



<body >


   


  <div class="container">
<section class="side_nav" style="margin-top: 150px">
<ul class="nav flex-column">
  <h1>School Dates</h1>
  <li class="nav-item">
    <a class="nav-link active" href="calendar">School Calendar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="termDates">Term Dates</a>
  </li>
</ul>
</section>

<section class="details">
  <div class="calendar">
         <div class="heading" >
              <h2 style="margin:0">School Calendar</h2>
        </div>
  </div>


  <div class="slide" >
  <h3>Search School Events Dates</h3>

  <div class="col-md-4">  

                     <input type="dateFormat" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-4">  
                     <input type="dateFormat" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Search" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               
                               <th >Event Title</th>  
                               <th >From Date</th>  
                               <th >To Date</th>  
                          </tr>  
                    
                     </table>  
                </div>  
           </div>  

<div id="home">
        <div class="container">
    <div class="box">
   <div id="calendar"></div>
  
    </div>
</div> 
</div>

           
</section>
</div>



 
</body>

<!--Start of Calendar function scripts-->
 <script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({
            showOn: "button",
            buttonImage: "{{asset('images/datepicker.png')}}",
            buttonImageOnly: true,  
            dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                       url:"{{asset('php/filter.php')}}",
                          //url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>

 <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
     events:"{{asset('php/load.php')}}",
    //events: 'load.php',
    selectable:true,
    selectHelper:true,
    
    
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

   
   });
  });
   
  </script>

 <!--End of Calendar function scripts-->
</html>
@endsection