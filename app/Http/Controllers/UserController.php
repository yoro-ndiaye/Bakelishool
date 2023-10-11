<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
=======

>>>>>>> 353aa64ba76f681b09e1dad2cff0dacedae35102
use App\Models\Produit;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $produits = Produit::all();

        return view('dashboard', compact('produits'));
    }
}

=======
    public function listeProduitsAjoutes()
    {
        $produitsAjoutes = Produit::where('ajoute_par_utilisateur', true)->get();
        return view('produits-ajoutes', ['produits' => $produitsAjoutes]);
    }
    
}
>>>>>>> 353aa64ba76f681b09e1dad2cff0dacedae35102
