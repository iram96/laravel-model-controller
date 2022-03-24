<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function index(){
        $movies = Movie::all();
        
        return view('movies.index', compact('movies'));
    }

    public function show($id){

        $movie = Movie::find($id);
        return view('movies.show', compact('movie'));
    }
}
