<?php

use App\Http\Controllers\Admin\AdvertController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
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

// Route::redirect('/', '/home')->name('home');

Auth::routes();

Route::controller(PublicController::class)->group(function () {
    Route::get('/', 'index')->name('public.index');
    Route::get('adverts.{advert}', 'show')->name('public.show');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/adverts/create', 'create')->name('home.create');
    Route::post('/adverts', 'store')->name('home.store');
    Route::get('adverts.{advert}', 'show')->name('home.show');
    Route::get('/adverts/{advert}/edit', 'edit')->name('home.edit');
    Route::patch('/adverts/{advert}', 'update')->name('home.update');
    Route::delete('/adverts/{advert}', 'destroy')->name('home.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::controller(AdvertController::class)->group(function () {
        Route::get('/', 'index')->name('advert.index');
        Route::get('/adverts/create', 'create')->name('advert.create');
        Route::post('/adverts', 'store')->name('advert.store');
        Route::get('adverts.{advert}', 'show')->name('advert.show');
        Route::get('/adverts/{advert}/edit', 'edit')->name('advert.edit');
        Route::patch('/adverts/{advert}', 'update')->name('advert.update');
        Route::delete('/adverts/{advert}', 'destroy')->name('advert.destroy');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/categorys', 'index')->name('category.index');
        Route::get('/categorys/create', 'create')->name('category.create');
        Route::post('/categorys', 'store')->name('category.store');
        Route::get('/categorys/{category}', 'show')->name('category.show');
        Route::get('/categorys/{category}/edit', 'edit')->name('category.edit')
            ->middleware('can:update,advert');
        Route::patch('/categorys/{category}', 'update')->name('category.update')
            ->middleware('can:update,advert');
        Route::delete('/categorys/{category}', 'destroy')->name('category.destroy')
            ->middleware('can:destroy,advert');
    });
});


