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
    public function manage(){
        $food = Food::all();
        return view('manage.manageFood', ['food' => $food]);
    }
    public function add(){
        return view('manage.AddFood');
    }
    public function create(Request $request){
        Food::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
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
        $food->featured_image = $request->image;
        $food->save();
        return redirect('/manageFood');
    }
    public function delete($id){
        $food = Food::find($id);
        $food->delete();
        return redirect('/manageFood');
    }
}
