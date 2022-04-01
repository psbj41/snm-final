<?php

use App\Http\Controllers\Backend\Admin\PermissionController;
use App\Http\Controllers\Backend\Admin\RoleController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SpecialController;
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

Route::middleware(['auth'])->group(function () {

    //user
    Route::resource('user', UserController::class);

    //role
    Route::resource('role', RoleController::class);
    Route::get('/role/{role}/assign-permission',[RoleController::class,'assignPermissionView'])->name('assign.permission');
    Route::post('/role/{role}/assign-permission',[RoleController::class,'assignPermission'])->name('assign.permission.store');

    //permission
    Route::resource('permission', PermissionController::class);

    //Pages
    Route::controller(PageController::class)->group(function () {
        Route::get('uploads-page', 'uploadPage')->name('upload.page');

        //thoughts
        Route::get('uploads-page/thought', 'uploadThoughtPage')->name('thought.upload.page');
        Route::post('uploads-page/thought', 'uploadThoughtStore')->name('thought.upload.store');
        Route::get('uploads-page/thought/data', 'thoughtDataPage')->name('thought.data.page');

        //Bhawans
        Route::get('uploads-page/bhawan', 'uploadBhawanPage')->name('bhawan.upload.page');
        Route::post('uploads-page/bhawan', 'uploadBhawanStore')->name('bhawan.upload.store');
        Route::get('uploads-page/bhawan/data', 'bhawanDataPage')->name('bhawan.data.page');

        //Admin
        Route::get('uploads-page/admin', 'uploadAdminPage')->name('admin.upload.page');
        Route::post('uploads-page/admin', 'uploadAdminStore')->name('admin.upload.store');
        Route::get('uploads-page/admin/data', 'adminDataPage')->name('admin.data.page');

        //Duty
        Route::get('uploads-page/duty', 'uploadDutyPage')->name('duty.upload.page');
        Route::post('uploads-page/duty', 'uploadDutyStore')->name('duty.upload.store');
        Route::get('uploads-page/duty/data', 'dutyDataPage')->name('duty.data.page');

    });

    //Special
    Route::resource('special', SpecialController::class);

    //Department
    Route::resource('department', DepartmentController::class);

});
