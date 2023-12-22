<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;

class VenteController extends Controller
{
    public function PageVenteView()
    {
        $resultat = [];
        return view("Vente.PageVente",compact('resultat'));
    }

    public function Search(Request $request)
    {
        $reference = $request->reference;

        $resultat = produit::where('reference',$reference)->get();



        return view("vente.pageVente",compact('resultat'));
    }


}
