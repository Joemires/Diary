<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Calendar extends Component
{
    public $changeCalendarModal = false;
    public $created_at;

    public function updatedCreatedAt($date)
    {
        $this->changeCalendarModal = false;
        $this->emit('changeNoteDate', $date);
    }

    public function render()
    {
        return view('livewire.calendar');
    }

}
