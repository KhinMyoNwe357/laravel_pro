@component('mail::message')
# Introduction

{{ $receipe->name }}
Receipe hav been stored.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
