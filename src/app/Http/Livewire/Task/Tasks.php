<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

use App\Models\Project;
use App\Models\Task;
use App\UseCases\TasksUseCase;

class Tasks extends Component
{
    private $project;

    protected $listeners = [
        'fetchProject' => 'fetchProject',
        'updateTask'   => 'updateTask'
    ];

    public function render()
    {
        $this->dispatchBrowserEvent('inputTest');
        
        return view('livewire.task.tasks', [
            'project' => $this->project
        ]);
    }

    public function mount($id)
    {
        $this->fetchProject($id);
    }

    public function fetchProject($id)
    {
        $project = Project::with('tasks')->find($id);

        $tasks = $this->splitTask($project);

        $this->project = collect($project)->replace(['tasks' => $tasks]);
    }

    private function splitTask($project)
    {
        $usecase = new TasksUseCase();
        $task = collect($project['tasks'])->map(function ($items) use ($usecase) {
            
            /* 改行で分割する */
            $texts = preg_split("/\r\n|\n/", $items['task']);
            $items['task'] = $usecase->convertToTag($texts);
            // $test = $usecase->convertToTag($texts);
            // dd($test);

            return $items;
        });

        return $task;
    }

    public function updateTask($modified_task, $project_id, $task_id)
    {
        Task::find($task_id)->update(['task' => $modified_task]);

        $this->fetchProject($project_id);
    }

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }
}
