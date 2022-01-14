@component('mail::message')
# Contact Us  Data

@component('mail::table')
| Subject       | Detail        |
| ------------- |:-------------:|
| First Name      | {{$details['firstname']}}      |
| Last Name      | {{$details['lastname']}}      |
| Email      | {{$details['email']}}      |
| Message     | {{$details['msg']}}      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
