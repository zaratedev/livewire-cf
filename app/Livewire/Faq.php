<?php

namespace App\Livewire;

use App\Models\Faq as ModelFaq;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Faq extends Component
{
    public $selectedCategory = '';

    public $categories = ['Laravel', 'Livewire', 'Alpine'];

    #[Computed]
    public function faqs()
    {
        if ($this->selectedCategory) {
            return ModelFaq::where('category', $this->selectedCategory)->get();
        }

        return ModelFaq::all();
    }

    public function render()
    {
        return view('livewire.faq');
    }
}
