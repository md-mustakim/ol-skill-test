@component('mail::message')
Dear **{{ $employee->name }}**,<br>Thank you for your registration. Your registered email address is ‘**{{ $employee->email }}**’ and phone
number ‘**{{ $employee->phone }}**’.
@endcomponent
