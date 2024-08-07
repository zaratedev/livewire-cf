<?php

use function Livewire\Volt\{rules, state};

state([
    'email' => '',
    'done' => false,
]);

rules([
    'email' => 'required|email|unique:newsletters,email'
]);

$submit = function () {
    $this->validate();

    \App\Models\Newsletter::create(['email' => $this->email]);

    $this->done = true;
};

?>

<div>
    @if ($done)
        <p>Thanks you for subscribing!</p>
    @else
    <form wire:submit="submit">
        <div>
            <label for="email">Email</label>
            <input type="text" wire:model="email">
            <button type="submit">Subscribe</button>
        </div>
    </form>
    @endif
    @error('email')
        <p class="text-red">{{ $message }}</p>
    @enderror
</div>
