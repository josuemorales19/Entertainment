@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Anime</h1>
                <form action="/admin/movies/edit" method= "POST">
                @csrf
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id }}">
                <div class="form-group">
                        <label for="MovieName">Movie Name</label>
                        <input class="form-control" type="text" name="MovieName" id="MovieName" value="{{ $movie->MovieName }}">
                    </div>
                    <div class="form-group">
                        <label for="MovieReleaseDate">Release Date</label>
                        <input class="form-control" type="int" name="MovieReleaseDate" id="MovieReleaseDate" value="{{ $movie->MovieReleaseDate }}" >
                    </div>
                    <div class="form-group">
                        <label for="MovieDirectorID">Movie Director</label>
                        <input class="form-control" type="text" name="MovieDirectorID" id="MovieDirectorID" value="{{ $movie->MovieDirectorID }}" >
                    </div>
                    <div class="form-group">
                        <label for="MovieCountryID">Movie Country</label>
                        <input class="form-control" type="text" name="MovieCountryID" id="MovieCountryID" value="{{ $movie->MovieCountryID }}" >
                    </div>
                    <div class="form-group">
                        <label for="MovieSynopsis">Synopsis</label>
                        <input class="form-control" type="text" name="MovieSynopsis" id="MovieSynopsis" value="{{ $movie->MovieSynopsis }}" >
                    </div>
                    <div class="form-group">
                        <label for="DurationInMinutes">Duration In Minutes</label>
                        <input class="form-control" type="int" name="DurationInMinutes" id="DurationInMinutes" value="{{ $movie->DurationInMinutes }}" >
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarNominations">Oscar Nominations</label>
                        <input class="form-control" type="int" name="MovieOscarNominations" id="MovieOscarNominations" value="{{ $movie->MovieOscarNominations }}" >
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarWins">Oscar Wins</label>
                        <input class="form-control" type="int" name="MovieOscarWins" id="MovieOscarWins" value="{{ $movie->MovieOscarWins }}" >
                    </div>              
                <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection