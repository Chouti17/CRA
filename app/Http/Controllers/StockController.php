<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\produit;


class StockController extends Controller
{
    //
    public function AjouterProduitView()
    {
        $categories = categorie::all();

        return view("Stock.ajouterProduits")->with('categories',$categories);
    }
    public function AjouterCategorieView()
    {
        return view("Stock.ajouterCategorie");
    }
    public function ListeProduitView()
    {   $Categories = categorie::all();
        $Produits = produit::with('categorie')->get();
        

        return view("Stock.listeProduit",compact('Categories','Produits'));
    }
    public function AjouterProduit()
    {

    }
}
