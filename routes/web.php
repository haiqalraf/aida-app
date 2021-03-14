<?php

use App\Models\Article;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('search.main');
})->name('search.main');

Route::get('/result/{article:slug}', function ($search) {
    $search = Article::where('slug', $search)->first();
    return view('search.result', ['search' => $search]);
})->name('search.result.data');

Route::get('/result', function (Request $request) {
    $articles = Article::where('title', 'like', '%' . $request->search . '%')
        ->orWhere('body', 'like', '%' . $request->search . '%')->get();
    return view('search.result', ['key' => $request->search, 'articles' => $articles]);
})->name('search.result');

Route::group(['prefix' => 'laravel-filemanager'], function () {
    Lfm::routes();
});

Route::prefix('articles')->middleware('auth')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
});

Route::prefix('admin')->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('/setting', 'App\Http\Controllers\UserController@setting2')->name('admin.setting');
        Route::post('/update', 'App\Http\Controllers\UserController@update')->name('admin.update');
        Route::get('/avatar', 'App\Http\Controllers\UserController@gambar')->name('admin.avatar');
        Route::post('/avatar/update', 'App\Http\Controllers\UserController@update2')->name('admin.avatar.update');
        Route::put('/avatar', 'App\Http\Controllers\UserController@avatar')->name('admin.avatar.delete');
        Route::get('/help', function () {
            return view('admin.help');
        })->name('admin.help');
    });

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});
