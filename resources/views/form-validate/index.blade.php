<x-layouts.app :title="__('Dashboard')">
    <div class="relative h-full">
        <div class="h-full w-full flex justify-center items-center">
            <div class="grid auto-rows-min gap-4">
                <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <livewire:form-validate />
                    <x-placeholder-pattern class="absolute -z-1 inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/5" />
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
