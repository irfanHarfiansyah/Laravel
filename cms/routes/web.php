  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');