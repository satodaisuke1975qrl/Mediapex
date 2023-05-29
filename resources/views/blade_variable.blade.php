{{-- PHP --}}
@php
$number = 100
@endphp

{{--  blade構文  --}}
{{-- 消毒かかっている XSS対策済み --}}
{{ $number }}

