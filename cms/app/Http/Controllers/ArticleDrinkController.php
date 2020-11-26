<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
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
        if($request->file('image')){
            $image = $request->file('image')->store('images','public');
            }
        Drink::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $image
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
        if($drink->featured_image && 
        file_exists(storage_path('app/public/' . $drink->featured_image)))
        {
            \Storage::delete('public/'.$drink->featured_image);
        }
        $image = $request->file('image')->store('images', 'public');
        $drink->featured_image = $image;
        $drink->save();
        return redirect('/manageDrink');
    }
    public function delete($id){
        $drink = Drink::find($id);
        $drink->delete();
        return redirect('/manageDrink');
    }
    
    public function __construct()
    {
    $this->middleware('auth');
    // $this->middleware(function($request, $next){
    //     if(Gate::allows('home')) return $next($request);
    //     abort(403, 'Anda tidak memiliki cukup hak akses');
    //     });
    }
}
