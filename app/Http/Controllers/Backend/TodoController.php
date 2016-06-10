<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Repositories\Backend\Todo\EloquentTodoRepository;
use App\Repositories\Backend\Todo\TodoRepositoryContract;
use App\TodoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TodoController extends Controller
{


    public function index()
    {

       $allTodos = TodoModel::getAllTodos();
        return view('backend.todo.index')->with('todos',$allTodos);
    }

    public function create()
    {
        return view('backend.todo.create');
    }

    public function delete(Request $request)
    {

    	$id = $_GET;
        var_dump($id);die;
    	$deletTodo = TodoModel::deleteTodo($id);
    }
}
