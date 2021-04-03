@component('mail::message')
# Nuovi tag usati

Eccoli:
@foreach($tags as tag) {
  - {{$tags->name}}
}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
