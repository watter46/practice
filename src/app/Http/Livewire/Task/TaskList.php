<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

class TaskList extends Component
{
    public $project_id;
    public $task_id;
    public $task;
    public $index;

    public function render()
    {
        return view('livewire.task.task-list');
    }
}
