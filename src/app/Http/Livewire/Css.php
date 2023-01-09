<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Css extends Component
{
    public $task;

    public function render()
    {
        return view('livewire.css');
    }

    public function updatedTask($task)
    {
        dd($task);
    }
}
