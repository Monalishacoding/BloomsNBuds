<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/services' , 
    [PagesController::class , 'services'])
    ->name('page.services');


Route::get(
    '/our-clients' , 
    [PagesController::class , 'ourClients'])
    ->name('page.clients');  
