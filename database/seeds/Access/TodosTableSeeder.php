<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder
 */
class TodosTableSeeder extends Seeder
{
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        if (env('DB_CONNECTION') == 'mysql') {
            DB::table(config('access.todos_table'))->truncate();
        } elseif (env('DB_CONNECTION') == 'sqlite') {
            DB::statement('DELETE FROM ' . config('access.todos_table'));
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE todos CASCADE');
        }

        //Add the master administrator, user id of 1
        $todos = [
            [
                'title'              => 'Finish homework',
                'description'             => 'Alogorithm homework',
                'deadline'          => date('2016-06-09'),
                'is_done' => false,
                'user_id' => 1,
                'create_uid' => 1,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'title'              => 'Gym',
                'description'             => 'Walk 20mn',
                'deadline'          => date('2016-06-09'),
                'is_done' => false,
                'user_id' => 1,
                'create_uid' => 1,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table('todos')->insert($todos);

        if (env('DB_CONNECTION') == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}