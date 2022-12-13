<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownMenu extends Component
{
    public int $value = 0;

    public function increment()
    {
        $this->value++;
    }

    public function decrement()
    {
        $this->value--;
    }

    public function render()
    {
        return view('livewire.dropdown-menu');
    }
}
