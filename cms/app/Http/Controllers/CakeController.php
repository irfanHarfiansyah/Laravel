<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class CakeController extends Controller
{   

    
    public function index(){
        
       Cache::remember('article', 10, function(){
             return Article::all();

     });
         $article = Cache::get('article');
        return view('Cake')->with(compact('article'));
    }
    public function __construct()
    {
    $this->middleware('auth');
    // $this->middleware(function($request, $next){
    //     if(Gate::allows('home')) return $next($request);
    //     abort(403, 'Anda tidak memiliki cukup hak akses');
    //     });
    
    }
    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('Reporting.Cake_pdf',['article'=>$article]);
        return $pdf->stream();
       }
       

}
