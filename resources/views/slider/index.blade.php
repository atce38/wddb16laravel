@extends('layouts.master')

@section('kuchb')

<div id="mcar" class="carousel slide col" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($momna as $index=> $slide)

        <div class="carousel-item {{ $index==0?'active':'' }}">
            <img class="d-block w-100" src="{{ $slide }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#mcar" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    </a>
    <a class="carousel-control-next" href="#mcar" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>

    </a>
</div>
<div class="container top100">
    <div class="row">
        @foreach ($objectives as $objective)
        <div class="col-md text-center">
            <img src="{{ $objective->img }}" alt="">
            <h6 class="top30 font-weight-bold">{{ $objective->title }}</h6>
            <p class="top15 text-secondary">{{ $objective->detail }}</p>
            <a href="{{ $objective->url }}" class="text-success font-weight-bold">Learn More</a>
        </div>
        @endforeach

    </div>
</div>
@endsection
