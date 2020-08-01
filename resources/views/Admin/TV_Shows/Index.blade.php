@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>TV Shows</h1>
                <a class="text-right" href="/admin/tv_shows/create">Add New TV Show</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Title</th>
                        <th scope="col">Plot</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tvshows as $tvshows)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $tvshows->Title}}</td>
                        <td>{{ $tvshows["Plot"] }}</td>
                        <td>{{ $tvshows["Released"] }}</td>
                        
                        <td>
                            <a href="/admin/tv_shows/{{ $tvshows->_id }}">Details</a> |
                            <a href="/admin/tv_shows/edit/{{ $tvshows->_id }}">Edit</a> |
                            <a href="/admin/tv_shows/delete/{{ $tvshows->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection