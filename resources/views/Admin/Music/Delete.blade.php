@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Song</h1>
                <form action="/admin/music/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="musicid" id="musicid" value="{{ $music->_id }}">
                <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $music->title }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input class="form-control" type="text" name="artist" id="artist" value="{{ $music->artist }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="top_genre">Top Genre</label>
                        <input class="form-control" type="text" name="top_genre" id="top_genre" value="{{ $music->top_genre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year" value="{{ $music->year }}" disabled>
                    </div>
                    <a href="/admin/music/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection