<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:3'
    ];

    public function onLogin()
    {
        return auth()->attempt($this->validate())
            ? redirect(route('admin.dashboard'))
            : $this->addError('email', trans('auth.failed'));
    }

    public function updated(): void
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
