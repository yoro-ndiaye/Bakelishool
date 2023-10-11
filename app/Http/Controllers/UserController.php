<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listeProduitsAjoutes()
    {
        $produitsAjoutes = Produit::where('ajoute_par_utilisateur', true)->get();
        return view('produits-ajoutes', ['produits' => $produitsAjoutes]);
    }
    
}
