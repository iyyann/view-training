<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;
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
    return view('welcome');
});
Route::get('/form', function () {
    return view('layout.form');
});

Route::post('/submit', [NameController::class, 'submit']);

Route::get('/get-names', [NameController::class, 'getNames']);

Route::post('/edit', [NameController::class, 'edit']);

Route::post('/update', [NameController::class, 'update']);

Route::post('/delete', [NameController::class, 'delete']);

Route::post('/submit-name', [NameController::class, 'formSubmit']);

Route::get('/app', function () {
    return view('app');
});

Route::get('/car', function () {
    return view('car.app');
});
