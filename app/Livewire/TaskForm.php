<?php

namespace App\Livewire;

use Livewire\Component;

class TaskForm extends Component
{
    public $taskName = ''; // String

    public function addTask()
    {
        $this->dispatch('taskAdded', $this->taskName);
    }

    public function render()
    {
        return view('livewire.task-form');
    }
}
