<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

/**
 * GET      /articles       -> Article'ların bir listesi
 * GET      /articles/4     -> 4 id'li Article detayı
 * GET      /articles/new   -> Yeni bir Article ekleme formu
 * POST     /articles       -> Formdan gelen yeni Article'ın kaydedilmesi
 *
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', [ArticleController::class, 'index']);

Route::get('articles/new', [ArticleController::class, 'create']);

Route::get('articles/{id}', [ArticleController::class, 'show']);

Route::post('articles', [ArticleController::class, 'store']);
