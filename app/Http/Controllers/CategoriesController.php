<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Ajout_categorie;
use App\Models\categorie;

class CategoriesController extends Controller
{
    public function AjouterCategorie(Ajout_categorie $request)
    {


        categorie::create([

            'categorie' => $request->categorie,
            'description' =>$request->description,
        ]);

        $returnMessage = 'La categorie '. $request->categorie .' à été creer avec succes';

        $request->session()->flash('success', $returnMessage);

        return  redirect()->route('Stock');

    }
}
