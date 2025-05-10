{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}


@component('mail::message')
# Registration Received

Hello {{ $data['fistname'] }},

Thank you for registering with us.Kindly view the documents attached with our invitation letter.



Thanks,<br>
{{ config('app.name') }}
@endcomponent
