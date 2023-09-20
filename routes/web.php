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
    return view('auth.login');
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
     route::post('/fournisseur/create', 'store')->name('fournisseur.store');
     route::get('/fournisseur/edit/{fournisseur:CodeFourn}', 'edit')->name('fournisseur.edit');
     route::put('/fournisseur/update/{fournisseur:CodeFourn}', 'update')->name('fournisseur.update');
     route::get('/fournisseur/destroy/{fournisseur:CodeFourn}', 'destroy')->name('fournisseur.destroy');
     route::get('/fournisseur-tables', 'table')->name("fournisseur-tables");

});

//crud mecanicien
Route::controller(MecanicienController::class)->group(function(){
    route::get('/mecanicien', 'index')->name('mecanicien.index');
    route::post('/mecanicien/create', 'store')->name('mecanicien.store');
    route::get('/mecanicien/table', 'table')->name('mecanicien.table');
    route::get('/mecanicien/edit/{mecanicien:CodeMecan}', 'edit')->name('mecanicien.edit');
    route::put('/mecanicien/update/{mecanicien:CodeMecan}', 'update')->name('mecanicien.update');
    route::get('/mecanicien/destroy/{mecanicien:CodeMecan}', 'destroy')->name('mecanicien.destroy');

});


//crud piece
Route::controller(PieceController::class)->group(function(){
    route::get('/piece', 'index')->name('piece.index');
    route::get('/piece/table', 'table')->name('Piece.table');
    route::post('/piece/create', 'store')->name('piece.store');
    route::get('/piece/edit/{piece:CodePiece}', 'edit')->name('piece.edit');
    route::put('/piece/update/{piece:CodePiece}', 'update')->name('piece.update');
    route::get('/piece/destroy/{piece:CodePiece}', 'destroy')->name('piece.destroy');

});


//crud commander
Route::controller(CommanderController::class)->group(function(){
    route::get('/commande', 'index')->name('commande.index');
    route::get('/commande/table', 'table')->name("Commande.table");
    route::post('/commande/create', 'store')->name('commande.store');
    route::get('/commande/edit/{commander}', 'edit')->name('commande.edit');
    route::put('/commande/update/{commander}', 'update')->name('commande.update');
    route::get('/commande/destroy/{commander}', 'destroy')->name('commande.destroy');

});


//crud approvionner
Route::controller(ApprovionnerController::class)->group(function(){
    route::get('/approvionner', 'index')->name('approvionner.index');
    route::get('/approvionner/table', 'table')->name('approvisionnement.table');
    route::post('/approvionner/create', 'store')->name('approvionner.store');
    route::get('/approvionner/edit/{approvionner}', 'edit')->name('approvionner.edit');
    route::put('/approvionner/update/{approvionner}', 'update')->name('approvionner.update');
    route::get('/approvionner/destroy/{approvionner}', 'destroy')->name('approvionner.destroy');
});






require __DIR__.'/auth.php';
