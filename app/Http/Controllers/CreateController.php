<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
//        return view('create', ['first' => 'ali', 'second' => 'hassan', 'third' => 'hossein']);

//        $name = [
//            'first' => 'ali',
//            'second' => 'hassan',
//            'third' => 'hossien'
//        ];
//        return view('create', $name);
//**************************************************************************************************
//        return view('create')->with('best', 'Ronaldo');

//        $player = 'ronaldo';
//        return view('create')->with('best', $player);
//**************************************************************************************************
        $name = 'ali';
        $family = 'mumivand';
        $city = 'kangaver';
        return view('create', compact('name', 'family', 'city'));


    }
}
