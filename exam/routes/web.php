<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\AddProductComponent;
use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\EditProductComponent;
use App\Http\Livewire\Admin\HomeComponent;
use App\Http\Livewire\Admin\ListproductCoponent;
use App\Http\Livewire\Admin\SubcategoryComponent;
use App\Http\Livewire\Front\CartComponent;
use App\Http\Livewire\Front\FrontHomeComponent;
use App\Http\Livewire\Front\ProductDetailsComponent;
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

Route::get('/',FrontHomeComponent::class);
Route::get('/product/details/{slug}',ProductDetailsComponent::class)->name('product.details');
Route::get('/cart',CartComponent::class)->name('cart');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin',HomeComponent::class)->name('admin');
    //category
    Route::get('admin/category', CategoryComponent::class)->name('admin.category');

    //sub category
    Route::get('admin/subcategory', SubcategoryComponent::class)->name('admin.subcategory');


    //Product
    Route::get('admin/product',ListproductCoponent::class)->name('admin.product');
    Route::get('admin/add-product',AddProductComponent::class)->name('admin.add.product');
    Route::get('admin/product/edit/{id}',EditProductComponent::class)->name('admin.edit.product');


});

require __DIR__.'/auth.php';
