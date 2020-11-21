<?php

namespace App\Http\Controllers;
use App\Drink;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
   
    }
    public function index(){
        
        Cache::remember('drink', 10, function(){
              return Drink::all();
 
      });
          $drink = Cache::get('drink');
         return view('Drink')->with(compact('drink'));
     }
     public function cetak_pdf(){
        $drink = Drink::all();
        $pdf = PDF::loadview('Reporting.Drink_pdf',['drink'=>$drink]);
        return $pdf->stream();
       }
       
     

}
