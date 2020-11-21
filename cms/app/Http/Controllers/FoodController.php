<?php

namespace App\Http\Controllers;
use App\Food;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        
        Cache::remember('food', 10, function(){
              return Food::all();
 
      });
          $food = Cache::get('food');
         return view('Food')->with(compact('food'));
     }
     public function __construct()
     {
     $this->middleware('auth');
     }
     public function cetak_pdf(){
        $food = Food::all();
        $pdf = PDF::loadview('Reporting.Food_pdf',['food'=>$food]);
        return $pdf->stream();
       }
       

}
