<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentsController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('contact-us', [App\Http\Controllers\HomeController::class, 'store'])->name('contact.us.store');
Route::get('/became-an-agent', function () {
    return view('became-an-agent');
});
Route::get('/became-an-agent/create-step1', [App\Http\Controllers\AgentsController::class, 'createStep1']);
Route::post('/became-an-agent/create-step1', [App\Http\Controllers\AgentsController::class, 'postCreateStep1']);
Route::get('/became-an-agent/create-step2', [App\Http\Controllers\AgentsController::class, 'createStep2']);
Route::post('/became-an-agent/create-step2', [App\Http\Controllers\AgentsController::class, 'postCreateStep2']);
Route::get('/became-an-agent/create-step3', [App\Http\Controllers\AgentsController::class, 'createStep3']);
Route::post('/became-an-agent/create-step3', [App\Http\Controllers\AgentsController::class, 'postCreateStep3']);
Route::get('/became-an-agent/create-step4', [App\Http\Controllers\AgentsController::class, 'createStep4']);
Route::post('/became-an-agent/create-step4', [App\Http\Controllers\AgentsController::class, 'postCreateStep4']);
Route::get('/became-an-agent/previewPage', [App\Http\Controllers\AgentsController::class, 'createPreview']);
Route::post('/became-an-agent/store', [App\Http\Controllers\AgentsController::class, 'store']);

Route::get('/agent/profile', [App\Http\Controllers\AgentsController::class, 'accountProfile']);

Route::get('/services', function () {
    return view('services');
});