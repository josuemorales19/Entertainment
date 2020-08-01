@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Anime</h1>
                <a class="text-right" href="/admin/anime/create">Add New Anime</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Anime Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Episodes</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($animes as $anime)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $anime->name}}</td>
                        <td>{{ $anime["genre"] }}</td>
                        <td>{{ $anime["episodes"] }}</td>
                        
                        <td>
                            <a href="/admin/anime/{{ $anime->_id }}">Details</a> |
                            <a href="/admin/anime/edit/{{ $anime->_id }}">Edit</a> |
                            <a href="/admin/anime/delete/{{ $anime->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection