<?php

/**
 * inicio
 */

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;


/**
 * fim
 */

use Illuminate\Support\Facades\Route;
use App\Models\modelAlbum;
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

Route::get('/',  [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');


Route::get('/dashboard', 'App\Http\Controllers\PhotoController@index')->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';

Route::get('/visualizar/{id}', 'App\Http\Controllers\PhotoController@show')->middleware(['auth'])->name('visualizar');
require __DIR__ . '/auth.php';


Route::get('/cadastrar', 'App\Http\Controllers\PhotoController@create')->middleware(['auth'])->name('cadastrar');
require __DIR__ . '/auth.php';

Route::post('/cadastrar','App\Http\Controllers\PhotoController@store')->middleware(['auth'])->name('cadastrar');
require __DIR__ . '/auth.php';

Route::get('{id}/edit','App\Http\Controllers\PhotoController@edit')->middleware(['auth'])->name('cadastrar');
require __DIR__ . '/auth.php';

Route::put('{id}/edit','App\Http\Controllers\PhotoController@update')->middleware(['auth'])->name('cadastrar');
require __DIR__ . '/auth.php';

