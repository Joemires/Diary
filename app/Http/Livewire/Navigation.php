<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $created_at = false;

    public function render()
    {
        $this->created_at = now();

        return view('livewire.navigation');
    }

    public function updated($pro, $value)
    {
        info("OK");
    }
}
