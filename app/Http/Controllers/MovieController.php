<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    // -----------------------A D M I N----------------------- //


    //-------INDEX-------//

    public function Index() {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movies = $collection->find();  
        return view('Admin.Movies.index', ['movies' => $movies]);
    }


    //-------CREATE------//

    public function Create() {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = $collection->find();
        return view('Admin.Movies.create', [ "movie" => $movie ]);
    }


    public function Store() {
        $movie = [
            "MovieName" => request("MovieName"),
            "MovieReleaseDate" => request("MovieReleaseDate"),
            "MovieDirectorID" => request("MovieDirectorID"),
            "MovieCountryID" => request("MovieCountryID"),
            "MovieSynopsis" => request("MovieSynopsis"),
            "DurationInMinutes" => request("DurationInMinutes"),
            "MovieOscarNominations" => request("MovieOscarNominations"),
            "MovieOscarWins" => request("MovieOscarWins"),
            "comments" => [],
            "rating" => []
        ];
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $insertOneResult = $collection->insertOne($movie);
        return redirect("/admin/movies");
    }


    //-------------DELETE-------------//

    public function Delete($id) {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.delete', [ "movie" => $movie ]);
    }
    

    public function Remove(){
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("movieid"))
        ]);
        return redirect('/admin/movies/');
    }


    //-------------DETAILS-------------//

    public function Show($id) {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.Movies.details', [ "movie" => $movie ]);
    }


    //-------EDIT------//


    public function Edit($id) {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Movies.Edit', [ "movie" => $movie ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = [
            "MovieName" => request("MovieName"),
            "MovieReleaseDate" => request("MovieReleaseDate"),
            "MovieDirectorID" => request("MovieDirectorID"),
            "MovieCountryID" => request("MovieCountryID"),
            "MovieSynopsis" => request("MovieSynopsis"),
            "DurationInMinutes" => request("DurationInMinutes"),
            "MovieOscarNominations" => request("MovieOscarNominations"),
            "MovieOscarWins" => request("MovieOscarWins"),
            "comments" => [],
            "rating" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("movieid"))
        ], [
            '$set' => $movie
        ]);
        return redirect('/admin/movies/');
    }

    ///////////---END ADMIN SECTION---///////////





    // --------------------U S E R-------------------- //


    //--------INDEX-------//

    public function MovieCatalog() {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movieCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $movies = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Movies.index', ['movies' => $movies, 'movieCount' => $movieCount]);
    }


    //------ADD COMMENT------//

    public function AddComment() {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $movie = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('movieid')) ]);
        $comments = $movie->comments;
        if (count($comments) == 0 || $comments == null || empty($comments)) {
            $comments = [$comment];
        } else {
            $comments = [$comment, ...$comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('movieid'))
        ],[
            '$set' => [ 'comments' => $comments ]
        ]);

        return redirect("/movies/".request('movieid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Entertainment->Movies;
        $movie = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Movies.Details', [ "movie" => $movie]);
    }

    ///////////---END USER SECTION---///////////
}
