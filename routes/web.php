<?php

Route::get('/new','ShortLinkController@new');

Route::get('/','ShortLinkController@index');

Route::get('/show/{id}','ShortLinkController@show');

Route::post('/','ShortLinkController@store');




