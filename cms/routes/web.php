  
<?php




// Route::get('/hello', 'WelcomeController@hello');

// Route::get('/home', 'home1Controller@index'); 


Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/manage', 'ManageController@manage')->name('manage');
Route::get('/manage/add','ManageController@add');
Route::post('/manage/create','ManageController@create');
Route::get('/manage/edit/{id}','ManageController@edit');
Route::post('/manage/update/{id}','ManageController@update');
Route::get('/manage/delete/{id}','ManageController@delete');

Route::get('/manageUser', 'ManageUserController@manageUser')->name('manageUser');
Route::get('/manageUser/addUser','ManageUserController@add');
Route::post('/manageUser/create','ManageUserController@create');
Route::get('/manageUser/editUser/{id}','ManageUserController@edit');
Route::post('/manageUser/update/{id}','ManageUserController@update');
Route::get('/manageUser/delete/{id}','ManageUserController@delete');


Auth::routes();
Route::get('/home', 'home1Controller@index')->name('home');
