@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Anime Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $anime->name}}</b></h4>
                        <p class="card-text"><b>Genre: </b> {{ $anime->genre }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Type: </b>{{ $anime->type }}</li>
                        <li class="list-group-item"><b>Episodes: </b>{{ $anime->episodes }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/anime/edit/{{ $anime->_id }}" class="card-link">Edit</a>
                        <a href="/admin/anime/delete/{{ $anime->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
