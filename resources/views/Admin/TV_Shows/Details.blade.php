@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>TV Show Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $tvshow->Title}}</b></h4>
                        <p class="card-text"><b>Plot: </b> {{ $tvshow->Plot }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Released Date: </b>{{ $tvshow->Released }}</li>
                        <li class="list-group-item"><b>Actors: </b>{{ $tvshow->Actors }}</li>
                        <li class="list-group-item"><b>Country: </b>{{ $tvshow->Country }}</li>
                        <li class="list-group-item"><b>Genre: </b>{{ $tvshow->Genre }}</li>
                        <li class="list-group-item"><b>Language: </b>{{ $tvshow->Language }}</li>
                        <li class="list-group-item"><b>Rated: </b>{{ $tvshow->Rated }}</li>
                        <li class="list-group-item"><b>Type: </b>{{ $tvshow->Type }}</li>
                        <li class="list-group-item"><b>Oscar Wins: </b>{{ $tvshow->Writer }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/tv_shows/edit/{{ $tvshow->_id }}" class="card-link">Edit</a>
                        <a href="/admin/tv_shows/delete/{{ $tvshow->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
