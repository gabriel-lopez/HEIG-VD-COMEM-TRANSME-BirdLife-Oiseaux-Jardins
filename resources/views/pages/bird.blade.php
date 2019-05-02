@extends('layouts.main')

@section('content')
    <div class="container">
        @if (count($bird->pictures))
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($bird->pictures as $key => $picture)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if ($key === 0) active @endif"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($bird->pictures as $key => $picture)
                        <div class="carousel-item @if ($key === 0) active @endif">
                            <img src="/pictures/{{$picture->filename}}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        @endif

        <h1>{{$bird->name_fr}}</h1>
    </div>
@endsection
