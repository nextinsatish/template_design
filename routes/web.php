<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\controllerEmployee;
use App\Http\Controllers\Employee\controllerMytask;

use App\Http\Controllers\controllerManageSchool;
use App\Http\Controllers\Masters\controllerSchool;
use App\Http\Controllers\Masters\controllerHeadquarter;
use App\Http\Controllers\Masters\controllerArea;
use App\Http\Controllers\Masters\controllerState;
use App\Http\Controllers\Masters\controllerCity;



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
    Route::get('Employee/index', [controllerEmployee::class, 'index']);
    Route::get('Employee/Create', [controllerEmployee::class, 'create']);
    Route::get('Employee/Update', [controllerEmployee::class, 'update']);
    // ======my task========================//
    Route::get('/myTask/index', [controllerMytask::class, 'index']);
    Route::get('/myTask/Create', [controllerMytask::class, 'create']);
    Route::get('/myTask/Edit', [controllerMytask::class, 'edit']);


});

Route::group(['prefix' => 'ManageSchool'], function () {
    Route::get('/index', [controllerManageSchool::class, 'index']);
    Route::get('/Create', [controllerManageSchool::class, 'create']);
    Route::get('/Edit', [controllerManageSchool::class, 'edit']);
    Route::get('/View', [controllerManageSchool::class, 'show']);
});
Route::group(['prefix' => 'Masters'], function () {
    Route::get('School/index', [controllerSchool::class, 'index']);
    Route::get('School/Create', [controllerSchool::class, 'create']);
    Route::get('School/View', [controllerSchool::class, 'show']);
    Route::get('School/Edit', [controllerSchool::class, 'edit']);
    // ==================headquarter=============//
    Route::get('Headquarter/index', [controllerHeadquarter::class, 'index']);
    // ==================Area=============//    
    Route::get('Area/index', [controllerArea::class, 'index']);
    // ===============State && City===================//
    Route::get('State/index', [controllerState::class, 'index']);
    Route::get('City/index', [controllerCity::class, 'index']);

});
