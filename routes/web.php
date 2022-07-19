<?php

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

Route::get('/', function () {
    return view('welcome');
});

// 入力画面
Route::get('/equipment/register', [App\Http\Controllers\Equipment_RegisterController::class, 'index']);

// 確認画面
Route::get('/equipment/register/confirm', [App\Http\Controllers\Equipment_RegisterController::class, 'confirm']);

// 登録用
Route::post('/equipment/register/confirm/store', [App\Http\Controllers\Equipment_RegisterController::class, 'store']);



// スケジュール画面
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index']);

// スケジュール登録画面
Route::get('/schedule/register', [App\Http\Controllers\ScheduleController::class, 'register']);

// 登録
Route::post('/schedule/register', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.register');

// スケジュール編集画面
Route::get('/schedule/edit', [App\Http\Controllers\ScheduleController::class, 'edit']);

// スケジュールをアップデート
Route::post('/schedule/edit', [App\Http\Controllers\ScheduleController::class, 'update']);

// スケジュールの削除画面
Route::get('/schedule/destroy', [App\Http\Controllers\ScheduleController::class, 'destroy']);

// スケジュールの削除
Route::post('/schedule/destroy', [App\Http\Controllers\ScheduleController::class, 'delete']);

// sort
Route::patch('/schedule/register',[App\Http\Controllers\ScheduleController::class, 'sort']);

//edit画面でのsort
Route::patch('/schedule/edit',[App\Http\Controllers\ScheduleController::class, 'sort_edit']);


Route::patch('/schedule/checkbox',[App\Http\Controllers\ScheduleController::class, 'checkbox']);