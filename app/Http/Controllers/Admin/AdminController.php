<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\CategorieProduit;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
 public function index()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.dashboard');
    }

    public function utilisateur()
    { $users = User::all(); // Récupère tous les utilisateurs
        return view('admin.utilisateur', ['users' => $users]);
        
    }

    
  // Affiche le formulaire de modification d'un utilisateur
  public function edition($id)
  {
      $users = User::find($id);
  
      if (!$users) {
          // Gérer le cas où l'utilisateur n'existe pas
          abort(404);
      }
  
      return view('admin.edition', ['users' => $users]);
  }
  


// Met à jour un utilisateur
public function modification(Request $request, $id)
{
    $user = User::find($id);
    // Validez et mettez à jour les données de l'utilisateur ici
    // ...

    return redirect()->route('admin.utilisateur')->with('success', 'Utilisateur mis à jour avec succès');
}

// Supprime un utilisateur
public function supression($id)
{
    $user = User::find($id);
    // Supprimez l'utilisateur ici
    // ...

    return redirect()->route('admin.utilisateur')->with('success', 'Utilisateur supprimé avec succès');
}
// ************************************************************************************
public  function  ajouterProduit(){
    return view('admin.ajouterProduit');
}
// ************************************************************************************
    //function pour les categories de produits

    public function store(Request $request)
    {
        // Validez les données du formulaire ici...
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'categorieProduit' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'quantite_en_stock' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);
    
        // Gérez l'upload de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('produitimage'), $imageName);
        } else {
            // Gérez le cas où l'image n'est pas présente
            return redirect()->route('admin.ajouterProduit')->with('error', 'L\'image du produit est requise.');
        }
    
        // Enregistrez le produit dans la base de données
        Produit::create([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'categorieProduit' => $request->input('categorieProduit'),
            'prix' => $request->input('prix'),
            'quantite_en_stock' => $request->input('quantite_en_stock'),
            'image' => $imageName, // Stockez le nom de l'image dans la base de données
        ]);
    
       // Rediriger l'utilisateur vers une page de confirmation ou de liste des produits en utilisant des URLs
return redirect('/ajouterProduit')->with('success', 'Le produit a été ajouté avec succès.');

    }
      
}