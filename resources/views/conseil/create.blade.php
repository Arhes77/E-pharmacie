<x-guest-layout>
    <form method="POST" action="{{ route('conseil.store') }}" >
        @csrf

        <!-- Theme -->
        <div>
            <x-input-label for="theme" :value="__('Theme')" />
            <x-text-input id="theme" placeholder="theme de votre conseil" class="block mt-1 w-full" type="text" name="theme"
                :value="old('theme')" required autofocus autocomplete="theme" />
            <x-input-error :messages="$errors->get('theme')" class="mt-2" />
        </div>
        <!-- contenue-->
        <div>
            <x-input-label for="contenue" :value="__('Contenue')" />
            <x-text-input id="contenue" placeholder="contenue de votre conseil" class="block mt-1 w-full" type="text" name="contenue"
                :value="old('contenue')" required autofocus autocomplete="contenue" />
            <x-input-error :messages="$errors->get('contenue')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('publier') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
