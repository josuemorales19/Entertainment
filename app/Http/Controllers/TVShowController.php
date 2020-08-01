<?php

namespace App\Http\Controllers;
use MongoDB;
use Illuminate\Http\Request;

class TVShowController extends Controller
{

    // -----------------------A D M I N----------------------- //


    //-------INDEX-------//

    public function Index() {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshows = $collection->find();  
        return view('Admin.TV_Shows.index', ['tvshows' => $tvshows]);
    }


    //-------CREATE------//

    public function Create() {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = $collection->find();
        return view('Admin.TV_Shows.create', [ "tvshow" => $tvshow ]);
    }


    public function Store() {
        $tvshow = [
            "Title" => request("Title"),
            "Actors" => request("Actors"),
            "Country" => request("Country"),
            "Genre" => request("Genre"),
            "Language" => request("Language"),
            "Plot" => request("Plot"),
            "Rated" => request("Rated"),
            "Released" => request("Released"),
            "Type" => request("Type"),
            "Writer" => request("Writer"),
            "comments" => [],
            "rating" => []
        ];
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $insertOneResult = $collection->insertOne($tvshow);
        return redirect("/admin/tv_shows");
    }


    //-------------DELETE-------------//

    public function Delete($id) {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.TV_Shows.delete', [ "tvshow" => $tvshow ]);
    }
    

    public function Remove(){
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("tvshowid"))
        ]);
        return redirect('/admin/tv_shows/');
    }


    //-------------DETAILS-------------//

    public function Show($id) {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);

        return view('Admin.TV_Shows.details', [ "tvshow" => $tvshow ]);
    }


    //-------EDIT------//


    public function Edit($id) {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.TV_Shows.Edit', [ "tvshow" => $tvshow ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = [
            "Title" => request("Title"),
            "Actors" => request("Actors"),
            "Country" => request("Country"),
            "Genre" => request("Genre"),
            "Language" => request("Language"),
            "Plot" => request("Plot"),
            "Rated" => request("Rated"),
            "Released" => request("Released"),
            "Type" => request("Type"),
            "Writer" => request("Writer"),
            "comments" => [],
            "rating" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("tvshowid"))
        ], [
            '$set' => $tvshow
        ]);
        return redirect('/admin/tv_shows/');
    }

    ///////////---END ADMIN SECTION---///////////





    // --------------------U S E R-------------------- //


    //--------INDEX-------//

    public function TVShowCatalog() {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshowsCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $tvshows = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('TV_Shows.index', ['tvshows' => $tvshows, 'tvshowsCount' => $tvshowsCount]);
    }


    //------ADD COMMENT------//

    public function AddComment() {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $tvshow = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('tvshowid')) ]);
        $comments = $tvshow->comments;
        if (count($comments) == 0 || $comments == null || empty($comments)) {
            $comments = [$comment];
        } else {
            $comments = [$comment, ...$comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('tvshowid'))
        ],[
            '$set' => [ 'comments' => $comments ]
        ]);

        return redirect("/tv_shows/".request('tvshowid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->Entertainment->TV_Shows;
        $tvshow = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('TV_Shows.Details', [ "tvshow" => $tvshow]);
    }

    ///////////---END USER SECTION---///////////

   
}
