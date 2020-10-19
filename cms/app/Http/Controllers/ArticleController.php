<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function index($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    
    }
    public function manage(){
        $article = Article::all();
        return view('manage.manage', ['article' => $article]);
    }
    public function add(){
        return view('manage.AddArticle');
    }
    public function create(Request $request){
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
    ]);
        return redirect('/manage');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('manage.edit',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }



}
