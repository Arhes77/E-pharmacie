<?php

namespace App\Http\Controllers;

use Rules\Password;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  \Illuminate\Http\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)

    {

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'telephone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',
            'profil' => 'file|image|mimes:jpg,jpeg,gif,png',
            'birthdate' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $filename = time() . '.' . $request->profil->extension();
        $path= $request->file('profil')->storeAs('UserProfil', $filename, 'public');


        $user->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'sexe' => $request->sexe,
            'profil' => $path,
            'birthdate' => $request->birthdate,
            'qualification' => $request->qualification,
            'password' => Hash::make($request->password),
        ]);


return back();

    }

}
