<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

class TaskList extends Component
{
    public $project_id;
    public $tasks;
    public $index;

    public function render()
    {
        return view('livewire.task.task-list');
    }
}
