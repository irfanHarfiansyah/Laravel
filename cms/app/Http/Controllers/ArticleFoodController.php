<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use Illuminate\Support\Facades\Cache;

class ArticleFoodController extends Controller
{
    public function index($id){
        $food = Food::find($id);
        return view('articleFood', ['id'=>$id])->with(compact('food'));
    
    }
}
