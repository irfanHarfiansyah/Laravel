<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
class ArticleFoodController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    // $this->middleware(function($request, $next){
    // if(Gate::allows('manage')) return $next($request);
    // abort(403, 'Anda tidak memiliki cukup hak akses');
    // });
    }
    public function index($id){
        $food = Food::find($id);
        return view('articleFood', ['id'=>$id])->with(compact('food'));
    
    }
    public function manage(){
        $food = Food::all();
        return view('manage.manageFood', ['food' => $food]);
    }
    public function add(){
        return view('manage.AddFood');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image = $request->file('image')->store('images','public');
            }
        Food::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $image
    ]);
        return redirect('/manageFood');
    }
    public function edit($id){
        $food = Food::find($id);
        return view('manage.editFood',['food'=>$food]);
    }
    public function update($id, Request $request){
        $food = Food::find($id);
        $food->title = $request->title;
        $food->content = $request->content;
        if($food->featured_image && 
        file_exists(storage_path('app/public/' . $food->featured_image)))
        {
            \Storage::delete('public/'.$food->featured_image);
        }
        $image = $request->file('image')->store('images', 'public');
        $food->featured_image = $image;
        $food->save();
        return redirect('/manageFood');
    }
    public function delete($id){
        $food = Food::find($id);
        $food->delete();
        return redirect('/manageFood');
    }
}
