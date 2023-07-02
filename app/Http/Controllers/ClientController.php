<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Personnel;
use App\Models\Status;
use Illuminate\Http\Request;

class ClientController extends Controller
{
     //les methde de traitement
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('client.index', compact('user'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $status = Status::all();
        return view('personnel.create', compact('user', 'status'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $client=User::where('id','=',$user->id)->get();

        return view('client.show',compact('user'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('client.edit', compact('user'));
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

     $request->validate([
       'status_id' => 'required|exists:statuses,id'
        ]);

        $user->status_id = $request->status_id;
       $user->update([$user]);

       $personnel = new Personnel();
       $personnel->user_id = $user->id;
       $personnel->save([$personnel]);

        return redirect()->route('personnel.index');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('client.index');
    }


}
