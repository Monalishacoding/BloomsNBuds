<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CategoryListController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\SessionController;
use App\Models\Category;
use App\Models\CategoryList;
use App\Models\Testimonial;

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


Route::get('/services' , [PagesController::class , 'services'])
    ->name('page.services');


Route::get('/our-clients' ,
    [PagesController::class , 'ourClients'])
    ->name('page.clients');

Route::post('/contact' , [PagesController::class , 'sendContactDetails'])
    ->name('send.contactus');

Route::get('/category/{slug}' , [PagesController::class , 'category'])
    ->name('category.page');



// Admin
Route::prefix('admin')->group(function() {

    Route::get('login', [SessionController::class , 'create'])->name('admin.session.create');

   //login post route to admin auth controller
   Route::post('/login', [SessionController::class , 'store'])->name('admin.session.store');

    Route::middleware('admin')->group(function () {

        Route::get('logout' , [SessionController::class , 'destroy'])   ->name('admin.logout');

        // Admin Home
        Route::get('/' , [AdminController::class , 'index'])->name('admin.dashboard.index');

        // Categories
        Route::prefix('category')->group(function(){

            // Category Index
            Route::get('/' , [CategoryController::class, 'index'])->name('admin.categories.index');

            Route::get('create' , [CategoryController::class, 'create'])->name('admin.categories.create');

            // Category Create
            Route::post('create', [CategoryController::class , 'store'])->name('admin.category.store');

            // Category Edit
            Route::get('edit/{id}' , [CategoryController::class , 'edit'])->name('admin.categories.edit');

            Route::put('edit/{id}' , [CategoryController::class , 'update'])->name('admin.categories.update');


            // Delete
            Route::post('/delete/{id}', [CategoryController::class , 'delete'])->name('admin.categories.delete');
        });

        // Categories List
        Route::prefix('categories-list' , [CategoryListController::class , 'index'])->group(function(){

            //Category List Index
            Route::get('/' , [CategoryListController::class , 'index'])
                ->name('admin.categories-list.index');

            //Category List Create
            Route::get('/create' , [CategoryListController::class , 'create'])
                ->name('admin.categories-list.create');


            // Store
            Route::post('/create' , [CategoryListController::class , 'store'])
                ->name('admin.categories-list.store');

            // Category List Edit
            Route::get('edit/{id}' , [CategoryListController::class , 'edit'])->name('admin.categories-list.edit');

            Route::put('edit/{id}' , [CategoryListController::class , 'update'])->name('admin.categories-list.update');


            //Category List Delete
            Route::post('/delete/{id}', [CategoryListController::class , 'delete'])->name('admin.categories-list.delete');



        });

        // Gallery
        Route::prefix('galleries')->group(function(){

            // Category Index
            Route::get('/' , [GalleryController::class, 'index'])->name('admin.galleries.index');

            Route::get('create' , [GalleryController::class, 'create'])->name('admin.galleries.create');

            // Category Create
            Route::post('create', [GalleryController::class , 'store'])->name('admin.gallery.store');

            // Category Edit
            Route::get('edit/{id}' , [GalleryController::class , 'edit'])->name('admin.galleries.edit');

            Route::put('edit/{id}' , [GalleryController::class , 'update'])->name('admin.galleries.update');


            // Delete
            Route::post('/delete/{id}', [GalleryController::class , 'delete'])->name('admin.galleries.delete');
        });


        // Testimonials
        Route::prefix('testimonials')->group(function(){

            // Testimonials Index
            Route::get('/' , [TestimonialController::class, 'index'])->name('admin.testimonials.index');

            Route::get('create' , [TestimonialController::class, 'create'])->name('admin.testimonials.create');

            // Category Create
            Route::post('create', [TestimonialController::class , 'store'])->name('admin.testimonial.store');

            // Category Edit
            Route::get('edit/{id}' , [TestimonialController::class , 'edit'])->name('admin.testimonials.edit');

            Route::put('edit/{id}' , [TestimonialController::class , 'update'])->name('admin.testimonials.update');


            // Delete
            Route::post('/delete/{id}', [TestimonialController::class , 'delete'])->name('admin.testimonials.delete');
        });

        // Settings
        Route::get('settings' , [SettingsController::class , 'index'])  ->name('admin.settings.index');


    });

    // Settings
    Route::prefix('settings')->group(function(){
        Route::get('/' , [SettingsController::class , 'index'])->name('admin.settings.index');
    });

});
