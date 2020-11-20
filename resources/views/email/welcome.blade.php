@component('mail::message')
# New Students Application

Hello from Loreto Msongari

An application for the following student has been submitted

<strong>Students Name:</strong>{{$student['Students_name']}}<br>
<strong>Nationality:</strong>{{$student['Nationality']}}<br>
<strong>Date of Birth:</strong>{{$student['DOB']}}<br>
<strong>Previous school:</strong>{{$student['Previous_School']}}<br>
<strong>Entry Date:</strong>{{$student['Entry_date']}}<br>
<strong>Boarding:</strong>{{$student['Entry_date']}}<br>
<strong>Father's name:</strong>{{$parent['Father_name']}}<br>
<strong>Mother's name:</strong>{{$parent['Mother_name']}}<br>
<strong>Father's tel:</strong>{{$parent['Father_tel']}}<br>
<strong>Mother's tel:</strong>{{$parent['Mother_tel']}}<br>
<strong>Father's email:</strong>{{$parent['Father_email']}}<br>
<strong>Mother's email:</strong>{{$parent['Mother_email']}}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent

