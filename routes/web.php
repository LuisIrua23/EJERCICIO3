<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('trucker/truck/listar',[TruckerTruckController::class, 'listar'])->name('trucker_truck.listar');
Route::get('trucker/asociar/truck',[TruckerTruckController::class, 'asociar'])->name('trucker_truck.asociar');
Route::post('trucker/store',[TruckerTruckController::class, 'store'])->name('trucker_truck.store');




