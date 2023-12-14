<?php

//use App\Http\Controllers\PostController;

use App\Http\Controllers\API\FrontController;
use App\Http\Controllers\API\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VerifyEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('update/{id}', 'AuthController@update');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('profile', 'AuthController@profile');
});

Route::group([
    'middlew/are' => 'api',
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    //Route::resource('/posts', 'PostController');
});

// Verify email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

// Resend link to verify email
Route::post('/email/verify/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth:api', 'throttle:6,1'])->name('verification.send');

Route::resource('messages', App\Http\Controllers\MessagerieController::class);
Route::resource('besoins', App\Http\Controllers\BesoinController::class);
Route::resource('mission', App\Http\Controllers\MissionController::class);
Route::resource('articles', App\Http\Controllers\API\ArticleController::class);
//Route::resource('stories', App\Http\Controllers\API\StorieController::class);
Route::resource('categorie', App\Http\Controllers\API\CategorieController::class);
Route::get('regions', [App\Http\Controllers\API\RegionController::class, 'index']);
Route::get('villes', [App\Http\Controllers\API\VilleController::class, 'index']);
Route::get('eglises', [App\Http\Controllers\API\EgliseController::class, 'index']);
Route::resource('roles', App\Http\Controllers\API\RoleController::class);
Route::resource('typesCotisation', App\Http\Controllers\TypeCotisationController::class);
Route::resource('cotisation', App\Http\Controllers\API\CotisationController::class);
Route::resource('users', App\Http\Controllers\API\UserController::class);
Route::get('search/{id}', [SearchController::class, 'search']);
Route::resource('/recharge', App\Http\Controllers\RechargeController::class);
Route::get('missionnaire/{q?}', [App\Http\Controllers\API\FrontController::class, 'index']);
Route::get('missionnaire/show/{id}', [App\Http\Controllers\API\FrontController::class, 'show']);
Route::get('fideles/{q?}', [App\Http\Controllers\API\FrontController::class, 'fideles']);
Route::get('fideles/show/{id}', [App\Http\Controllers\API\FrontController::class, 'fidelesShow']);
