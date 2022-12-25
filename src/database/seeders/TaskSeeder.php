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
                "- [ ] {$i}: タスク1\nコメント0\n- [ ] {$i}: タスク2\n\nコメント1\nコメント2\nコメント3\nコメント4\n- [ ] {$i}: タスク3\nコメント5\n\nコメント6"
            ]);
        }
    }
}
