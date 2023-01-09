<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;

class Editor extends Component
{
    public $project_id;
    public $task;

    protected $listeners = [
        'addTask' => 'addTask',
    ];

    protected $rules = [
        'task' => 'required | string'
    ];

    public function render()
    {
        return view('livewire.task.editor');
    }

    public function addTask($project_id)
    {
        $validated = $this->validate();

        $merged = array_merge(['project_id' => $project_id], $validated);

        Task::create($merged);
        
        $this->emitUp('fetchProject', $project_id);
        
        $this->reset('task');
    }

    public function updatedTask($task)
    {
        $this->emitUp('test', $task);
    }
}
