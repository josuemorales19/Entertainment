@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/anime/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <input class="form-control" type="int" name="genre" id="genre">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="int" name="type" id="type">
                    </div>
                    <div class="form-group">
                        <label for="episodes">Episodes</label>
                        <input class="form-control" type="int" name="episodes" id="episodes">
                    </div>
                    <a href="/admin/anime/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection