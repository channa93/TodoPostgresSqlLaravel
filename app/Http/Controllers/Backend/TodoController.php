<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Repositories\Backend\Todo\EloquentTodoRepository;
use App\Repositories\Backend\Todo\TodoRepositoryContract;
use App\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
//    private $todo;
//
//    public function __construct(TodoRepositoryContract $todo)
//    {
//        $this->todo = $todo;
//    }

    public function index()
    {

       $allTodos = TodoModel::getAllTodos();
//        var_dump($allTodos);die;
        return view('backend.todo.index')->with('todos',$allTodos);
    }

    public function create()
    {
        return view('backend.todo.create');
    }
}
