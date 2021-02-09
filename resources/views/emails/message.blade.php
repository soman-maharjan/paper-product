@component('mail::message')
 
Name: {{$message['name']}} <br>
Subject: {{$message['subject']}} <br>

Sender's Email: {{$message['email']}} <br>
Number: {{$message['number']}} <br>

Message: {{$message['message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
