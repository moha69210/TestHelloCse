<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;
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

//Redirection
Route::get('/', function () {
    return view('vues/affichage');
});

// Route renvoyant vers la page affichage.php.
Route::get('/', function () {
    return view('vues/affichage');
});

// Route renvoyant vers la page du BackOffice, qui liste les informations de chaque star.
Route::get('/listerFicheStar', [StarController::class, 'listerFicheStar']);

// Route permettant de renvoyer vers le formulaire d'ajout d'une fiche star.
Route::get('/ajouterFicheStar', [StarController::class, 'ajouterFicheStar']);

//Route qui permet d'ajouter les infos rentrées dans le formualaire, à la base de données.
Route::post('/postAjouterFicheStar', [StarController::class, 'postAjouterFicheStar']);
