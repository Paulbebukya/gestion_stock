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
