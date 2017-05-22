@component('mail::message')
# Hey dear

- {{ $msg->name }}

- {{ $msg->email }}

@component('mail::panel')
 {{ $msg->message }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
