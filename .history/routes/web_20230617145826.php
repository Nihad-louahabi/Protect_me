<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AdopteComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\admin\AdminDashboardComponent;
use App\Http\Livewire\admin\AdminContactComponent;
use App\Http\Livewire\admin\AdminCategoryComponent;
use App\Http\Livewire\admin\AdminAddCategoryComponent;
use App\Http\Livewire\admin\AdminEditCategoryComponent;
use App\Http\Livewire\admin\AdminAnimalComponent;
use App\Http\Livewire\admin\AdminAddAnimalComponent;
use App\Http\Livewire\admin\AdminEditAnimalComponent;
use App\Http\Livewire\admin\AdminUserComponent;
use App\Http\Livewire\user\UserAnimalComponent;
use App\Http\Livewire\user\UserAddAnimalComponent;
use App\Http\Livewire\user\UserEditAnimalComponent;

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
    Route::get('/admin/contact-us',AdminContactComponent::class)->name('admin.contact');
    Route::get('/admin/users',AdminUsersComponent::class)->name('admin.users');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/user/animals}',UserAnimalComponent::class)->name('user.animals');
    Route::get('/user/animal/add}',UserAddAnimalComponent::class)->name('user.animal.add');
    Route::get('/user/animal/edit/{animal_id}',UserEditAnimalComponent::class)->name('user.animal.edit');
});

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/adopte',AdopteComponent::class)->name('adopte');
Route::get('/animal/{slug}',DetailsComponent::class)->name('animal.details');
Route::get('/animal-category/{slug}',CategoryComponent::class)->name('animal.category');
Route::get('/search',SearchComponent::class)->name('animal.search');
Route::get('/wishlist',WishlistComponent::class)->name('adopte.wishlist');
Route::get('/contact-us',ContactComponent::class)->name('contact');
Route::get('/about',AboutComponent::class)->name('about');
require __DIR__.'/auth.php';
