<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\muvModel;

class movController extends Controller
{
    public function moveFun(){

        $move = muvModel::all();
       

        return view('pages.home', compact('move'));
    }

    public function getElem($id){

        
        
        $movie = muvModel::findOrFail($id);

        return view('pages.move', compact('movie'));
    }
}
