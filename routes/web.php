<?php

use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // URL: /inventory/category/add
    Route::get("/inventory/category/add",[CategoryController::class,'Add'])->name("inventory.category.add");
    Route::post("/inventory/category/add-post", [CategoryController::class ,'AddPost']);

    // URL: /inventory/category/view
    Route::get("/inventory/category", [CategoryController::class ,'Index']);

    // URL: /inventory/category/edit

    // Using  dsflsd
    Route::get("/inventory/category/edit",[CategoryController::class, "Edit"]);
    Route::post("inventory/category/edit-post",[CategoryController::class,"EditPost"]);

    // For deleting Data
    Route::get("/inventory/category/delete",[CategoryController::class, "Delete"]);
    
    // For Search Button
    Route::get("/inventory/category/search",[CategoryController::class, "Search"]);


});

require __DIR__.'/auth.php';
