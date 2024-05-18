<?php
namespace Routes;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenersController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth',
    ], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::get('me', [AuthController::class, 'me']); 
    });

    Route::prefix('movie')->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('movies.index');
        Route::post('/', [MovieController::class, 'store'])->name('movies.store');
        Route::get('/{id}', [MovieController::class, 'show'])->name('movies.show');
        Route::put('/{id}', [MovieController::class, 'update'])->name('movies.update');
        Route::delete('/{id}', [MovieController::class, 'delete'])->name('movies.delete');
    });

    Route::prefix('geners')->group(function () {
        Route::get('/', [GenersController::class, 'index'])->name('geners.index');
        Route::post('/', [GenersController::class, 'store'])->name('geners.store');
        Route::get('/{id}', [GenersController::class, 'show'])->name('geners.show');
        Route::put('/{id}', [GenersController::class, 'update'])->name('geners.update');
        Route::delete('/{id}', [GenersController::class, 'delete'])->name('geners.delete');
    });

    Route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class, 'index'])->name('comment.index');
        Route::post('/', [CommentController::class, 'store'])->name('comment.store');
        Route::get('/{id}', [CommentController::class, 'show'])->name('comment.show');
        Route::put('/{id}', [CommentController::class, 'update'])->name('comment.update');
        Route::delete('/{id}', [CommentController::class, 'delete'])->name('comment.delete');
    });

Route::get('/test', [MovieController::class, 'test']);


Route::post('/create',[userController::class,'create']);



