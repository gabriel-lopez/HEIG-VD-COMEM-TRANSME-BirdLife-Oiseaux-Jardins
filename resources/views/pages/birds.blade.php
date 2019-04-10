@extends('layouts.main')

@section('content')

    <div class="container">
        {{ $birds->links() }}

        <div class="row">
            @foreach($birds as $key => $bird)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        @if (count($bird->pictures))
                            <img src="/pictures/{{$bird->pictures[0]->filename}}" class="card-img-top" alt="{{ $bird->name }}">
                        @else
                            <img src="/pictures/Zozo.jpg" class="card-img-top" alt="Zozo">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $bird->name_fr }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="/birds/{{$bird->id}}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $birds->links() }}
    </div>

@endsection
