<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('layout.main');
    }

    public function movies()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('partials.movies', compact('movies'));
    }

    public function about()
    {
        return view('about');
    }
}
