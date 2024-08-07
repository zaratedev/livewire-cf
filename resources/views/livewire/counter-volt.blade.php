<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn () => $this->count++;

?>

<div>
    {{ $count }}

    <button wire:click="increment">Increment</button>
</div>
