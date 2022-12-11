<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;
use App\Models\Showroom;

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
    return view('Home-Kemal');
});

Route::get('/login', function () {
    return view('Login-Kemal');
});

Route::get('/register', function () {
    return view('Register-Kemal');
});

Route::get('/additem', function () {
    return view('Add-Kemal');
});

Route::get('my-car', [ShowroomController::class, 'index']);

Route::get('detail/{id}', [ShowroomController::class, 'detail']);

route::resource('my-car', ShowroomController::class);

Route::get('detail/{id}', [ShowroomController::class, 'detail']);
Route::get('edit/{id}', [ShowroomController::class, 'edit']);
