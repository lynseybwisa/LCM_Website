 <!DOCTYPE html>
 <html>

 <head>
     <title>@yield('title', 'Loreto Convent Msongari Term Dates')</title>

     <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 </head>

 <body>
     <header>
         <div class="container">
             @include('navUser')
             @yield('content')
         </div>
     </header>
     <div>
         <ul class="sub-menu">
             <h2 align="left"><u>Calendar</u></h2>
             <li id="menu-item-167"
                 class="ps2id menu-item menu-item-type-custom menu-item-object-custom current-menu-item uabb-creative-menu uabb-cm-style">
                 <a href=termDates><span class="menu-item-text">Term Dates</span></a></li>
             <li id="menu-item-168"
                 class="ps2id menu-item menu-item-type-custom menu-item-object-custom current-menu-item uabb-creative-menu uabb-cm-style">
                 <a href=calendar><span class="menu-item-text">Calendar</span></a></li>
         </ul>
     </div>




     <div class="heading" align="right">
         <h1 style="text-align: center;">Term Dates</h1>
         <p style="text-align: center;"><em><strong>Please note that term dates are provisional and are subject to
                     change. Parents will be informed of any changes to published dates.&nbsp;</strong></em></p>
         <p><strong><br> </strong></p>
     </div>

     <div class="container" align="right">
         <div class="row">
             <div class="col-sm-12">

             </div>
         </div>
         <div class="row">
             <div class="col-sm-8 forceRight">
                 <div class="row">
                     <div class="col-sm-12">
                         <p><strong>2019 / 2020</strong></p>

                         Term Begins ................................................. Tuesday 3rd September 2019<br>
                         First Half Ends ............................................ Friday 11th October 2019<br>
                         Term Resumes ............................................. Tuesday 22nd October 2019<br>
                         Term Ends.................................................... Friday 6th December 2019<br> <br>
                         Term Begins................................................. Tuesday 7th January 2020<br>
                         First Half Ends ............................................ Friday 7th February 2020<br>
                         Term Resumes............................................. Monday 17th February 2020<br>
                         Term Ends.................................................... Friday 27th March 2020<br> <br>
                         Term Begins................................................. Tuesday 21st April 2020<br>
                         First Half Ends ............................................ Tuesday 26th May 2020<br>
                         Term Resumes............................................. Tuesday 2nd June 2020<br>
                         Term Ends.................................................... Friday 3rd July 2020 <br> <br>
                         <br> <strong>2020 / 2021</strong><br>
                         Term Begins................................................. Tuesday 8th September 2020<br>
                         First Half Ends ............................................ Friday 16th October 2020<br>
                         Term Resumes............................................. Monday 26th October 2020<br>
                         Term Ends.................................................... Friday 11th December 2020<br>
                         <br>
                         Term Begins................................................. Tuesday 12th January 2021<br>
                         First Half Ends ............................................ Friday 12th February 2021<br>
                         Term Resumes............................................. Monday 22nd February 2021<br>
                         Term Ends.................................................... Thursday 1st April 2021<br> <br>
                         Term Begins................................................. Tuesday 27th April 2021<br>
                         First Half Ends ............................................ Tuesday 25th May 2021<br>
                         Term Resumes............................................. Monday 31st May 2021<br>
                         ......................................................................NB June 1st – Public
                         Holiday<br>
                         Term Ends.................................................... Friday 9th July 2021<br> <br>
                         <br> <strong>2020 / 2021</strong><br>
                         Term Begins................................................. Tuesday 7th September 2021<br>
                         First Half Ends ............................................ Friday 15th October 2021<br>
                         Term Resumes............................................. Monday 25th October 2021<br>
                         Term Ends.................................................... Friday 10th December 2021<br>
                         <br>
                         Term Begins................................................. Tuesday 11th January 2022<br>
                         First Half Ends ............................................ Friday 11th February 2022<br>
                         Term Resumes............................................. Monday 21st February 2022<br>
                         Term Ends.................................................... Friday 1st April 2022<br> <br>
                         Term Begins................................................. Tuesday 26th April 2022<br>
                         First Half Ends ............................................ Tuesday 31st May 2022<br>
                         Term Resumes............................................. Monday 6th June 2022<br>
                         Term Ends.................................................... Friday 8th July 2022<br> <br>
                         <br>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </body>

 </html>
