<?php

use App\Http\Controllers\Home\BbController;
use App\Http\Controllers\Home\RubricController;
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

Route::group(['namespace' => 'App\Http\Controllers\Home', 'prefix' => 'home'], function () {

    Route::controller(BbController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/bbs/create', 'create')->name('bb.create');
        Route::post('/bbs', 'store')->name('bb.store');
        Route::get('bbs.{bb}', 'show')->name('bb.show');
        Route::get('/bbs/{bb}/edit', 'edit')->name('bb.edit');
        Route::patch('/bbs/{bb}', 'update')->name('bb.update');
        Route::delete('/bbs/{bb}', 'destroy')->name('bb.destroy');
    });

    Route::controller(RubricController::class)->group(function () {
        Route::get('/rubrics', 'index')->name('rubric.index');
        Route::get('/rubrics/create', 'create')->name('rubric.create');
        Route::post('/rubrics', 'store')->name('rubric.store');
        Route::get('/rubrics/{rubric}', 'show')->name('rubric.show');
        Route::get('/rubrics/{rubric}/edit', 'edit')->name('rubric.edit')
            ->middleware('can:update,bb');
        Route::patch('/rubrics/{rubric}', 'update')->name('rubric.update')
            ->middleware('can:update,bb');
        Route::delete('/rubrics/{rubric}', 'destroy')->name('rubric.destroy')
            ->middleware('can:destroy,bb');
    });
});

// Route::get('/home', [HomeController::class, 'index'])
//     ->name('home');

// Route::get('/home/add', [HomeController::class, 'showAddBbForm'])
//     ->name('bb.add');

// Route::post('/home', [HomeController::class, 'storeBb'])
//     ->name('bb.store');

// Route::get('/home/{bb}/edit', [HomeController::class, 'showEditBbForm'])
//     ->name('bb.edit')->middleware('can:update,bb');

// Route::patch('/home/{bb}', [HomeController::class, 'updateBb'])
//     ->name('bb.update')->middleware('can:update,bb');

// Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])
//     ->name('bb.delete')->middleware('can:destroy,bb');

// Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])
//     ->name('bb.destroy')->middleware('can:destroy,bb');


Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/{bb}', [PublicController::class, 'show'])->name('bb.show');


// Route::get('/home/rubric_add', [RubricController::class, 'create'])
//     ->name('rubric.add');
