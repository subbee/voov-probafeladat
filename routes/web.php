<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CustomerController;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
        'prefix' => 'admin',
    ], function () {
        Route::resource('/customers', CustomerController::class);
});
