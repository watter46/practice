<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

use App\Models\Project;
use App\Models\Task;

class Tasks extends Component
{
    private $project;
    private $index;

    protected $listeners = [
        'fetchProject' => 'fetchProject',
        'jsStoreTask'  => 'jsStoreTask',
        'storeTask'    => 'storeTask',
        'updateTask'   => 'updateTask',
        'deleteTask'   => 'deleteTask',
    ];

    public function render()
    {
        return view('livewire.task.tasks', [
            'project' => $this->project
        ]);
    }

    public function mount($id)
    {
        $this->fetchProject($id);
    }

    private function loadSetting()
    {
        $this->dispatchBrowserEvent('js_loadSetting', ['tasks' => $this->project['tasks'], 'index' => $this->index]);
    }

    private function resetTextarea()
    {
        $this->dispatchBrowserEvent('js_resetTextarea');
    }

    public function fetchProject($id)
    {
        $project = Project::with('tasks')->find($id);

        $this->project = $project;
    }

    public function storeTask($project_id, $task)
    {
        Task::create([
            'project_id' => $project_id,
            'task'       => $task
        ]);

        $this->fetchProject($project_id);
        $this->loadSetting();
    }

    public function updateTask($modified_task, $project_id, $task_id, $index)
    {
        $this->index = $index;
        
        Task::find($task_id)->update(['task' => $modified_task]);

        $this->fetchProject($project_id);
        $this->loadSetting();
    }

    public function deleteTask($project_id, $task_id, $index)
    {
        $this->index = $index;

        Task::destroy($task_id);

        $this->fetchProject($project_id);
        $this->loadSetting();
    }

    public function jsStoreTask($project, $task)
    {
        $this->storeTask($project, $task);
        $this->resetTextarea();
    }

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }
}
