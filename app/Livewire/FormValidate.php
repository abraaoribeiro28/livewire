<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;

class FormValidate extends Component
{
    public ?string $name;
    public ?string $email;

    protected array $rules = [
        'name' => ['required', 'min:3', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users'],
    ];

    public function render(): View
    {
        return view('livewire.form-validate');
    }

    public function updated($property): void
    {
        $this->validateOnly($property);
    }

    public function createUser(): void
    {
        $data = $this->validate();
        User::factory()->create($data);
        $this->reset(['name', 'email']);
    }
}
