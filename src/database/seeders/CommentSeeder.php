<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 30) as $i) {
            \App\Models\Comment::create([
                'task_id' => rand(1, 30),
                'comment'       => "Comment{$i}\nComment Test"
            ]);
        }
    }
}
