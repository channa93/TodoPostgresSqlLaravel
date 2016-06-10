<?php

// Route::get('todo', 'TodoController@index')->name('admin.todo.index');
// Route::get('todo', 'TodoController@index')->name('admin.todo.create');
Route::group(['prefix' => 'todo'], function() {
    Route::get('index', 'TodoController@index')->name('admin.todo.index');
    Route::post('create', 'TodoController@create')->name('admin.todo.create');
    Route::post('update', 'TodoController@update')->name('admin.todo.update');
    Route::get('delete', 'TodoController@delete')->name('admin.todo.delete');
});