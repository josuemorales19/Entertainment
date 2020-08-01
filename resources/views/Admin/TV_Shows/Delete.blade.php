@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/tv_shows/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="tvshowid" id="tvshowid" value="{{ $tvshow->_id }}">
                <div class="form-group">
                        <label for="Title">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title" value="{{ $tvshow->Title }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Actors">Actors</label>
                        <input class="form-control" type="text" name="Actors" id="Actors" value="{{ $tvshow->Actors }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <input class="form-control" type="text" name="Country" id="Country" value="{{ $tvshow->Country }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="text" name="Genre" id="Genre" value="{{ $tvshow->Genre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Language">Language</label>
                        <input class="form-control" type="text" name="Language" id="Language" value="{{ $tvshow->Language }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Plot">Plot</label>
                        <input class="form-control" type="int" name="Plot" id="Plot" value="{{ $tvshow->Plot }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Rated">Rated</label>
                        <input class="form-control" type="int" name="Rated" id="Rated" value="{{ $tvshow->Rated }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Released">Released</label>
                        <input class="form-control" type="int" name="Released" id="Released" value="{{ $tvshow->Released }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" type="text" name="Type" id="Type" value="{{ $tvshow->Type }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Writer">Writer</label>
                        <input class="form-control" type="text" name="Writer" id="Writer" value="{{ $tvshow->Writer }}" disabled>
                    </div>
                    <a href="/admin/tv_shows/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection