<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
     // Relation : Un produit appartient à une catégorie
     public function categorie()
     {
         return $this->belongsTo(CategorieProduit::class, 'categorie_id');
     }
 
     // Relation : Un produit peut être inclus dans plusieurs commandes
     public function commandes()
     {
         return $this->belongsToMany(Commande::class, 'commande_produit', 'produit_id', 'commande_id')
             ->withPivot('quantite');
     }
}