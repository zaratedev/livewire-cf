<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UpdateUser extends Component
{
    public $user; // App/Models/User

    public $name;
    public $gender;

    public $toggleName = false;

    protected $rules = [
        'name' => 'required|between:2,255',
        'gender' => 'required|in:male,female,other',
    ];

    public function mount()
    {
        $user = Auth::user();

        $this->user = $user;
        $this->name = $user->name;
    }

    public function editName()
    {
        $this->toggleName = true;
        $this->dispatch('name');
    }

    public function updateName()
    {
        $this->validateOnly('name');

        $this->user->update(['name' => $this->name]);

        $this->reset('toggleName');

        session()->flash('message', 'Has been updated name successfully');

        $this->dispatch('updated-name', name: $this->name);
    }

    public function updateGender()
    {
        $this->validateOnly('gender');
        $this->user->update(['gender' => $this->gender]);
        session()->flash('message', 'Has been updated gender successfully');
    }

    public function render()
    {
        return view('livewire.update-user');
    }
}
