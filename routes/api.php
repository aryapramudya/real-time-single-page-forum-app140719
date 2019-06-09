<?php

//Route::get('/question','QuestionController@index');
Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');