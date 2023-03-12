<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\Admincomponent;
use App\Http\Livewire\Admin\AdsComponents;
use App\Http\Livewire\Admin\Category\AddCategory;
use App\Http\Livewire\Admin\Category\EditcategoryComponent;
use App\Http\Livewire\Admin\CategoryComponents;
use App\Http\Livewire\Admin\CityComponents;
use App\Http\Livewire\Admin\Country\AddCountryComponents;
use App\Http\Livewire\Admin\Country\EditCountryComponents;
use App\Http\Livewire\Admin\CountryComponents;
use App\Http\Livewire\Admin\PagesComponents;
use App\Http\Livewire\Admin\Post\PostComponents;
use App\Http\Livewire\Admin\State\AddstateComponents;
use App\Http\Livewire\Admin\StateComponents;
use App\Http\Livewire\Admin\Subcategory\AddsubCategory;
use App\Http\Livewire\Admin\Subcategory\EditSubcategory;
use App\Http\Livewire\Admin\SubCategorycomponents;
use App\Http\Livewire\Admin\Users\UserComponents;
use App\Http\Livewire\User\UserComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified',])->name('dashboard');

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('user/dashboard', UserComponent::class )->name('user');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard',Admincomponent::class)->name('admin');


    Route::get('admin/user/all', UserComponents::class)->name('admin.users');

    //Post manager
    Route::prefix('admin/post')->group(function () {
        Route::get('/',PostComponents::class)->name('admin.post');
    });
    //country
    Route::prefix('admin/country')->group(function () {
        Route::get('/',CountryComponents::class)->name('admin.country');
        Route::get('/add', AddCountryComponents::class)->name('admin.country.add');
        Route::get('edit/{id}', EditCountryComponents::class)->name('admin.country.edit');


    });
    //state
    Route::prefix('admin/state')->group(function () {
        Route::get('/',StateComponents::class)->name('admin.state');
        Route::get('/add',AddstateComponents::class)->name('admin.state.add');
    });
    //city
    Route::prefix('admin/city')->group(function () {
        Route::get('/',CityComponents::class)->name('admin.city');
    });
    //Category
    Route::prefix('admin/category')->group(function () {
        Route::get('/',CategoryComponents::class)->name('admin.category');
        Route::get('/add', AddCategory::class)->name('admin.category.add');
        Route::get('/edit/{id}', EditcategoryComponent::class)->name('admin.category.edit');
    });
    //Subcategory
    Route::prefix('admin/subcategory')->group(function () {
        Route::get('/',SubCategorycomponents::class)->name('admin.subcategory');
        Route::get('/add',AddsubCategory::class)->name('admin.add.subcategory');
        Route::get('/edit/{id}', EditSubcategory::class)->name('admin.subcategory.edit');
    });
    //Ads
    Route::prefix('admin/user')->group(function () {
        Route::get('/', AdsComponents::class)->name('admin.ads');
    });
    //Pages
    Route::prefix('admin/user')->group(function () {
        Route::get('/',PagesComponents::class)->name('admin.pages');
    });
});
require __DIR__.'/auth.php';
