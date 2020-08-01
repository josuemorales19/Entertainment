@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New TV Show</h1>
                <form action="/admin/tv_shows/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="Title">TV Show Name</label>
                        <input class="form-control" type="text" name="Title" id="Title">
                    </div>
                    <div class="form-group">
                        <label for="Actors">Actors</label>
                        <input class="form-control" type="text" name="Actors" id="Actors">
                    </div>
                    <div class="form-group">
                        <label for="Country">Country</label>
                        <input class="form-control" type="text" name="Country" id="Country">
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="text" name="Genre" id="Genre">
                    </div>
                    <div class="form-group">
                        <label for="Language">Language</label>
                        <input class="form-control" type="text" name="Language" id="Language">
                    </div>
                    <div class="form-group">
                        <label for="Plot">Synopsis</label>
                        <input class="form-control" type="text" name="Plot" id="Plot">
                    </div>
                    <div class="form-group">
                        <label for="Rated">Rated</label>
                        <input class="form-control" type="text" name="Rated" id="Rated">
                    </div>
                    <div class="form-group">
                        <label for="Released">Released</label>
                        <input class="form-control" type="int" name="Released" id="Released">
                    </div>                  
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <input class="form-control" type="text" name="Type" id="Type">
                    </div>
                    <div class="form-group">
                        <label for="Writer">Writer</label>
                        <input class="form-control" type="text" name="Writer" id="Writer">
                    </div>
                    <a href="/admin/tv_shows/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection