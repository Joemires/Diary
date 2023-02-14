<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;

class Authenticate extends Component
{
    use Actions;

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.authenticate');
    }

    public function passwordless()
    {
        $user = User::where('email', $this->email)->first();

        if(! $user instanceof User) {
            $this->notification()->error(
                title      : 'Authentication Invalid',
                description: 'Login record not found, please try again'
            );

            return true;
        }

        $user->notify(new \App\Notifications\PasswordlessSignin);

        $this->notification()->success(
            title      : 'Login successful',
            description: 'We have sent a login link to your email'
        );
    }
}
