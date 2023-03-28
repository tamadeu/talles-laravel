<header>
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('My Story Area') }}
    </h2>
</header>

<div>
    <x-input-label for="myStory_header_text" :value="__('Header Text')" />
    <x-text-input id="myStory_header_text" name="myStory_header_text" type="text" class="mt-1 block w-full" :value="old('myStory_header_text', $frontend->myStory_header_text)" required autofocus autocomplete="myStory_header_text" />
    <x-input-error class="mt-2" :messages="$errors->get('myStory_header_text')" />
</div>

<div>
    <x-input-label for="myStory_body_text" :value="__('Body Text')" />
    <textarea id="myStory_body_text" name="myStory_body_text" class="mt-1 block w-full" required="" autofocus="" autocomplete="myStory_body_text" style="height: 84px;">{{ old('myStory_body_text', $frontend->myStory_body_text) }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('myStory_body_text')" />
</div>