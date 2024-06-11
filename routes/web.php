<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('trucker/truck/listar',[TruckerTruckController::class, 'listar'])->name('trucker_truck.listar');
Route::get('trucker/asociar/truck',[TruckerTruckController::class, 'asociar'])->name('trucker_truck.asociar');
Route::post('trucker/store',[TruckerTruckController::class, 'store'])->name('trucker_truck.store');

Route::get('paquete/listar', [PackageController::class, 'listar'])->name('package.listar');
Route::get('paquete/create', [PackageController::class, 'create'])->name('package.create');
Route::post('paquete/store', [PackageController::class, 'store'])->name('package.store');
Route::get('paquete/{paq}', [PackageController::class, 'show'])->name('package.show');
Route::put('paquete/{paq}', [PackageController::class, 'update'])->name('package.update');
Route::delete('paquete/{paq}', [PackageController::class, 'destroy'])->name('package.destroy');
Route::get('paquete/{paq}/edit', [PackageController::class, 'edit'])->name('package.edit');


