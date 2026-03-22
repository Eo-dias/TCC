<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Devs;

class DevsController extends Controller
{
    public function index(){
        $devs = Devs::all();
        
        return view('home')->with('devs',$devs);
    }
}
