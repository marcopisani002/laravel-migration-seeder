<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class TrainController extends Controller
{
    public function index()
    {
        return view('index');
    }


    function home()
    {


        $trains = train::all();

        

        return view("home", [
            "trains" => $trains
        ]);
    }
}
