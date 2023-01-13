<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;


class Editor extends Component
{
    public $project_id;
    public $task_id;
    
    public $task;
    public $index;
    public $btn_name;

    protected $rules = [
        'task' => 'string'
    ];

    // Todo: updateとaddの時nameを変更する
    private function btnName()
    {
        $this->btn_name = 'Publish Post';
    }

    public function render()
    {
        $this->btnName();

        return view('livewire.task.editor');
    }
}
