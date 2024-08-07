<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks = []; // Array


    #[On('taskAdded')]
    public function taskAdd($task)
    {
        $this->tasks[] = $task;
    }
    
    public function render()
    {
        return view('livewire.task-list');
    }
}
