<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = movie::all(); 
        
        return view('app', compact('movies'));
    }
    
}
