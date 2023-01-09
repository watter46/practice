<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;

class AddTask extends Component
{
    public $project_id;

    protected $listeners = [
        'process' => 'process',
    ];

    public function render()
    {
        return view('livewire.task.add-task');
    }

    public function process($task)
    {
        $this->storeTask($task);
        $this->emitUpFetchProject();
    }

    private function storeTask($task)
    {
        Task::create([
            'project_id' => $this->project_id,
            'task'       => $task
        ]);
    }

    private function emitUpFetchProject()
    {
        $this->emitUp('fetchProject', $this->project_id);
    }
}
