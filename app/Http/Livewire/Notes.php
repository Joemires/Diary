<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Notes extends Component
{
    public Note $note;

    private $created_at = null;

    protected $listeners = ['changeNoteDate'];

    protected $rules = [
        'note.goal'                 => 'required|string',
        'note.journal'              => 'required|string',
        'note.scheduled_at'         => 'required',
        'note.meta.sleep'           => 'nullable',
        'note.meta.gratitude'       => 'nullable',
        'note.meta.affirmation'     => 'nullable',
        'note.meta.summary'         => 'nullable',
        'note.meta.fitness.walk'    => 'nullable',
        'note.meta.fitness.workout' => 'nullable',
        'note.meta.fitness.rest'    => 'nullable',
    ];

    public function changeNoteDate($date)
    {
        $this->created_at = Carbon::parse($date);
        $this->mount();
    }

    public function updatedNote($value)
    {
        $this->note->save();
    }

    public function mount()
    {
        $date = $this->created_at ?: Carbon::today();
        $this->note = auth()->user()->notes()->whereDate('scheduled_at', $date)->firstOr( fn () => (new Note)->fill(['scheduled_at' => $date]));
    }

    public function render()
    {
        return view('livewire.notes');
    }
}
