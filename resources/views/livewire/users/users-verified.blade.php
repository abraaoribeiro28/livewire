<div class="p-4">
    <div class="flex items-center gap-x-2">
        <flux:heading size="xl" >Users verified</flux:heading>
        <flux:icon.check-badge class="text-green-500"/>
    </div>

    <div class="mt-3">
        @forelse($users as $user)
            <div @class([
                    'p-2 border border-zinc-700 flex justify-between items-center',
                    'rounded-t-xl' => $loop->first,
                    'border-b-0' => !$loop->last,
                    'rounded-b-xl' => $loop->last,
                ])>
                {{ $user->id }} - {{ $user->name }}
            </div>
        @empty
            <div class="text-neutral-400 ">
                No verified user.
            </div>
        @endforelse
    </div>
</div>
