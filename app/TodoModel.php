<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    protected $table = "todos";
    public $timestamps = false;//timestamps(created_at,updated_at)

    public static function getAllTodos(){

//        return TodoModel::orderBy('id','ASC')->get();
        return TodoModel::all();
    }

}
