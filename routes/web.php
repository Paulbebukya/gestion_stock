<?php

use App\Http\Controllers\ApprovionnerController;
use App\Http\Controllers\CommanderController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\MecanicienController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\ProfileController;
use App\Models\Fournisseur;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// ROUTES VERS LE FOURNISSEUR
Route::get('/fournisseur-tables', function () {
    return view('fournisseur.table');
})->name("fournisseur-tables");

Route::get('/create', function () {
    return view('fournisseur.index');
})->name("fournisseur.index");
// Fin route fournisseur


// Route vers Le Mecanicien
Route::get('/Mecanicien-create', function () {
    return view('Mecanicien.index');
})->name("Mecanicien.index");

Route::get('/Mecanicien-table', function () {
    return view('Mecanicien.table');
})->name("Mecanicien.table");
// FIn ROUTES MEC
// Route Pour AJOUTER LES PIECES
Route::get('/Piece-create', function () {
    return view('Piece.index');
})->name("Piece.index");

Route::get('/Piece-table', function () {
    return view('Piece.table');
})->name("Piece.table");
// Fin ROute Pièce

// ROUTE COMMANDES
Route::get('/Commande-create', function () {
    return view('Commande.index');
})->name("Commande.index");

Route::get('/Commande-table', function () {
    return view('Commande.table');
})->name("Commande.table");
// FIN ROUTES COMMANDES
// ROUTE APPROVISIONNEMENT
Route::get('/Approvisionnement-create', function () {
    return view('Approvisionnement.index');
})->name("Approvisionnement.index");

Route::get('/Approvisionnement-table', function () {
    return view('Approvisionnement.table');
})->name("Approvisionnement.table");
// FIN ROUTES APPROVISIONNEMENT

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// crud fournisseur
Route::controller(FournisseurController::class)->group(function(){
     route::get('/fournisseur', 'index')->name('fournisseur.index');
     route::get('/fournisseur/edit', 'edit')->name('fournisseur.edit');
     route::get('/fournisseur/update', 'update')->name('fournisseur.update');
     route::get('/fournisseur/destroy/', 'destroy')->name('fournisseur.destroy');

});

//crud mecanicien
Route::controller(MecanicienController::class)->group(function(){
    route::get('/mecanicien', 'index')->name('mecanicien.index');
    route::get('/mecanicien/edit', 'edit')->name('mecanicien.edit');
    route::get('/mecanicien/update', 'update')->name('mecanicien.update');
    route::get('/mecanicien/destroy/', 'destroy')->name('mecanicien.destroy');

});


//crud piece
Route::controller(PieceController::class)->group(function(){
    route::get('/piece', 'index')->name('piece.index');
    route::get('/piece/edit', 'edit')->name('piece.edit');
    route::get('/piece/update', 'update')->name('piece.update');
    route::get('/piece/destroy/', 'destroy')->name('piece.destroy');

});


//crud commander
Route::controller(CommanderController::class)->group(function(){
    route::get('/commande', 'index')->name('commande.index');
    route::get('/commande/edit', 'edit')->name('commande.edit');
    route::get('/commande/update', 'update')->name('commande.update');
    route::get('/commande/destroy/', 'destroy')->name('commande.destroy');

});


//crud approvionner
Route::controller(ApprovionnerController::class)->group(function(){
    route::get('/approvionner', 'index')->name('approvionner.index');
    route::get('/approvionner/edit', 'edit')->name('approvionner.edit');
    route::get('/approvionner/update', 'update')->name('approvionner.update');
    route::get('/approvionner/destroy/', 'destroy')->name('approvionner.destroy');
});






require __DIR__.'/auth.php';
