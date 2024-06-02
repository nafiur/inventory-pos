<?php

use App\Livewire\Unit\EditUnit;
use App\Livewire\Unit\CreateUnit;
use App\Livewire\Brand\CreateBrand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('/sales-dashboard', [DashboardController::class, 'SalesDashboard'])->name('sales.dashboard');
    Route::get('/products', [DashboardController::class, 'Products'])->name('products');
    Route::get('/create-product', [DashboardController::class, 'CreateProduct'])->name('create.product');






});

Route::middleware('auth')->group(function () {
    Route::controller(BrandController::class)->group(function () {
        Route::get('/brand', 'Index')->name('brand.index');
    });
    Route::get('/brand/create', CreateBrand::class)->name('create.brand');



    Route::controller(UnitController::class)->group(function () {
        Route::get('/unit', 'Index')->name('unit.index');
    });
    Route::get('/unit/create', CreateUnit::class)->name('create.unit');
    Route::get('/unit/edit/{unitId}', EditUnit::class)->name('edit.unit');


    Route::controller(PosController::class)->group(function () {
        Route::get('/pos', 'Index')->name('pos.index');
    });
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';