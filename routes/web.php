<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
<<<<<<< HEAD
=======

>>>>>>> 353aa64ba76f681b09e1dad2cff0dacedae35102
use function PHPSTORM_META\type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Master.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/redirect', [ProfileController::class, 'redirect']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// routes pour les commandes************************

Route::get('/commandes', [ProfileController::class, 'utilisateursAvecCommandes'])->name('commandes.index');
Route::get('/commandes/ajouter', [ProfileController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [ProfileController::class, 'store'])->name('commandes.store');
// route pour voir des details de la commandes
Route::get('/commandes/{id}', [ProfileController::class, 'show'])->name('commandes.show');

});
// ***************************************************
// route pour la gestion d'un utilisateur cote administrateur
 Route::get('/produit', [AdminController::class, 'utilisateur']);

// Route pour afficher le formulaire de modification d'un utilisateur
// Route::get('/admin/{id}/edition', [AdminController::class, 'edition'])->name('admin.edition');
Route::get('/admin/users/{id}/edition', [AdminController::class, 'edition'])->name('admin.edition');
// Route pour modifier un utilisateur dans la base de donnée
Route::put('/admin/{user}',[AdminController::class,'modifierUser'])->name("admin.modification");

// Route pour afficher la liste des produit
// routes/web.php



Route::get('/adminproduit', [AdminController::class, 'listeProduit']);

// // Route pour afficher le formulaire de modification d'un utilisateur
// // Route::put('/admin/{id}', [AdminController::class, 'modification'])->name('admin.modification');
// // Route pour la suppression d'un elements du  formulaire  d'un utilisateur
// Route::delete('/admin/{id}', [AdminController::class, 'supression'])->name('admin.supression');

// ****************************************************

Route::get('/userliste',[AdminController::class, 'userliste']);

// 

Route::get('/ajouterProduit', [AdminController::class, 'ajouterProduit']);
Route::post('/ajouterProduit', [AdminController::class, 'store']);

//_______________________________________________________//


Route::get('/dashboard', [UserController::class, 'index']);



// ****************************************************
// Route middleware pour gerer l'authentification admin et user
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/administrator', [AdminController::class, 'index'])->name('admin.dashboard');

    // routes pour la gestion des clients
    // Route::get('/admin/users', [AdminController::class, 'listUsers'])->name('admin.list');
   
    // Ajoutez d'autres routes pour gérer les utilisateurs (modification, suppression, etc.).
   Route::get('administrator/enregistrer', [AdminController::class, 'enregistrer'])->name('enregistrer');
    Route::get('/private', [AdminController::class, 'vieAdmin'])->name('administrateur');
});

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'vieAdmin'])->name('admin.dashboard');
// });


//   Route::get('/private', function (){
//        return view('dashboard');
//     });





// Route::middleware(['auth', 'role:admin'])
//              ->group('/private', [ProfileController::class, 'vieAdmin'])
//              ->name('admin.dashboard');

// ******************************Route commande pour  produit ****************************************************//



// *****************************************************************route cote user************************//

Route::get('/ajouter-au-panier/{id}',[UserController::class, 'ajouterAuPanier']);


// ***********************************************************************************************************

require __DIR__.'/auth.php';
