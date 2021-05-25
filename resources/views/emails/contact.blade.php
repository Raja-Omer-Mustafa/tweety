@component('mail::message')
# Contact Us Detail

Information of User!

@component('mail::table')
| Name          | Value         |
| ------------- |:-------------:|
| User Name      | {{ $data['username'] }}  |
| Email     | {{ $data['email'] }}  |
| Message   | {{ $data['message'] }}  |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent