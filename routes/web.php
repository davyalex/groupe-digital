<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\UserController;


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


    Route::get('/', [App\Http\Controllers\AcceuilController::class, 'index'])->name('Acceuil');
   
    Route::get('/offre.useroffre', [App\Http\Controllers\OffreController::class, 'useroffre'])->name('offre.useroffre_create');
    Route::get('/offre.index', [App\Http\Controllers\OffreController::class, 'index'])->name('offre.index');
    Route::get('/offre.search', [App\Http\Controllers\OffreController::class, 'search'])->name('offre.search');
    Route::get('/offre.filtre', [App\Http\Controllers\OffreController::class, 'filtre'])->name('offre.filtre');

    
    Route::get('/formation', [App\Http\Controllers\FormationController::class, 'index'])->name('Formation');

     /*
-------------------------Gestion Freelance-------------------------------
*/
    Route::get('/freelance.index', [App\Http\Controllers\FreelanceController::class, 'index'])->name('freelance.index');
    Route::get('/freelance.create', [App\Http\Controllers\FreelanceController::class, 'create'])->name('freelance.create');
    Route::post('/freelance.store', [App\Http\Controllers\FreelanceController::class, 'store'])->name('freelance.store');
    Route::get('/freelance.mesannonces', [App\Http\Controllers\FreelanceController::class, 'mesannonces'])->name('freelance.mesannonces');
    Route::delete('/freelance.destroy/{freelance}', [App\Http\Controllers\FreelanceController::class, 'destroy'])->name('freelance.destroy');
    Route::get('/freelance.edit/{freelance}', [App\Http\Controllers\FreelanceController::class, 'edit'])->name('freelance.edit');
    Route::put('/freelance.update/{freelance}', [App\Http\Controllers\FreelanceController::class, 'update'])->name('freelance.update');
    Route::get('/freelance.search', [App\Http\Controllers\FreelanceController::class, 'search'])->name('freelance.search');


/*
-------------------------ROUTE BACKEND-------------------------------
*/
Route::get('/cat.index', [App\Http\Controllers\CategoryController::class, 'index'])->name('cat.index');
  /*
-------------------------Gestion Offre-------------------------------
*/
Route::prefix('admin')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/offre.create', [App\Http\Controllers\OffreController::class, 'create'])->name('offre.create');
    Route::post('/offre.store', [App\Http\Controllers\OffreController::class, 'store'])->name('offre.store');
    Route::get('/offre.edit/{offre}', [App\Http\Controllers\OffreController::class, 'edit'])->name('offre.edit');
    Route::get('/offre.show/{offre}', [App\Http\Controllers\OffreController::class, 'show'])->name('offre.show');
    Route::put('/offre.update/{offre}', [App\Http\Controllers\OffreController::class, 'update'])->name('offre.update');
    Route::delete('/offre.destroy/{offre}', [App\Http\Controllers\OffreController::class, 'destroy'])->name('offre.destroy');

  /*
-------------------------Gestion TYPE-------------------------------
*/

Route::post('/type.store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
Route::delete('/type.destroy{type}', [App\Http\Controllers\TypeController::class, 'destroy'])->name('type.destroy');

    /*
-------------------------Gestion Categorie-------------------------------
*/

Route::get('/cat.create', [App\Http\Controllers\CategoryController::class, 'create'])->name('cat.create');
Route::post('/cat.store', [App\Http\Controllers\CategoryController::class, 'store'])->name('cat.store');
Route::get('/cat.edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('cat.edit');
Route::put('/cat.update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('cat.update');
Route::delete('/cat.destroy/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('cat.destroy');


/*
-------------------------Gestion users-------------------------------
*/

Route::get('/userlist', [App\Http\Controllers\UserController::class, 'index'])->name('userlist');
Route::get('/useredit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('useredit');
Route::put('/userupdate/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('userupdate');
Route::delete('/userdestroy/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('userdestroy');

    

});



/*
------------------------- END ROUTE BACKEND-------------------------------
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




