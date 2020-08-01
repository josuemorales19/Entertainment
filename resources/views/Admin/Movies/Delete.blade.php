@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/movies/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id }}">
                <div class="form-group">
                        <label for="MovieName">Movie Name</label>
                        <input class="form-control" type="text" name="MovieName" id="MovieName" value="{{ $movie->MovieName }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieReleaseDate">Release Date</label>
                        <input class="form-control" type="int" name="MovieReleaseDate" id="MovieReleaseDate" value="{{ $movie->MovieReleaseDate }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieDirectorID">Movie Director</label>
                        <input class="form-control" type="text" name="MovieDirectorID" id="MovieDirectorID" value="{{ $movie->MovieDirectorID }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieCountryID">Movie Country</label>
                        <input class="form-control" type="text" name="MovieCountryID" id="MovieCountryID" value="{{ $movie->MovieCountryID }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieSynopsis">Synopsis</label>
                        <input class="form-control" type="text" name="MovieSynopsis" id="MovieSynopsis" value="{{ $movie->MovieSynopsis }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="DurationInMinutes">Duration In Minutes</label>
                        <input class="form-control" type="int" name="DurationInMinutes" id="DurationInMinutes" value="{{ $movie->DurationInMinutes }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarNominations">Oscar Nominations</label>
                        <input class="form-control" type="int" name="MovieOscarNominations" id="MovieOscarNominations" value="{{ $movie->MovieOscarNominations }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarWins">Oscar Wins</label>
                        <input class="form-control" type="int" name="MovieOscarWins" id="MovieOscarWins" value="{{ $movie->MovieOscarWins }}" disabled>
                    </div>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection