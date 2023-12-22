<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Ajout_produit;
use App\Models\produit;


class ProduitController extends Controller
{
    public function AjouterProduit( Ajout_produit $request)
    {
        $verification = produit::where('reference',$request->reference)->first();

        if($verification ==null)
        {       produit::create([
                'categorie'=>$request->categorie,
                'marque'   =>$request->marque,
                'reference'=>$request->reference,
                'nom'      =>$request->nom,
                'prix'     =>$request->prix,
                'quantite' =>$request->quantite,

            ]);

            $return = 'Le produit '. $request->nom .' a été ajouter avec succes';


            $request->session()->flash('success', $return );

            return redirect()->route('AjouterProduit');
        }
        else
        {
            $return = 'Le produit '. $request->nom .' existe deja';
            $var = 1;


            $request->session()->flash('success', $return );

            return redirect()->route('AjouterProduit')->with('var',$var);
        }

    }

}
