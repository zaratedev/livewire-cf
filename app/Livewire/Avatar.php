<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Avatar extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1024')]
    public $avatar; // NULL

    public function updateAvatar()
    {
        $this->validateOnly('avatar');

        auth()->user()->updateProfilePhoto($this->avatar);

        $this->reset(['avatar']);
    }

    public function render()
    {
        return view('livewire.avatar');
    }
}
