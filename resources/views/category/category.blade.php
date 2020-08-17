@component('mail::message')
# Introduction

{{ $category->name }}
category have been created.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
