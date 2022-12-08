<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 30) as $i) {
            \App\Models\Task::create([
                'project_id' => rand(1, 10),
                'task'       => 
                "- [ ] Task{$i}を完了させる\n\n- [ ] Task{$i}を完了させる2\n- [ ] Task{$i}を完了させる3\n- [ ] Task{$i}を完了させる4\n\n- [ ] Task{$i}を完了させる5"
            ]);
        }
    }
}
