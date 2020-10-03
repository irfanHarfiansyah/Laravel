  
<?php








Route::get('/', 'FirstPageController@index');

Route::get('/Cake', 'CakeController@index'); 

Route::get('/Food', 'FoodController@index'); 

Route::get('/Drink', 'DrinkController@index'); 

Route::get('/articleCake/{id}', 'ArticleCakeController@index');

Route::get('/articleFood/{id}', 'ArticleFoodController@index');

Route::get('/articleDrink/{id}', 'ArticleDrinkController@index');
