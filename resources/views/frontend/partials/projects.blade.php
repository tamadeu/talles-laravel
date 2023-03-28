<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Projects Area') }}
    </h2>
</header>

<div>
    <x-input-label for="projects_header_text" :value="__('Header Text')" />
    <x-text-input id="projects_header_text" name="projects_header_text" type="text" class="mt-1 block w-full" :value="old('projects_header_text', $frontend->projects_header_text)" required autofocus autocomplete="projects_header_text" />
    <x-input-error class="mt-2" :messages="$errors->get('projects_header_text')" />
</div>

<div>
    <x-input-label for="projects_body_text" :value="__('Body Text')" />
    <textarea id="projects_body_text" name="projects_body_text" class="mt-1 block w-full" required="" autofocus="" autocomplete="projects_body_text" style="height: 84px;">{{ old('projects_body_text', $frontend->projects_body_text) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('projects_body_text')" />
</div>