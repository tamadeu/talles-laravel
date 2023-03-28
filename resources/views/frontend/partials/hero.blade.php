<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Hero Area') }}
    </h2>
</header>
<div>
    <x-input-label for="hero_header_text" :value="__('Header Text')" />
    <x-text-input id="hero_header_text" name="hero_header_text" type="text" class="mt-1 block w-full" :value="old('hero_header_text', $frontend->hero_header_text)" required autofocus autocomplete="hero_header_text" />
    <x-input-error class="mt-2" :messages="$errors->get('hero_header_text')" />
</div>

<div>
    <x-input-label for="hero_body_text" :value="__('Body Text')" />
    <textarea id="hero_body_text" name="hero_body_text" class="mt-1 block w-full" required="" autofocus="" autocomplete="hero_body_text" style="height: 84px;">{{ old('hero_body_text', $frontend->hero_body_text) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('hero_body_text')" />
</div>