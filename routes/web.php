<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\AdminShopController;
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

Route::get('/', function (){
    return view('admin.dashboard');
})->middleware('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/admin')->group(function (){
    //Admin Login Route 
    Route::match(['get','post'], 'login', [AdminController::class, 'login'])->name('admin.login');
    //;

    //Admin Group
    Route::group(['middleware' =>['admin']], function(){
       // Admin Dashboard
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        //Admin Shop page
            Route::get('/shop/index', [AdminShopController::class, 'index'])->name('admin.shop');
            Route::post('/shop/index/categories', [AdminShopController::class, 'addCategory'])->name('admin.shop.addCategory');
            Route::post('/shop/index/items', [AdminShopController::class, 'addItem'])->name('admin.shop.addItem');




        Route::get('store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('sections', [SectionsController::class, 'sections'])->name('admin.sections');
        // Update Admin Password
        Route::match(['get', 'post'], 'update-admin-password', [AdminController::class, 'updateAdminPassword'])->name('admin.update-admin-password');
        //check Admin Password
        Route::match(['get', 'post'], 'check-admin-password', [AdminController::class, 'checkAdminPassword'])->name('admin.check-admin-password');
        // Update Admin Details
         Route::match(['get', 'post'], 'update-admin-details', [AdminController::class, 'updateAdminDetails'])->name('admin.update-admin-details');
        // Update Vendor Details
        Route::match(['get', 'post'], 'update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails'])->name('admin.update-vendor-details');
        // Admin logout
        Route::match(['get', 'post'], 'logout', [AdminController::class, 'logout'])->name('admin/logout');

        //Categories
        Route::match(['get', 'post'], '/categories', [CategoryController::class, 'store'])->name('categories.store');
    });
    

});

   
    
    





require __DIR__.'/auth.php';

