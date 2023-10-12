<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
<<<<<<< HEAD
=======

>>>>>>> 208c2b9ae52fcbfb15bd9156addbff67f205e675
    public function index()
    {
        $produits = Produit::all();

        return view('dashboard', compact('produits'));
    }


<<<<<<< HEAD
=======

>>>>>>> 208c2b9ae52fcbfb15bd9156addbff67f205e675
    public function listeProduitsAjoutes()
    {
        $produitsAjoutes = Produit::where('ajoute_par_utilisateur', true)->get();
        return view('produits-ajoutes', ['produits' => $produitsAjoutes]);
    }
    
}
<<<<<<< HEAD
=======

>>>>>>> 208c2b9ae52fcbfb15bd9156addbff67f205e675
