@component('mail::message')
    <strong>Name</strong> {{$userev['name']}}
    <strong>Email</strong> {{$userev['email']}}
    <strong>Subject</strong> New Account

    <strong>Message</strong>
   New {{$userev['role']}} Account created

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
