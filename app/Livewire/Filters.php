<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Filters extends Component
{
    use WithPagination;

    public ?string $searchName = null;
    public ?string $searchEmail = null;
    public ?string $sortBy = null;
    public ?string $sortDir = null;
    public ?int $limit = 5;
    protected array $queryString = [
        'searchName' => ['except' => ''],
        'searchEmail' => ['except' => ''],
        'sort' => ['except' => ''],
        'sortDir' => ['except' => ''],
    ];

    public function render(): View
    {
        return view('livewire.filters', [
            'users' => User::query()
                ->when($this->searchName, fn ($builder) => $builder->where('name', 'like', '%' . $this->searchName . '%'))
                ->when($this->searchEmail, fn ($builder) => $builder->where('email', 'like', '%' . $this->searchEmail . '%'))
                ->when($this->sortBy, fn ($builder) => $builder->orderBy($this->sortBy, $this->sortDir))
                ->paginate($this->limit)
        ]);
    }

    public function updating(): void
    {
        $this->resetPage();
    }

    public function sort($column): void
    {
        $this->sortDir = $this->sortBy === $column
            ? ($this->sortDir === 'asc' ? 'desc' : 'asc')
            : 'asc';

        $this->sortBy = $column;
    }
}
