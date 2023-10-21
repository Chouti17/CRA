<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Http\Requests\Ajout_client;

use Illuminate\Http\Request;

class clients extends Controller
{
   //Ajouterclients
   public function P_Ajout_client()
    {
        return view('Client.Ajouterclient');
    }

    public function Ajout_client(client $table, Ajout_client $request)
    { 
        client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'numero' => $request->telephone,
            'n_societe' => $request->societe,
            's_geographique' => $request->position,
        ]);
    }
}
