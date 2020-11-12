<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
class Home1Controller extends Controller
{
    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Home')->with(compact('article'));
    }
<<<<<<< Updated upstream
=======

    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
       }
       

>>>>>>> Stashed changes
}
