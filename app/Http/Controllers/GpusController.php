<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class GpusController extends Controller
{
    public function GpusStore() {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpuCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $gpus = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Gpus.Index', ['gpus' => $gpus, 'gpuCount' => $gpuCount]);
    }

    // User

    public function AddComment() {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $gpu = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('gpuid')) ]);
        $Comments = $gpu->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('gpuid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/gpus/".request('gpuid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Gpus.Details', [ "gpu" => $gpu]);
    }

    //ADMIN

    public function Index() {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpus = $collection->find();  
        return view('Admin.Gpus.Index', ['gpus' => $gpus]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = $collection->find();
        return view('Admin.Gpus.Create', [ "gpus" => $gpu ]);
    }

    public function Store() {
        $gpu = [
            "Architecture" => request("Architecture"),
            "Dedicated" => request("Dedicated"),
            "Manufacturer" => request("Manufacturer"),
            "Name" => request("Name"),
            "Release_Date" => request("Release_Date"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $insertOneResult = $collection->insertOne($gpu);
        return redirect("/admin/gpus");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Gpus.Edit', [ "gpu" => $gpu ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = [
            "Architecture" => request("Architecture"),
            "Dedicated" => request("Dedicated"),
            "Manufacturer" => request("Manufacturer"),
            "Name" => request("Name"),
            "Release_Date" => request("Release_Date"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("gpuid"))
        ], [
            '$set' => $gpu
        ]);
        return redirect('/admin/gpus/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Gpus.Delete', [ "gpu" => $gpu ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("gpuid"))
        ]);
        return redirect('/admin/gpus/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->GlibertDB->Gpus;
        $gpu = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Gpus.Details', [ "gpu" => $gpu ]);
    }

}