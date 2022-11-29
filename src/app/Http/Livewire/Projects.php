<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Projects extends Component
{
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
