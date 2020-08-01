@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Anime</h1>
                <form action="/admin/anime/edit" method= "POST">
                @csrf
                <input type="hidden" name="animeid" id="animeid" value="{{ $anime->_id }}">
                <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $anime->name }}">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input class="form-control" type="int" name="genre" id="genre" value="{{ $anime->genre }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="int" name="type" id="type" value="{{ $anime->type }}">
                    </div>
                    <div class="form-group">
                        <label for="episodes">Episodes</label>
                        <input class="form-control" type="int" name="episodes" id="episodes" value="{{ $anime->episodes }}">
                    </div>
                <a href="/admin/anime/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection