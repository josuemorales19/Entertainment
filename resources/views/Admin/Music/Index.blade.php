@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Music</h1>
                <a class="text-right" href="/admin/music/create">Add New Song</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Song Name</th>
                        <th scope="col">Interpreter</th>
                        <th scope="col">Year</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($music as $music)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $music->title}}</td>
                        <td>{{ $music["artist"] }}</td>
                        <td>{{ $music["year"] }}</td>
                        
                        <td>
                            <a href="/admin/music/{{ $music->_id }}">Details</a> |
                            <a href="/admin/music/edit/{{ $music->_id }}">Edit</a> |
                            <a href="/admin/music/delete/{{ $music->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection