<div class="p-4 md:w-96">
    <div class="border-b border-b-zinc-600 pb-3">
        <flux:heading>Form Validate</flux:heading>
        <flux:text class="mt-2">Real-time field validation</flux:text>
    </div>

    <flux:field class="mt-4">
        <flux:label>Username</flux:label>
        <flux:input wire:model.live="name" />
        <flux:error name="name" />
    </flux:field>

    <flux:field class="mt-4">
        <flux:label>E-mail</flux:label>
        <flux:input wire:model.live="email" />
        <flux:error name="email" />
    </flux:field>

    <flux:button variant="primary" class="mt-4 cursor-pointer" wire:click="createUser">
        Create
    </flux:button>
</div>
