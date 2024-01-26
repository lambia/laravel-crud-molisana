<?php

use App\Http\Controllers\PastaController;
use Illuminate\Support\Facades\Route;
use App\Models\Pasta;

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
    return redirect()->route('pastas.index');
})->name("home");

// Restituisco la view, si può semplificare (v. sotto)
// Route::get('/', function () {
// $products = Pasta::all();
// return view('pastas.index', compact("products"));
// })->name("home");

// Richiamo index dal controller per evitare di ripetere il codice (v. sopra)
// Route::get("/", [PastaController::class, "index"])->name("home");

// Route::get("/prova/{id}/{altro}", function ($id, $altro) {
//     return "Rotta di prova: $id $altro";
// });

Route::resource("pastas", PastaController::class);
