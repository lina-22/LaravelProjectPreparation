<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PaysController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get("/admin/pays",[PaysController::class,"index"]);
//Afficher le formualaire d'ajout
Route::get("/admin/pays/create",[PaysController::class,"create"]);
//Traitement du formulaire
Route::post("/admin/pays",[PaysController::class,"store"]);


Route::get("/admin/alldestination",[DestinationController::class,"index"]);
//Afficher le formualaire d'ajout
Route::get("/admin/destination/create",[DestinationController::class,"create"]);
//Traitement du formulaire
Route::post("/admin/destination",[DestinationController::class,"store"]);

//Faire les mapping d'un seul resource controller
// Route::resource("admin/pays",PaysController::class);

//Faire le mapping de plusieurs resources controllers
// Route::resources(
//     [
//         "admin/pays"=>PaysController::class,
//         "admin/destinations"=>DestinationsController::class
//     ]
// );
