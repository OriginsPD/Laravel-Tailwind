<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminIndex extends Component
{
    public $username;
    public $email;
    public $password = 'password123';

    protected $rules = [
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ];

    public function addStudent(): void
    {
        $this->validate();

        User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->dispatchBrowserEvent('close-modal');

        session()->flash('message','Student Created Successful');
    }

    public function updated(): void
    {
        $this->validate([
            'username' => 'min:5',
            'email' => 'email|unique:users',
        ],[
            'email.unique' => 'Student Already Added'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.admin-index', ['students' => User::where('is_admin', 0)->get()])
            ->extends('layouts.admin');
    }
}
