@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($movie as $movie)
            <div class="col-md-3 col-sm-6 mb-4 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">{{ $movie->title }}</h4>
                        <h5 class="card-title">Originale: {{ $movie->original_title }}</h5>
                        <p class="card-text">Voto: {{ $movie->vote }}/10</p>
                        <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


 
@endsection