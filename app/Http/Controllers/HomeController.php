<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index (Request $request) {
        return view('index', [
            'articles' => Article::all()
        ]);
    }

    public function contact () {
        return view('contact');
    }

    public function about () {
        
        return view('about');
    }
}