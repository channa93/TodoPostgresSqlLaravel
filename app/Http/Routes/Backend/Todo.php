<?php

// Route::get('todo', 'TodoController@index')->name('admin.todo.index');
// Route::get('todo', 'TodoController@index')->name('admin.todo.create');
Route::group(['prefix' => 'todo'], function() {
    Route::get('index', 'TodoController@index')->name('admin.todo.index');
    Route::get('create', 'TodoController@create')->name('admin.todo.create');
});