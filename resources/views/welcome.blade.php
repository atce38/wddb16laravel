@extends('layouts.master')

@section('kuchb')
<h1 class="btn btn-success">Value of A = {{ $a }}</h1>
<h1>Value of B = {{ $b }}</h1>

@if ($a>$b)
    <h4>{{ 'A greater than B' }}</h4>
    @if ($a <13)
        <h4>{{ 'A greater than 13' }}</h4>
    @else
        <h4>{{ 'A less than 13' }}</h4>
    @endif

@else
<h4>{{ 'B greater than A' }}</h4>

    @if ($b<16)
        <h4>{{ 'B less than 16' }}</h4>
    @else
        <h4>{{ 'B Greater than 16' }}</h4>
    @endif
@endif

@foreach ( $arr  as $kuch1)
<h1>{{ $kuch1 }}</h1>

@endforeach
@endsection


