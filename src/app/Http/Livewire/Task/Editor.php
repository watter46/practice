<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;


class Editor extends Component
{
    public $project_id;
    public $task_id;
    public $task;
    public $index;
    public $method;

    protected $rules = [
        'task' => 'string'
    ];

    public function render()
    {
        return view('livewire.task.editor');
    }

    public function emitUpTask()
    {
        if ($this->method === 'add')
        {
            $this->emitUp('storeTask',  $this->project_id, $this->task);
        }

        if ($this->method === 'update')
        {
            $this->emitUp('updateTask', $this->task, $this->project_id, $this->task_id, $this->index);
        }
        
        $this->reset('task');
    }
}
