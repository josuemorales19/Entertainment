@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movie Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $movie->MovieName}}</b></h4>
                        <p class="card-text"><b>Synopsis: </b> {{ $movie->MovieSynopsis }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Released Date: </b>{{ $movie->MovieReleaseDate }}</li>
                        <li class="list-group-item"><b>Director: </b>{{ $movie->MovieDirectorID }}</li>
                        <li class="list-group-item"><b>Country: </b>{{ $movie->MovieCountryID }}</li>
                        <li class="list-group-item"><b>Duration in minutes: </b>{{ $movie->DurationInMinutes }}</li>
                        <li class="list-group-item"><b>Oscar Nominations: </b>{{ $movie->MovieOscarNominations }}</li>
                        <li class="list-group-item"><b>Oscar Wins: </b>{{ $movie->MovieOscarWins }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/movies/edit/{{ $movie->_id }}" class="card-link">Edit</a>
                        <a href="/admin/movies/delete/{{ $movie->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
