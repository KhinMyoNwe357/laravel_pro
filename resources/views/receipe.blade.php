@component('mail::message')
# Introduction

{{ $receipe->name }}
Receipe have been stored.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
