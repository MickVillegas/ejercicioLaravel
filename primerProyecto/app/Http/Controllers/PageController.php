<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cat;
use App\Models\Person;


class PageController extends Controller
{
    public function verGatois(){
        $gatos = Cat::orderby('id', 'DESC')->paginate();
        return view("gattitos", compact("gatos"));
    }

    public function unGato($nombreGato){
        $gato = Cat::where('nombre', $nombreGato)->first();
        return view('unGato', compact('gato'));
    }
}
