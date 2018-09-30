<?php
Route::get('create', 'taskListController@create');
Route::get('/', 'taskListController@index');
Route::get('edit/{cdtask}', 'taskListController@edit');
Route::get('delete/{cdtask}', 'taskListController@destroy');
Route::post('store', 'taskListController@store');
Route::patch('update/{cdtask}', 'taskListController@update');
