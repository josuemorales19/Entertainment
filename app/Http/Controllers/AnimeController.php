<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    
    // -----------------------A D M I N----------------------- //


    //-------INDEX-------//

    public function Index() {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $animes = $collection->find();  
        return view('Admin.Anime.index', ['animes' => $animes]);
    }


    //-------CREATE------//

    public function Create() {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $animes = $collection->find();
        return view('Admin.Anime.create', [ "animes" => $animes ]);
    }


    public function Store() {
        $animes = [
            "name" => request("name"),
            "genre" => request("genre"),
            "type" => request("type"),
            "episodes" => request("episodes"),
            "comments" => [],
            "rating" => []
        ];
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $insertOneResult = $collection->insertOne($animes);
        return redirect("/admin/anime");
    }


    //-------------DELETE-------------//

    public function Delete($id) {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $anime = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Anime.delete', [ "anime" => $anime ]);
    }
    

    public function Remove(){
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("animeid"))
        ]);
        return redirect('/admin/anime/');
    }


    //-------------DETAILS-------------//

    public function Show($id) {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $anime = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.Anime.details', [ "anime" => $anime ]);
    }


    //-------EDIT------//


    public function Edit($id) {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $anime = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Anime.Edit', [ "anime" => $anime ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $anime = [
            "name" => request("name"),
            "genre" => request("genre"),
            "type" => request("type"),
            "episodes" => request("episodes"),
            "comments" => [],
            "rating" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("animeid"))
        ], [
            '$set' => $anime
        ]);
        return redirect('/admin/anime/');
    }

    ///////////---END ADMIN SECTION---///////////





    // --------------------U S E R-------------------- //


    //--------INDEX-------//

    public function AnimeCatalog() {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $animeCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $animes = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Anime.index', ['animes' => $animes, 'animeCount' => $animeCount]);
    }


    //------ADD COMMENT------//

    public function AddComment() {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $anime = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('animeid')) ]);
        $comments = $anime->comments;
        if (count($comments) == 0 || $comments == null || empty($comments)) {
            $comments = [$comment];
        } else {
            $comments = [$comment, ...$comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('animeid'))
        ],[
            '$set' => [ 'comments' => $comments ]
        ]);

        return redirect("/anime/".request('animeid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Entertainment->Anime;
        $anime = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Anime.Details', [ "anime" => $anime]);
    }

    ///////////---END USER SECTION---///////////
}
