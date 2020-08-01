@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Song Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $music->title}}</b></h4>
                        <p class="card-text"><b>Artist: </b> {{ $music->artist }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Top Genre: </b>{{ $music->top_genre }}</li>
                        <li class="list-group-item"><b>Year: </b>{{ $music->year }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/music/edit/{{ $music->_id }}" class="card-link">Edit</a>
                        <a href="/admin/music/delete/{{ $music->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
