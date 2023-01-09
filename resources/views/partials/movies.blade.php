@extends('home')

@section('content')
    <div class="container">
        <h1>Elenco Film</h1>

        <div class="row d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="x-card col">
                    <div class="title">
                        <span>Title: {{ $movie->title }}</span>
                    </div>
                    <div class="date">
                        <span>Date: {{ $movie->date }}</span>
                    </div>
                    <div class="nationality">
                        <span>Nationality: {{ $movie->nationality }}</span>
                    </div>
                    <div class="nationality">
                        <span>Vote: {{ $movie->vote }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
