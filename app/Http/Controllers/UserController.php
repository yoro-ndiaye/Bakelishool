<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $produits = Produit::all();

        return view('dashboard', compact('produits'));
    }

<<<<<<< HEAD
=======

>>>>>>> 7c2d5bcbfa00114aff58444fb59305fccd386005
    public function listeProduitsAjoutes()
    {
        $produitsAjoutes = Produit::where('ajoute_par_utilisateur', true)->get();
        return view('produits-ajoutes', ['produits' => $produitsAjoutes]);
    }
    
}
