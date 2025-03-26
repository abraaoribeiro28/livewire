<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class FormValidate extends Component
{
    use WithFileUploads;

    public ?string $name;
    public ?string $email;

    #[Validate('image|max:2048')]
    public $photo;

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
        $ref = $this->photo->store(path: 'local');

        User::factory()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'photo' => $ref
        ]);

        $this->reset(['name', 'email', 'photo']);
    }
}
