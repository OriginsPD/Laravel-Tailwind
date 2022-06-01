<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $username, $email, $password, $password_confirmation;

    protected $rules = [
        'username' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:3'
    ];

    public function addUser(): void
    {
        $this->validate();

       $user = User::create([
           'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password
        ]);

       auth()->login($user);

       $this->redirect(route('admin.dashboard'));

    }

    public function updated(): void
    {
        $this->validate([
            'email' => 'email',
            'password' => 'confirmed|min:3'
        ]);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
