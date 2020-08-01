@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit TV Show</h1>
                <form action="/admin/tv_shows/edit" method= "POST">
                @csrf
                <input type="hidden" name="tvshowid" id="tvshow" value="{{ $tvshow->_id }}">
                <div class="form-group">
                        <label for="Title">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title" value="{{ $tvshow->Title }}" >
                    </div>
                    <div class="form-group">
                        <label for="Actors">Actors</label>
                        <input class="form-control" type="text" name="Actors" id="Actors" value="{{ $tvshow->Actors }}" >
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <input class="form-control" type="text" name="Country" id="Country" value="{{ $tvshow->Country }}" >
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="text" name="Genre" id="Genre" value="{{ $tvshow->Genre }}" >
                    </div>
                    <div class="form-group">
                        <label for="Language">Language</label>
                        <input class="form-control" type="text" name="Language" id="Language" value="{{ $tvshow->Language }}" >
                    </div>
                    <div class="form-group">
                        <label for="Plot">Plot</label>
                        <input class="form-control" type="int" name="Plot" id="Plot" value="{{ $tvshow->Plot }}" >
                    </div>
                    <div class="form-group">
                        <label for="Rated">Rated</label>
                        <input class="form-control" type="int" name="Rated" id="Rated" value="{{ $tvshow->Rated }}" >
                    </div>
                    <div class="form-group">
                        <label for="Released">Released</label>
                        <input class="form-control" type="int" name="Released" id="Released" value="{{ $tvshow->Released }}" >
                    </div>
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" type="text" name="Type" id="Type" value="{{ $tvshow->Type }}" >
                    </div>
                    <div class="form-group">
                        <label for="Writer">Writer</label>
                        <input class="form-control" type="text" name="Writer" id="Writer" value="{{ $tvshow->Writer }}" >
                    </div>              
                <a href="/admin/tv_shows/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection