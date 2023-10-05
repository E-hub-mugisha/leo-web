@component('mail::message')
<h2>Hey, It's me {{ $data->names }}</h2> 
<br>
    
<strong>User details: </strong><br>
<strong>Name: </strong>{{ $data->names }} <br>
<strong>Email: </strong>{{ $data->email }} <br>
<strong>Phone: </strong>{{ $data->phone }} <br>
<strong>Subject: </strong>{{ $data->subject }} <br>
<strong>Message: </strong>{{ $data->messages }} <br><br>
  
Thank you,

{{ config('app.name') }}
@endcomponent