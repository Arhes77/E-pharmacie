<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <div class="text-sm pt-2">
                Nouveau chez nous ?
                <a href="{{ route('register') }}" class="text-blue-700 hover:opacity-70">
                    Commencez ici.
                </a>
            </div>
            <x-primary-button class="ml-3">
                {{ __('Connecter') }}
            </x-primary-button>
        </div>
        <div class="text-xs pt-4">
            Toujours hereux de vous revoir sur notre pharmacie!! <br> En vous conectant vous accepter nos <a
                class="text-blue-500 hover:opacity-70" href="#"> conditions de
                vente et d'utilisation.</a>
        </div>

        <div class="flex items-center justify-start mt-4">

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    class="hover:underline text-sm hover:opacity-70 text-blue-700 hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Mot de passe oublier?
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
