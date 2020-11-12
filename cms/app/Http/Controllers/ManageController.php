<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
class ManageController extends Controller
{
    
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
            });
           
    }
    public function index(){
        return view('manage.manage');
    }
    public function manage(){
        $article = Article::all();
        return view('manage.manage', ['article' => $article]);
    }
    public function add(){
        return view('manage.add');
    }
    public function create(Request $request){
        if ($request->file('image')){
            $image = $request->file('image')->store('images', 'public');
        }
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $image,
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
        if($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image)))
            {
            Storage::delete('public/'.$article->featured_image);
            }
            $image = $request->file('image')->store('images', 'public');
            $article->featured_image = $image;
        $article->save();
        return redirect('/manage');
    }
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
    }
}