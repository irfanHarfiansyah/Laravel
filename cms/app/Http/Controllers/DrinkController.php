<?php

namespace App\Http\Controllers;
use App\Drink;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(){
        
        Cache::remember('drink', 10, function(){
              return Drink::all();
 
      });
          $drink = Cache::get('drink');
         return view('Drink')->with(compact('drink'));
     }
}
