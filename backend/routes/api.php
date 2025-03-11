<?php 

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

//TodoControllerのindex,store,show,update,destroyをまとめて記述
// Route::apiResource('todos', TodoController::class);これはまとめて記述できる方法

//TodoControllerをそれぞれのメソッドで記述
Route::get('todos', [TodoController::class, 'index']);
Route::post('todos', [TodoController::class, 'store']);
Route::get('todos/{todo}', [TodoController::class, 'show']);
Route::put('todos/{todo}', [TodoController::class, 'update']);
Route::delete('todos/{todo}', [TodoController::class, 'destroy']);

