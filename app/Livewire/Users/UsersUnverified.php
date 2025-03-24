<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;

class UsersUnverified extends Component
{
    public function render(): View
    {
        return view('livewire.users.users-unverified', [
            'users' => User::whereNull('email_verified_at')->get()
        ]);
    }

    public function verify(User $user): void
    {
        $user->update(['email_verified_at' => now()]);
        $this->dispatch('verify.user')->to(UsersVerified::class);
    }
}
