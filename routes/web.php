<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\LignefactureController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\RdvComCliController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::resource('employes', EmployesController::class);
    Route::resource('client', ClientController::class);
    Route::resource('produit', ProduitController::class);
    Route::resource('rdvcomcli', RdvComCliController::class)->parameters([
        'rdvcomcli' => 'RdvComCli'
    ]);
    Route::resource('achats', FactureController::class)->parameters([
        'achats' => 'facture'
    ]);
    Route::resource('lignefacture', LignefactureController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


