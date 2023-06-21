<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AdopteComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;

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




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//For admin
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

});

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/adopte',AdopteComponent::class)->name('adopte');
Route::get('/animal/{slug}',DetailsComponent::class)->name('animal.details');
Route::get('/animal-category/{slug}',CategoryComponent::class)->name('animal.category');
Route::get('/search',SearchComponent::class)->name('animal.search');
require __DIR__.'/auth.php';
