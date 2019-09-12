<?php

Route::get('/', 'PagesController@index');
Route::get('/personagem/rocket', 'HeroiController@getRocket');
Route::get('/personagem/demolidor', 'HeroiController@getDaredevil');
Route::get('/personagem/iron-man', 'HeroiController@getIronMan');