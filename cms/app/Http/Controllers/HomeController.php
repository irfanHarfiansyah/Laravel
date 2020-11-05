<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use DB;

class HomeController extends Controller
{
    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Home')->with(compact('article'));

    }

    public function search(Request $request){
        $search = $request->search;
        $result = \DB::table('articles')
        ->where('title','LIKE', "%".$search."%")
        ->paginate();
        return view('home',['article'=>$result]);
    }
}
