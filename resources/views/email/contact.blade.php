@component('mail::message')
# Message from user

<strong>FullName:</strong>{{ $data['fullname'] }}<br>
<strong>Email:</strong>{{ $data['email'] }}<br>
<strong>Phone:</strong>{{ $data['phone'] }}<br>
<strong>Message:</strong>{{ $data['message'] }}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
