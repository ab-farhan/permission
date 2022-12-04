<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\RoleController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function (){

    Route::get('/dashboard',[AdminController::class,'index']);

    Route::get('/role',[RoleController::class,'index'])->name('admin.role.index');
    Route::get('/role-create',[RoleController::class,'create'])->name('admin.role.create');
    Route::post('/role-store',[RoleController::class,'store'])->name('admin.role.store');
    Route::get('/role-edit/{id}',[RoleController::class,'edit'])->name('admin.role.edit');
    Route::post('/role-update/{id}',[RoleController::class,'update'])->name('admin.role.update');

    Route::get('/crms',[CrmController::class,'index'])->name('admin.crm.index');
    Route::get('/crm-create',[CrmController::class,'create'])->name('admin.crm.create');
    Route::post('/crms-store',[CrmController::class,'store'])->name('admin.crm.store');
    Route::get('/crms-edit/{id}',[CrmController::class,'edit'])->name('admin.crm.edit');
    Route::post('/crms-update/{id}',[CrmController::class,'update'])->name('admin.crm.update');

    Route::get('/assign/permission/{id}',[CrmController::class,'create'])->name('admin.permission.assign');

});
require __DIR__.'/auth.php';
