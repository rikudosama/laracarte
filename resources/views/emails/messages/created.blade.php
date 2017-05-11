@component('mail::message')
# Hey dear

- {{ $name }}

- {{ $email }}

@component('mail::panel')
 {{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
