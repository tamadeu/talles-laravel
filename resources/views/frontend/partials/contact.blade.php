<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Contact Area') }}
    </h2>
</header>

<div>
    <x-input-label for="contact_header_text" :value="__('Header Text')" />
    <x-text-input id="contact_header_text" name="contact_header_text" type="text" class="mt-1 block w-full" :value="old('contact_header_text', $frontend->contact_header_text)" required autofocus autocomplete="contact_header_text" />
    <x-input-error class="mt-2" :messages="$errors->get('contact_header_text')" />
</div>

<div>
    <x-input-label for="contact_body_text" :value="__('Body Text')" />
    <textarea id="contact_body_text" name="contact_body_text" class="mt-1 block w-full" required="" autofocus="" autocomplete="contact_body_text" style="height: 84px;">{{ old('contact_body_text', $frontend->contact_body_text) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('contact_body_text')" />
</div>