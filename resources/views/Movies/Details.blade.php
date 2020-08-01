@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                    <div class="card-body">
                    <h5 class="card-title">{{ $movie->MovieName }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->MovieSynopsis }}</h6>
                    <p class="card-text">Released: {{ $movie->MovieReleaseDate }}</p>
                </div>
                <div class="card-footer">
                    <p>Rating:</p>
                    <input type="radio" name="rating" id="rating">&nbsp1 </input>
                    <input type="radio" name="rating" id="rating">&nbsp2 </input>
                    <input type="radio" name="rating" id="rating">&nbsp3 </input>
                    <input type="radio" name="rating" id="rating">&nbsp4 </input>
                    <input type="radio" name="rating" id="rating">&nbsp5 </input>
                </div> 
            </div>

            <div class="col-md-12">
                <h1> <br> Add Comment </br> </h1>
                <form action="/movies/comment" method="POST">
                    @csrf
                    <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id }}">
                    <div class="form-group">
                        <label for="userid">User id</label>
                        <input type="text" class="form-control" name="userid" id="userid">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Add comment</button>
                </form>
            </div>

            <div class="col-md-12">
                <h3> <br> User comments</br> </h3>
                @if (count($movie->comments) == 0 || $movie->comments == null || empty($movie->comments))
                    <h5 class="text-muted">No comments yet.</h5>
                @else
                    @foreach ($movie->comments as $comment)
                    <div class="card col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comment->user_id }}</h5>
                            <p class="card-text">{{ $comment->comment }}</p>
                            <h6 class="card-subtitle mb-2 text-muted">Date Published: {{ $comment->date }} UTC</h6>
                        </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <a href="/anime/" class="card-link"> <br>&nbsp&nbsp&nbsp&nbsp&nbspGo back </br> </a>

        </div>
    </div>
@endsection
