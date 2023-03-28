<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Social Media') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your social media links.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="whatsapp" :value="__('WhatsApp')" />
            <x-text-input id="whatsapp" name="whatsapp" type="text" class="mt-1 block w-full" :value="old('whatsapp', $user->whatsapp)" autocomplete="whatsapp" />
        </div>

        <div>
            <x-input-label for="github" :value="__('Github')" />
            <x-text-input id="github" name="github" type="text" class="mt-1 block w-full" :value="old('github', $user->github)" autocomplete="github" />
        </div>

        <div>
            <x-input-label for="instagram" :value="__('Instagram')" />
            <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $user->instagram)" autocomplete="instagram" />
        </div>

        <div>
            <x-input-label for="facebook" :value="__('Facebook')" />
            <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" :value="old('facebook', $user->facebook)" autocomplete="facebook" />
        </div>

        <div>
            <x-input-label for="twitter" :value="__('Twitter')" />
            <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full" :value="old('twitter', $user->twitter)" autocomplete="twitter" />
        </div>

        <div>
            <x-input-label for="youtube" :value="__('Youtube')" />
            <x-text-input id="youtube" name="youtube" type="text" class="mt-1 block w-full" :value="old('youtube', $user->youtube)" autocomplete="youtube" />
        </div>

        <div>
            <x-input-label for="linkedin" :value="__('Linkedin')" />
            <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $user->linkedin)" autocomplete="linkedin" />
        </div>

        <div>
            <x-input-label for="pinterest" :value="__('Pinterest')" />
            <x-text-input id="pinterest" name="pinterest" type="text" class="mt-1 block w-full" :value="old('pinterest', $user->pinterest)" autocomplete="pinterest" />
        </div>

        <div>
            <x-input-label for="devto" :value="__('Dev.to')" />
            <x-text-input id="devto" name="devto" type="text" class="mt-1 block w-full" :value="old('devto', $user->devto)" autocomplete="devto" />
        </div>

        <div>
            <x-input-label for="medium" :value="__('Medium')" />
            <x-text-input id="medium" name="medium" type="text" class="mt-1 block w-full" :value="old('medium', $user->medium)" autocomplete="medium" />
        </div>


        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
