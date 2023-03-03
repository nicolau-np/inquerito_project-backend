<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('{id}/comments', [PostController::class, 'comments']);
});

Route::prefix('comments')->group(function () {
    Route::post('/', [CommentController::class, 'store']);
});

Route::prefix('excel')->group(function () {
    Route::get('/comments', [ExcelController::class, 'comments']);
});