<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
class Home1Controller extends Controller
{

    public function __construct(){
        $this->middleware('auth');
       
    }

    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Home')->with(compact('article'));
    }


}
