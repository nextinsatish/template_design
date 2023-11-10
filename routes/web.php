<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\controllerEmployee;
use App\Http\Controllers\controllerManageSchool;
use App\Http\Controllers\Masters\controllerSchool;;

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

Route::get('/Dashboard', function () {
    return view('Dashboard.Dashboard');
});


Route::group(['prefix' => 'Employee'], function () {
    Route::get('/index', [controllerEmployee::class, 'index']);
    Route::get('/Create', [controllerEmployee::class, 'create']);
    Route::get('/Update', [controllerEmployee::class, 'update']);
});

Route::group(['prefix' => 'ManageSchool'], function () {
    Route::get('/index', [controllerManageSchool::class, 'index']);
    Route::get('/Create', [controllerManageSchool::class, 'create']);
    Route::get('/Edit', [controllerManageSchool::class, 'edit']);
    Route::get('/View', [controllerManageSchool::class, 'show']);
});
Route::group(['prefix' => 'Masters'], function () {
    Route::get('School/index',[controllerSchool::class,'index']);
    // Route::get('School/Create',[controllerSchool::class,'create']);
});
