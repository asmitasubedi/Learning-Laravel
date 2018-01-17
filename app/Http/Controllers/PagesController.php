<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){

        $first ='Asmita';
        $last = 'Subedi';
        return view('about', compact('first','last'));
//        return view('about', ['first' => 'Asmita']);

    }
}
