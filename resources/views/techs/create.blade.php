<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Technology') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('techs.store') }}" class="mt-6 space-y-6" method="POST">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Skill Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="icon" :value="__('Icon')" />
                            <x-text-input id="icon" name="icon" type="text" class="mt-1 block w-full" required autofocus autocomplete="icon" />
                            <x-input-error class="mt-2" :messages="$errors->get('icon')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Create') }}</x-primary-button>
                        </div>                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
