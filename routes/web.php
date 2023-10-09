<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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
});

Route::get('/produit', [AdminController::class, 'produit']);


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


require __DIR__.'/auth.php';
