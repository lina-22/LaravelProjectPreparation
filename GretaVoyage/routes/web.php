<?php

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
//Affiche le formualaire d'ajout
Route::get("/admin/pays/create",[PaysController::class,"create"]);
//Traitement du formulaire
Route::post("/admin/pays",[PaysController::class,"store"]);

//Faire les mapping d'un seul resource controller

Route::resource("admin/payss", PaysController::class);
Route::resources(["admin/pays"=>paysController::class,
]);
