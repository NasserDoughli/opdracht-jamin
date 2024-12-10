<?php

use App\Http\Controllers\leverancierController;
use App\Http\Controllers\LeverancierProductLeveringController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/overzicht-leverancier', [LeverancierController::class, 'index'])->name('leverancier.show');
Route::get('/create-leverancier', [LeverancierController::class, 'create'])->name('leverancier.create');

Route::post('/create-leverancier', LeverancierController::class .'@store')->name('leverancier.store');

Route::get('leverancier/{leverancier}/product/{product}/levering/create',
    [LeverancierProductLeveringController::class, 'create'])->name('levering.create');

Route::post('leverancier/{leverancier}/product/{product}/levering',
    [LeverancierProductLeveringController::class, 'store'])->name('levering.store');



Route::get('/leverancier/{id}', [LeverancierController::class, 'show'])->name('leverancier.show-product');

Route::get('/leverancier/{leverancier}/product/{product}/levering/create', [
    LeverancierProductLeveringController::class, 'create'
])->name('leverancier.product.levering.create');



//Route::delete('/leveranciers/{leverancier}', LeverancierController::class .'@destroy')->name('leverancier.destroy');
//Route::get('/leveranciers/{leverancier}/edit', LeverancierController::class .'@edit')->name('leverancier.edit');
//Route::put('/leveranciers/{leverancier}', LeverancierController::class .'@update')->name('leverancier.update');



