<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class AlbumsController extends Controller
{
    public function AlbumsStore() {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $albumCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $albums = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Albums.Index', ['albums' => $albums, 'albumCount' => $albumCount]);
    }

    // User

    public function AddComment() {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('albumid')) ]);
        $Comments = $album->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('albumid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/albums/".request('albumid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Albums.Details', [ "album" => $album]);
    }

    // Admin

    public function Index() {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $albums = $collection->find();  
        return view('Admin.Albums.Index', ['albums' => $albums]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = $collection->find();
        return view('Admin.Albums.Create', [ "albums" => $album ]);
    }

    public function Store() {
        $album = [
            "Year" => request("Year"),
            "Album" => request("Album"),
            "Artist" => request("Artist"),
            "Genre" => request("Genre"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $insertOneResult = $collection->insertOne($album);
        return redirect("/admin/albums");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Albums.Edit', [ "album" => $album ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = [
            "Year" => request("Year"),
            "Album" => request("Album"),
            "Artist" => request("Artist"),
            "Genre" => request("Genre"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("albumid"))
        ], [
            '$set' => $album
        ]);
        return redirect('/admin/albums/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Albums.Delete', [ "album" => $album ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("albumid"))
        ]);
        return redirect('/admin/albums/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Albums;
        $album = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Albums.Details', [ "album" => $album ]);
    }

}