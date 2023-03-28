<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('projects.update', $projects->id) }}" class="mt-6 space-y-6" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="name" :value="__('Project Name')" />
                            <x-text-input id="name" name="name" type="text" value="{{ $projects->name }}" class="mt-1 block w-full" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" name="description" type="text" value="{{ $projects->description }}" class="mt-1 block w-full" required autofocus autocomplete="description" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <div>
                            <x-input-label for="live_link" :value="__('Live Link')" />
                            <x-text-input id="live_link" name="live_link" type="text" value="{{ $projects->live_link }}" class="mt-1 block w-full" required autofocus autocomplete="live_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('live_link')" />
                        </div>
                        <div>
                            <x-input-label for="code_link" :value="__('Code Link')" />
                            <x-text-input id="code_link" name="code_link" type="text" value="{{ $projects->code_link }}" class="mt-1 block w-full" required autofocus autocomplete="code_link" />
                            <x-input-error class="mt-2" :messages="$errors->get('code_link')" />
                        </div>
                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <input type="file" class="form-control-file" id="image" name="image">
                            @if ($existingImage)
                                <input type="hidden" name="existing_image" value="{{ $existingImage }}">
                                <p><img src="{{ $existingImage }}" alt="Existing Image"></p>
                            @endif
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
