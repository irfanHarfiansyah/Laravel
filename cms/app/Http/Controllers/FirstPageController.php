<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class FirstPageController extends Controller
{
    public function index(){
        return view('firstPage');
    }
    public function index2(){
        return view('manage.ArticleAdmin');
    }
    // public function __construct()
    // {
    // // $this->middleware('auth');
    // $this->middleware(function($request, $next){
    // if(Gate::allows('home')) return $next($request);
    // abort(403, 'Anda tidak memiliki cukup hak akses');
    // });
    // }
}
