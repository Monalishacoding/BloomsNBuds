<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Category;


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

Route::get('/' , 
    [PagesController::class , 'index'])
    ->name('page.index');

Route::get('/about-us',
    [PagesController::class , 'aboutUs'])
    ->name('page.about');

Route::get('/contact-us' , 
    [PagesController::class , 'contactUs'])
    ->name('page.contact');


Route::post('/contact-us' , 
[PagesController::class , 'sendContactDetails'])
->name('send.contactus');


Route::get('/services' , 
    [PagesController::class , 'services'])
    ->name('page.services');


Route::get(
    '/our-clients' , 
    [PagesController::class , 'ourClients'])
    ->name('page.clients');  

Route::post('/contact' , 
    [PagesController::class , 'sendContactDetails'])
    ->name('send.contactus');


// bholi si soorat ???



// Admin

Route::prefix('admin')->middleware('web')->group(function() {

    Route::get('login', [SessionController::class , 'create'])->name('admin.session.create');

   //login post route to admin auth controller
   Route::post('/login', [SessionController::class , 'store'])->name('admin.session.store');

    Route::middleware('admin')->group(function () {
        
        // Admin Home
        Route::get('/' , [AdminController::class , 'index'])->name('admin.dashboard.index');

        // Categories
        Route::prefix('category')->group(function(){

            // Category Index
            Route::get('/' , [CategoryController::class, 'index'])->name('admin.categories.index');


            Route::get('create' , [CategoryController::class, 'create'])->name('admin.categories.create');

            // Category Create
            Route::post('create', [CategoryController::class , 'store'])->name('admin.category.store');

        });
    });


});
