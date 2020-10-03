<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ArticleCakeController extends Controller
{
    public function index($id){
        $article = Article::find($id);
        return view('articleCake', ['id'=>$id])->with(compact('article'));
    
    }
}
