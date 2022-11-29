<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class Projects extends Component
{
    public $projects;

    public function render()
    {
        return view('livewire.projects');
    }

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }

    public function projectDetail($id)
    {
        return redirect()->route('tasks', ['id' => $id]);
    }
}
