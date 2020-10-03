@component('mail::message')
You have a message from
<h2>From: {{$email->email}}</h2>
<h2>Subject: {{$email->subject}}</h2>
<h3>Name: {{$email->name}}</h3>
<p>{{ $email->message }}</p>
<br>Thanks.
@endcomponent
