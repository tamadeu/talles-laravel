<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('About Area') }}
    </h2>
</header>

<div>
    <x-input-label for="about_header_text" :value="__('Header Text')" />
    <x-text-input id="about_header_text" name="about_header_text" type="text" class="mt-1 block w-full" :value="old('about_header_text', $frontend->about_header_text)" required autofocus autocomplete="about_header_text" />
    <x-input-error class="mt-2" :messages="$errors->get('about_header_text')" />
</div>

<div>
    <x-input-label for="about_body_text" :value="__('Body Text')" />
    <textarea id="about_body_text" name="about_body_text" class="mt-1 block w-full" required="" autofocus="" autocomplete="about_body_text" style="height: 84px;">{{ old('about_body_text', $frontend->about_body_text) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('about_body_text')" />
</div>