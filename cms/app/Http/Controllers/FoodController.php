<?php

namespace App\Http\Controllers;
use App\Food;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

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
}
