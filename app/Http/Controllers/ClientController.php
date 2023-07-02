<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.index', compact('clients'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_clt' => 'required',
            'prenom_clt' => 'required', 
            'tel_clt' => 'required',
            'email_clt' => 'required|unique:clients,email_clt',
            'dateN_clt' => 'required',
            'url_clt' => 'required',
            'adress_clt' => 'required',
        ]);
        $request->url_clt->storeAs('clientProfilPicture', $request->url_clt, 'public');
        $data = $request->except('_token');
        Client::create($data);
        return redirect()->route('client.index');
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom_clt' => 'required',
            'prenom_clt' => 'required',
            'tel_clt' => 'required',
            'email_clt' => 'required|unique:clients,email_clt,'.$client->id,
            'dateN_clt' => 'required',
            'url_clt' => 'required',
            'adress_clt' => 'required',
        ]);

        $request->url_clt->storeAs('clientProfilPicture', $request->url_clt, 'public');
        $data = $request->except('_token');
        $client->update($data);
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('client.index');
    }
}
