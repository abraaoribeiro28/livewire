<x-layouts.app :title="__('Filters')">
    <div class="h-full w-full rounded-xl">
        <div class="auto-rows-min">
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <livewire:filters />
                <x-placeholder-pattern class="absolute -z-1 inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/5" />
            </div>
        </div>
    </div>
</x-layouts.app>
