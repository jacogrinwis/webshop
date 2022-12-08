<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
// Route::get('/', function() {
//     print('I am an admin');
// });

Route::resource('users', UsersController::class)->only([
    'index', 'update', 'destroy', 'edit'
]);

Route::resource('users', UsersController::class)->except([
    'show', 'create', 'store'
]);
