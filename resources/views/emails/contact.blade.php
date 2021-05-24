@component('mail::message')
You have a new message from {{$data['username']}},
Email : {{$data['email']}}<br>

Subject : {{$data['message']}}<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
