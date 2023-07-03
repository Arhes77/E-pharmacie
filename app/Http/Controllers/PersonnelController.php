<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Statut;
use App\Models\Personnel;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PersonnelController extends Controller
{
    //les methde de traitement
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = Personnel::all();

        return view('personnel.index', compact('personnel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change(Personnel $personnel):View
    {
        $status = Status::all();
        $user = User::where('id','=', $personnel->user_id)->get();
        return view('personnel.change', compact('personnel', 'status', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {

        $user=User::where('id','=',$personnel->user_id)->get();

        return view('personnel.show',compact('user','personnel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     *  @param  \App\Models\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        $user = User::where('id','=',$personnel->user_id)->get();
        return view('personnel.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnel $Personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {

     $request->validate([
       'status_id' => 'required|exists:statuses,id'
        ]);

        $user = User::where('id','=',$personnel->user_id)->get();
        $user->status_id = $request->status_id;
       $user->update($user);



        return redirect()->route('personnel.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        $user = User::where('id','=',$personnel->user_id)->get();
        $user->statut_id = 9;
        $user->update($user);
        $personnel->delete();

        return redirect()->route('personnel.index');
    }

   /* public function guard()
    {
        $user = Auth::user();
        if ($user->statut->titre_status != 'pharmacien') {
            return $user;
        } else {
            return response()->json(['key' => 'l\'utilisateur n\'est pas un admin']);
        }
    }*/
}
