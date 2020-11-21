  
<?php





// Route::get('/hello', 'WelcomeController@hello');

// Route::get('/home', 'home1Controller@index'); 
// Route::get('/', function () {
//     return view('FirstPage');
// });

Route::get('/about', 'AboutController@index');
Route::get('/article/{id}', 'ArticleController@index');


Auth::routes();
Route::get('/home', 'FirstPageController@index')->name('firstPage');
Route::get('/homeadmin', 'FirstPageController@index2')->name('homeadmin');


Route::get('/Cake', 'CakeController@index'); 
Route::get('/manage/cetak_pdf', 'CakeController@cetak_pdf');
Route::get('/Food', 'FoodController@index'); 
Route::get('/manageFood/cetak_pdf', 'FoodController@cetak_pdf');
Route::get('/Drink', 'DrinkController@index'); 
Route::get('/manageDrink/cetak_pdf', 'DrinkController@cetak_pdf');

Route::get('/manageUser', 'UserController@manageUser')->name('manageUser');
Route::get('/manageUser/addUser','UserController@add');
Route::post('/manageUser/create','UserController@create');
Route::get('/manageUser/editUser/{id}','UserController@edit');
Route::post('/manageUser/update/{id}','UserController@update');
Route::get('/manageUser/delete/{id}','UserController@delete');
Route::get('/manageUser/cetak_pdf','UserController@cetak_pdf');

Route::get('/articleCake/{id}', 'ArticleCakeController@index');
Route::get('/manage', 'ArticleCakeController@manage')->name('manage');
Route::get('/manage/add','ArticleCakeController@add');
Route::post('/manage/create','ArticleCakeController@create');
Route::get('/manage/edit/{id}','ArticleCakeController@edit');
Route::post('/manage/update/{id}','ArticleCakeController@update');
Route::get('/manage/delete/{id}','ArticleCakeController@delete');


Route::get('/articleFood/{id}', 'ArticleFoodController@index');
Route::get('/manageFood', 'ArticleFoodController@manage')->name('manageFood');
Route::get('/manageFood/addFood','ArticleFoodController@add');
Route::post('/manageFood/create','ArticleFoodController@create');
Route::get('/manageFood/editFood/{id}','ArticleFoodController@edit');
Route::post('/manageFood/update/{id}','ArticleFoodController@update');
Route::get('/manageFood/delete/{id}','ArticleFoodController@delete');

Route::get('/articleDrink/{id}', 'ArticleDrinkController@index');
Route::get('/manageDrink', 'ArticleDrinkController@manage')->name('manageDrink');
Route::get('/manageDrink/addDrink','ArticleDrinkController@add');
Route::post('/manageDrink/create','ArticleDrinkController@create');
Route::get('/manageDrink/editDrink/{id}','ArticleDrinkController@edit');
Route::post('/manageDrink/update/{id}','ArticleDrinkController@update');
Route::get('/manageDrink/delete/{id}','ArticleDrinkController@delete');


