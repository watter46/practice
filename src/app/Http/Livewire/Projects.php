<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Projects extends Component
{
    public $projects = [
        ['id' => 1, 'project' => 'project 1'],
        ['id' => 2, 'project' => 'project 2'],
        ['id' => 3, 'project' => 'project 3'],
        ['id' => 4, 'project' => 'project 4'],
        ['id' => 5, 'project' => 'project 5'],
    ];

    public function render()
    {
        return view('livewire.projects');
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
