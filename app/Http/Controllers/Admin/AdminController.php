<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
 public function index()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.dashboard');
    }

    public function produit()
    {
        // Votre logique pour la page d'administration ici
        return view('admin.produit');
    }

    
    public function listUsers()
    {
       $users = User::all(); // Récupère tous les utilisateurs
    
       return view('admin.list', ['users' => $users]);
    }
    
}