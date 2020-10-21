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
    public function manage(){
        $drink = Drink::all();
        return view('manage.manageDrink', ['drink' => $drink]);
    }
    public function add(){
        return view('manage.AddDrink');
    }
    public function create(Request $request){
        Drink::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
    ]);
        return redirect('/manageDrink');
    }
    public function edit($id){
        $drink = Drink::find($id);
        return view('manage.editDrink',['drink'=>$drink]);
    }
    public function update($id, Request $request){
        $drink = Drink::find($id);
        $drink->title = $request->title;
        $drink->content = $request->content;
        $drink->featured_image = $request->image;
        $drink->save();
        return redirect('/manageDrink');
    }
    public function delete($id){
        $drink = Drink::find($id);
        $drink->delete();
        return redirect('/manageDrink');
    }
}
