<?php

use App\Http\Controllers\BasicForm; //Note to self, a-nya harus capital
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

Route::get('/basicform', [BasicForm::class, 'input']);
Route::post('/valida', [BasicForm::class, 'valid']); 