<?php

use Illuminate\Support\Facades\Route;

//Retrive Data
Route::get('/','RetriveController@selectSpecificData');

//Aggrigate Data
Route::get('/count','AggragatesController@countRow');
Route::get('/maxRow','AggragatesController@maxRow');
Route::get('/avgRow','AggragatesController@avgRow');

//Select Data
Route::get('/uniqueSelect','selectController@uniqueSelect');
Route::get('/singleColumnSelect','selectController@singleColumnSelect');
Route::get('/multiColumnSelect','selectController@multiColumnSelect');

//Marge Data
Route::get('/mergeData','margeController@mergeData');

//Left Join/Right Join
Route::get('/leftJoinData','JoinController@leftJoinData');
Route::get('/rightJoinData','JoinController@rightJoinData');

//Insert Data
Route::get('/insertRow','InsertController@insertRow');

//Delete Data
Route::get('/onDelete','deleteController@onDelete');

//Update Data
Route::get('/onUpdate','updateController@onUpdate');






