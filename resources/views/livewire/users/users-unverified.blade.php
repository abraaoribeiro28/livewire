<div class="p-4">
    <div class="flex items-center gap-x-2">
        <flux:heading size="xl">Users unverified</flux:heading>
        <flux:icon.x-circle class="text-red-500"/>
    </div>

    <div class="mt-3">
        @forelse($users as $user)
            <div wire:key="{{ $user->id }}">
                <div @class([
                        'p-2 border border-zinc-700 flex justify-between items-center',
                        'rounded-t-xl' => $loop->first,
                        'border-b-0' => !$loop->last,
                        'rounded-b-xl' => $loop->last,
                    ])>
                    {{ $user->id }} - {{ $user->name }}
                    <flux:button wire:click="verify({{ $user->id }})" class="cursor-pointer">
                        <span wire:logading>
                            Verify
                        </span>
                    </flux:button>
                </div>
            </div>
        @empty
            <div class="text-neutral-400 ">
                All users are verified
            </div>
        @endforelse
    </div>
</div>
