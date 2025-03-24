<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;

class UsersVerified extends Component
{
    protected $listeners = [
        'verify.user' => 'render'
    ];

    public function render(): View
    {
        return view('livewire.users.users-verified', [
            'users' => User::whereNotNull('email_verified_at')->get()
        ]);
    }
}
