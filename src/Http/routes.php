<?php
/*
Route::group(['middleware' => ['web']], function () {
 Route::get('category/{slug?}', 'Nneed\Products\Http\Controllers\PrsoCategoryController@show');
});*/
Route::group(['middleware' => ['web'], 'namespace' => 'Nneed\Products\Http\Controllers'], function () {
Route::get('category/{slug?}', 'PrsoCategoryController@show');
});