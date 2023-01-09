<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

use App\Models\Project;
use App\Models\Task;
use App\UseCases\TasksUseCase;

class Tasks extends Component
{
    public $project;
    private $index;

    protected $listeners = [
        'fetchProject' => 'fetchProject',
        'updateTask'   => 'updateTask',
        'setIndex'     => 'setIndex'
    ];

    public function render()
    {
        $this->dispatchBrowserEvent('js_load', ['project' => $this->project ,'index' => $this->index]);
        
        return view('livewire.task.tasks', [
            'project' => $this->project
        ]);
    }

    public function mount($id)
    {
        $this->fetchProject($id);
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function fetchProject($id)
    {
        $project = Project::with('tasks')->find($id);

        $this->project = $project;
    }

    public function updateTask($modified_task, $project_id, $task_id, $index)
    {
        $this->index = $index;
        
        Task::find($task_id)->update(['task' => $modified_task]);

        $this->fetchProject($project_id);
    }

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }
}
