<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreancierController extends Controller
{
    public function CreancierView()
    {
        return view("creancier.creancier");
    }
    public function ListeView()
    {
        return view("creancier.liste");
    }
    public function AjouterView()
    {
        return view("creancier.ajouter");
    }
    public function ReglementsView()
    {
        return view("creancier.reglements");
    }
}
