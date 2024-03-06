<?php

use App\Http\Controllers\AdminController\HomepageController;
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

Route::group(['controller' => HomepageController::class,'prefix' => 'group', 'as' => 'group.'],  function () {
    Route::get('/', 'index')->name('index');
    Route::get('edit/{groupModel}', 'edit')->name('edit');
    Route::delete('destroy/{groupModel}', 'destroy')->name('destroy');
    Route::get('form_check','check')->name('form_check');
});

