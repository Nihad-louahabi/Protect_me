<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AdopteComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminCategoriesComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminAnimalComponent;
use App\Http\Livewire\admin\AdminAddAnimalComponent;
use App\Http\Livewire\admin\AdminEditAnimalComponent;

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
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/animals}',AdminAnimalComponent::class)->name('admin.animals');
    Route::get('/admin/animal/add}',AdminAddAnimalComponent::class)->name('admin.animal.add');
    Route::get('/admin/animal/edit/{animal_id}',AdminEditAnimalComponent::class)->name('admin.animal.edit');

});

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/adopte',AdopteComponent::class)->name('adopte');
Route::get('/animal/{slug}',DetailsComponent::class)->name('animal.details');
Route::get('/animal-category/{slug}',CategoryComponent::class)->name('animal.category');
Route::get('/search',SearchComponent::class)->name('animal.search');
Route::get('/wishlist',WishlistComponent::class)->name('adopte.wishlist');
require __DIR__.'/auth.php';
