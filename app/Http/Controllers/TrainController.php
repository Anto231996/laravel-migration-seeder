<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('trains.index', ['trains' => $trains]);
    }

    public function show($id){
        $singleTrain = Train::findOrFail($id);
        return view('trains.show', ['singleTrain' => $singleTrain]);
    }
}