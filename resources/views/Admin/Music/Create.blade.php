@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Song</h1>
                <form action="/admin/music/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title">Song Title</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="artist">Artist</label>
                        <input class="form-control" type="text" name="artist" id="artist">
                    </div>
                    <div class="form-group">
                        <label for="top_genre">Top Genre</label>
                        <input class="form-control" type="text" name="top_genre" id="top_genre">
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input class="form-control" type="int" name="year" id="year">
                    </div>
                    <a href="/admin/music/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection