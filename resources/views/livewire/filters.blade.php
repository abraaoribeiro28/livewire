<div class="p-4">
    <div>
        <flux:heading size="xl">Filters</flux:heading>
        <flux:text class="mt-2">User search filters</flux:text>
    </div>

    <div class="pt-6">
        <div class="relative shadow-md sm:rounded-lg">
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <div>
                    <flux:select size="sm" placeholder="show" wire:model.live="limit">
                        <flux:select.option>5</flux:select.option>
                        <flux:select.option>15</flux:select.option>
                        <flux:select.option>25</flux:select.option>
                    </flux:select>
                </div>
                <div class="flex gap-4">
                    <flux:input icon="user" placeholder="Search name" wire:model.live="searchName" />
                    <flux:input icon="envelope" placeholder="Search e-mail" wire:model.live="searchEmail"/>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-zinc-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <span class="cursor-pointer inline-flex" wire:click="sort('name')">
                                Name
                                @if($this->sortBy === 'name')
                                    @if($this->sortDir === 'asc')
                                        <flux:icon.chevron-up variant="micro" />
                                    @else
                                        <flux:icon.chevron-down variant="micro" />
                                    @endif
                                @else
                                    <flux:icon.chevron-up-down variant="micro" />
                                @endif
                            </span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="cursor-pointer inline-flex" wire:click="sort('email')">
                                E-mail
                                @if($this->sortBy === 'email')
                                    @if($this->sortDir === 'asc')
                                        <flux:icon.chevron-up variant="micro" />
                                    @else
                                        <flux:icon.chevron-down variant="micro" />
                                    @endif
                                @else
                                    <flux:icon.chevron-up-down variant="micro" />
                                @endif
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr class="bg-white border-b dark:bg-transparent dark:border-zinc-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $users->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</div>
