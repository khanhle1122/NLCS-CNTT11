<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" ">
                <div class="p-6 ">
                    {{ __("You're admin in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
