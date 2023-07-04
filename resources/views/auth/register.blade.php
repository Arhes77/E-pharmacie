<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" placeholder="Nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
         <!-- Prenom -->
         <div>
            <x-input-label for="prenom" :value="__('Prenom')" />
            <x-text-input id="prenom" placeholder="Prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
         <!-- Telephone -->
        <div>
            <x-input-label for="telephone" :value="__('Telephone')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="tel" placeholder="+237 6........" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>
         <!-- Adresse -->
         <div>
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" placeholder="adresse de livraison par defaut" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>
         <!-- Sexe -->
         <div>
            <x-input-label for="sexe" :value="__('Sexe')" />
            <select name="sexe"  id="sexe" class="mt-1 form-select block w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
            </select>
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
         <!-- Profil -->
         <div>
            <x-input-label for="profil" :value="__('Photos Pofil')" />
            <input type="file" name="profil" id="profil" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"  required/>
            <x-input-error :messages="$errors->get('profil')" class="mt-2" />
        </div>
        <!-- Birthdate -->
        <div>
            <x-input-label for="birthdate" :value="__('Date de Naissance')" />
            <input type="date" name="birthdate" id="birthdate" class="mt-1 block w-full form-input border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required/>
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <div class="text-xs pt-4">
            By signing-in you agree to PHARMA237 Conditions of Use & Sale.
            Please see our Privacy Notice, our Cookies Notice and our Interest-Based Ads Notice.
        </div>

        <div class="flex items-center justify-start mt-4">
            <a
                href="{{route('login')}}"
                class="hover:underline text-sm text-blue-700 hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Sign in?
            </a>
    </form>
</x-guest-layout>
