<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        return view('livewire.navigation');
    }

    public function toTimer()
    {
        return redirect()->route('timer');
    }

    public function toTask()
    {
        return redirect()->route('tasks');
    }
}
