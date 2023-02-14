<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Document extends Component
{
    public $openDocumentModal = false;

    public function render()
    {
        return view('livewire.document');
    }
}
