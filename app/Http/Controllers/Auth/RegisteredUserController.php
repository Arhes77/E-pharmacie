<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\UserRegisterNotification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => 'required|string|max:255|min:3',
            'prenom' => 'required|string|max:255|min:3',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'telephone' => 'required|string|regex:/^[0-9]+$/',
            'adresse' => 'required|string|max:255|min:3',
            'sexe' => 'required|string|max:255',
            'profil' => 'file|image|mimes:jpg,jpeg,gif,png',
            'birthdate' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $filename = time() . '.' . $request->profil->extension();
        $path = $request->file('profil')->storeAs('UserProfil', $filename, 'public');


        $users = User::all();



        if ($users->isEmpty()) {
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
                'sexe' => $request->sexe,
                'profil' => $path,
                'birthdate' => $request->birthdate,
                'status_id' => 1,
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
                'sexe' => $request->sexe,
                'profil' => $path,
                'birthdate' => $request->birthdate,
                'status_id' => 9,
                'password' => Hash::make($request->password),
            ]);
        }

        $user->notify(new UserRegisterNotification($user));
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
