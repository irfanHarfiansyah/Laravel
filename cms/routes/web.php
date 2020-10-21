  
<?php




// Route::get('/hello', 'WelcomeController@hello');

// Route::get('/home', 'home1Controller@index'); 
// Route::get('/', function () {
//     return view('FirstPage');
// });

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Auth::routes();

Route::get('/home', 'home1Controller@index')->name('home');

// Route::get('/home', 'FirstPageController@index');

Route::get('/Cake', 'CakeController@index'); 

Route::get('/Food', 'FoodController@index'); 

Route::get('/Drink', 'DrinkController@index'); 

Route::get('/articleCake/{id}', 'ArticleCakeController@index');
Route::get('/manage', 'ArticleCakeController@manage')->name('manage');
Route::get('/manage/add','ArticleCakeController@add');
Route::post('/manage/create','ArticleCakeController@create');
Route::get('/manage/edit/{id}','ArticleCakeController@edit');
Route::post('/manage/update/{id}','ArticleCakeController@update');
Route::get('/manage/delete/{id}','ArticleCakeController@delete');


Route::get('/articleFood/{id}', 'ArticleFoodController@index');
Route::get('/manageFood', 'ArticleFoodController@manage')->name('manage');
Route::get('/manageFood/addFood','ArticleFoodController@add');
Route::post('/manageFood/create','ArticleFoodController@create');
Route::get('/manageFood/editFood/{id}','ArticleFoodController@edit');
Route::post('/manageFood/update/{id}','ArticleFoodController@update');
Route::get('/manageFood/delete/{id}','ArticleFoodController@delete');

Route::get('/articleDrink/{id}', 'ArticleDrinkController@index');
Route::get('/manageDrink', 'ArticleDrinkController@manage')->name('manage');
Route::get('/manageDrink/addDrink','ArticleDrinkController@add');
Route::post('/manageDrink/create','ArticleDrinkController@create');
Route::get('/manageDrink/editDrink/{id}','ArticleDrinkController@edit');
Route::post('/manageDrink/update/{id}','ArticleDrinkController@update');
Route::get('/manageDrink/delete/{id}','ArticleDrinkController@delete');

Auth::routes();

Route::get('/home', 'FirstPageController@index')->name('home');

