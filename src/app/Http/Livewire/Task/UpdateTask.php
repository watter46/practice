<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

class UpdateTask extends Component
{
    public $project_id;
    public $task_id;
    public $index;

    public function render()
    {
        return view('livewire.task.update-task');
    }
}
