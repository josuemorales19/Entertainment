@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Movie</h1>
                <form action="/admin/movies/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="MovieName">Movie Name</label>
                        <input class="form-control" type="text" name="MovieName" id="MovieName">
                    </div>
                    <div class="form-group">
                        <label for="MovieReleaseDate">Release Date</label>
                        <input class="form-control" type="int" name="MovieReleaseDate" id="MovieReleaseDate">
                    </div>
                    <div class="form-group">
                        <label for="MovieDirectorID">Movie Director</label>
                        <input class="form-control" type="text" name="MovieDirectorID" id="MovieDirectorID">
                    </div>
                    <div class="form-group">
                        <label for="MovieCountryID">Movie Country</label>
                        <input class="form-control" type="text" name="MovieCountryID" id="MovieCountryID">
                    </div>
                    <div class="form-group">
                        <label for="MovieSynopsis">Synopsis</label>
                        <input class="form-control" type="text" name="MovieSynopsis" id="MovieSynopsis">
                    </div>
                    <div class="form-group">
                        <label for="DurationInMinutes">Duration In Minutes</label>
                        <input class="form-control" type="int" name="DurationInMinutes" id="DurationInMinutes">
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarNominations">Oscar Nominations</label>
                        <input class="form-control" type="int" name="MovieOscarNominations" id="MovieOscarNominations">
                    </div>
                    <div class="form-group">
                        <label for="MovieOscarWins">Oscar Wins</label>
                        <input class="form-control" type="int" name="MovieOscarWins" id="MovieOscarWins">
                    </div>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection