<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;
use App\Models\Task;

class UpdateTask extends Component
{
    public $project_id;
    public $task_id;
    public $index;
    // private $task;

    protected $listeners = [
        'process' => 'process'
    ];

    protected $rules = [
        'task' => 'string'
    ];

    public function render()
    {
        return view('livewire.task.update-task');
    }

    public function process($modified_task, $project_id, $task_id)
    {
        $this->updateTask($modified_task, $task_id);
        $this->emitUpFetchProject();
    }

    // public function setTask($task)
    // {
    //     $this->task = $task;
    // }

    // public function updateTask()
    // {
    //     // dd($this->task);
    //     $this->emit('emitTask')->to('editor');
    //     // dd($this->task);z
    //     // Task::find($this->task_id)->update(['task' => $this->task]);
    //     // $this->emitUpFetchProject();
    // }

    private function updateTask($modified_task, $task_id)
    {        
        Task::find($task_id)->update(['task' => $modified_task]);
    }

    private function emitUpFetchProject()
    {
        $this->emitUp('setIndex', $this->index);
        $this->emitUp('fetchProject', $this->project_id);
    }
}
