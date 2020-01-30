<?php
/**
 * Created by PhpStorm.
 * User: a2
 * Date: 30/01/20
 * Time: 13:50
 */

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->delete();

        DB::table('tasks')->insert([
            'description' => "Ceci est une tâche",
            'assigned_to' => "Allam",
        ]);
    }
}
