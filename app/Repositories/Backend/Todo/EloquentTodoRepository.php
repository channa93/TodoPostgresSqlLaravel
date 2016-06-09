<?php

namespace App\Repositories\Backend\Todo;



/**
 * Class EloquentUserRepository
 * @package App\Repositories\User
 */
class EloquentTodoRepository implements TodoRepositoryContract
{
    /**
     * @var TodoRepositoryContract
     */
    protected $todo;

    public function __construct(
        TodoRepositoryContract $todo
    )
    {
        $this->todo = $todo;
    }


    public function getAllTodos($order_by = 'id', $sort = 'asc')
    {
        return Todos::orderBy($order_by, $sort)
            ->get();
    }


}
