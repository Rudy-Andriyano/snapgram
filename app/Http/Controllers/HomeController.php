<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $photos = Photo::all();
        return view('home',compact('photos'));
    }
}
