<?php

use App\Http\Controllers\Account\BbController;
use App\Http\Controllers\Account\RubricController;
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

Route::redirect('/', '/account')->name('home');

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Account', 'prefix' => 'account'], function () {

    Route::controller(BbController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/bbs/create', 'create')->name('bb.create');
        Route::get('/bbs', 'store')->name('bb.store');
        Route::get('bbs.{bb}', 'show')->name('bb.show');
        Route::get('/bbs/{bb}/edit', 'edit')->name('bb.edit');
        Route::get('/bbs/{bb}', 'update')->name('bb.update');
        Route::get('/bbs/{bb}', 'destroy')->name('bb.destroy');
    });

    Route::controller(RubricController::class)->group(function () {
        Route::get('/rubrics', 'index')->name('rubric.index');
        Route::get('/rubrics/create', 'create')->name('rubric.create');
        Route::get('/rubrics', 'store')->name('rubric.store');
        Route::get('/rubrics/{rubric}', 'show')->name('rubric.show');
        Route::get('/rubrics/{rubric}/edit', 'edit')->name('rubric.edit')
            ->middleware('can:update,bb');
        Route::get('/rubrics/{rubric}', 'update')->name('rubric.update')
            ->middleware('can:update,bb');
        Route::get('/rubrics/{rubric}', 'destroy')->name('rubric.destroy')
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


// Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');


// Route::get('/home/rubric_add', [RubricController::class, 'create'])
//     ->name('rubric.add');