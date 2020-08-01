@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text-right" href="/admin/movies/create">Add New Movie</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($movies as $movies)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $movies->MovieName}}</td>
                        <td>{{ $movies["MovieSynopsis"] }}</td>
                        <td>{{ $movies["MovieReleaseDate"] }}</td>
                        
                        <td>
                            <a href="/admin/movies/{{ $movies->_id }}">Details</a> |
                            <a href="/admin/movies/edit/{{ $movies->_id }}">Edit</a> |
                            <a href="/admin/movies/delete/{{ $movies->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection