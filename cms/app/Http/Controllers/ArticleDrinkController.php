<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use Illuminate\Support\Facades\Cache;
class ArticleDrinkController extends Controller
{
    public function index($id){

        $drink = Drink::find($id);
        return view('articleDrink', ['id'=>$id])->with(compact('drink'));
    
    }
}
