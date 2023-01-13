<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

use App\Models\Project;
use App\Models\Task;

class Tasks extends Component
{
    private $project;
    // public $project;
    private $index;

    protected $listeners = [
        'fetchProject' => 'fetchProject',
        'updateTask'   => 'updateTask',
        'deleteTask'   => 'deleteTask',
        'setIndex'     => 'setIndex',
        'refresh'      => '$refresh'
    ];

    public function render()
    {
        // return view('livewire.task.tasks');
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
        $this->dispatchBrowserEvent('js_loadSetting', ['tasks' => $this->project['tasks'], 'index' => $this->index]);
    }

    public function deleteTask($project_id, $task_id, $index)
    {
        $this->index = $index;

        Task::destroy($task_id);

        $this->fetchProject($project_id);
        
        $this->dispatchBrowserEvent('js_loadSetting', ['tasks' => $this->project['tasks'], 'index' => $this->index]);
    } 

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }
}
