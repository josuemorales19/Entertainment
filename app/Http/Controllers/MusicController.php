<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    // -----------------------A D M I N----------------------- //


    //-------INDEX-------//

    public function Index() {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->find();  
        return view('Admin.Music.index', ['music' => $music]);
    }


    //-------CREATE------//

    public function Create() {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->find();
        return view('Admin.Music.create', [ "music" => $music ]);
    }


    public function Store() {
        $music = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top_genre" => request("top_genre"),
            "year" => request("year"),
            "comments" => [],
            "rating" => []
        ];
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $insertOneResult = $collection->insertOne($music);
        return redirect("/admin/music");
    }


    //-------------DELETE-------------//

    public function Delete($id) {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Music.delete', [ "music" => $music ]);
    }
    

    public function Remove(){
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("musicid"))
        ]);
        return redirect('/admin/music/');
    }


    //-------------DETAILS-------------//

    public function Show($id) {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.Music.details', [ "music" => $music ]);
    }


    //-------EDIT------//


    public function Edit($id) {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Music.Edit', [ "music" => $music ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top_genre" => request("top_genre"),
            "year" => request("year"),
            "comments" => [],
            "rating" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("musicid"))
        ], [
            '$set' => $music
        ]);
        return redirect('/admin/music/');
    }

    ///////////---END ADMIN SECTION---///////////





    // --------------------U S E R-------------------- //


    //--------INDEX-------//

    public function MusicCatalog() {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $musicCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $music = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Music.index', ['music' => $music, 'musicCount' => $musicCount]);
    }


    //------ADD COMMENT------//

    public function AddComment() {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $music = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('musicid')) ]);
        $comments = $music->comments;
        if (count($comments) == 0 || $comments == null || empty($comments)) {
            $comments = [$comment];
        } else {
            $comments = [$comment, ...$comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('musicid'))
        ],[
            '$set' => [ 'comments' => $comments ]
        ]);

        return redirect("/music/".request('musicid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Entertainment->Music;
        $music = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Music.Details', [ "music" => $music]);
    }

    ///////////---END USER SECTION---///////////
}
