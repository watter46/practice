<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Tasks extends Component
{
    public int $task_id;

    public $task;

    private $tasks = [
        ['id' => 1,'title' => 'Title1', 'task' => 'Task1'],
        ['id' => 2,'title' => 'Title2', 'task' => 'Task2'],
        ['id' => 3,'title' => 'Title3', 'task' => 'Task3'],
        ['id' => 4,'title' => 'Title4', 'task' => 'Task4'],
        ['id' => 5,'title' => 'Title5', 'task' => 'Task5']
    ];

    public function render()
    {
        return view('livewire.tasks');
    }

    // Todo: idからDBの値を取得する
    public function mount($id)
    {
        $this->task = array_filter($this->tasks, fn($val) => $val['id'] === (int) $id);

        $this->render();
    }

    public function toNewProject()
    {
        return redirect()->route('new-project');
    }
}
