<?php

namespace App\Http\Controllers;
use App\Drink;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DrinkController extends Controller
{
    
    public function index(){    
        Cache::remember('drink', 10, function(){
              return Drink::all();
 
      });
          $drink = Cache::get('drink');
         return view('Drink')->with(compact('drink'));
     }
     public function __construct()
    {
    // $this->middleware('auth');
    $this->middleware(function($request, $next){
        if(Gate::allows('home')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
     public function cetak_pdf(){
        $drink = Drink::all();
        $pdf = PDF::loadview('Reporting.Drink_pdf',['drink'=>$drink]);
        return $pdf->stream();
       }
       
     

}
