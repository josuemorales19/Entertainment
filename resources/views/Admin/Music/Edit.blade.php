@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Song</h1>
                <form action="/admin/music/edit" method= "POST">
                @csrf
                <input type="hidden" name="musicid" id="musicid" value="{{ $music->_id }}">
                <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $music->title }}">
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input class="form-control" type="text" name="artist" id="artist" value="{{ $music->artist }}">
                    </div>
                    <div class="form-group">
                        <label for="top_genre">Top Genre</label>
                        <input class="form-control" type="text" name="top_genre" id="top_genre" value="{{ $music->top_genre }}">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year" value="{{ $music->year }}">
                    </div>
                <a href="/admin/music/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection