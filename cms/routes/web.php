  
<?php




// Route::get('/hello', 'WelcomeController@hello');

// Route::get('/home', 'home1Controller@index'); 
Route::get('/', function () {
    return view('FirstPage');
});

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Auth::routes();

Route::get('/home', 'home1Controller@index')->name('home');
