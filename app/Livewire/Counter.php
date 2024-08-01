<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{
    public $counter;

    public function mount()
    {
        $this->counter = 30;
    }

    public function increment()
    {
        $this->counter++;
    }
    
    public function render()
    {
        return view('livewire.counter');
    }
}
